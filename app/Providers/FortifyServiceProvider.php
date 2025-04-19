<?php

namespace App\Providers;

use App\Actions\Fortify\CreateNewUser;
use App\Actions\Fortify\ResetUserPassword;
use App\Actions\Fortify\UpdateUserPassword;
use App\Actions\Fortify\UpdateUserProfileInformation;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;
use Laravel\Fortify\Fortify;
//Para validar captcha
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Http;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;


class FortifyServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Fortify::loginView('auth.login');

        // Agrega la validación de reCAPTCHA al intento de inicio de sesión
        Fortify::authenticateUsing(function (Request $request) {
            $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
                'secret' => env('RECAPTCHA_SECRET_KEY'),
                'response' => $request->input('g-recaptcha-response'),
                'remoteip' => $request->ip(),
            ]);
        
            $data = $response->json();
        
            if (!$data['success']) {
                throw ValidationException::withMessages([
                    'g-recaptcha-response' => 'Por favor, completa el reCAPTCHA correctamente.',
                ]);
            }
        
            // Validación de las credenciales de inicio de sesión
            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials, $request->filled('remember'))) {
                return redirect()->intended('/home');
            }
        
            throw ValidationException::withMessages([
                'email' => 'Las credenciales proporcionadas no son válidas.',
            ]);
        });

        Fortify::registerView('auth.register');
        
        //Mostrar link para reestablecer la contraseña
        Fortify::requestPasswordResetLinkView('auth.forgot-password');
        
        //Mostrar la vista(Formulario) para reestablecer la contraseña
        Fortify::resetPasswordView('auth.reset-password');

        Fortify::createUsersUsing(CreateNewUser::class);
        Fortify::updateUserProfileInformationUsing(UpdateUserProfileInformation::class);
        Fortify::updateUserPasswordsUsing(UpdateUserPassword::class);
        Fortify::resetUserPasswordsUsing(ResetUserPassword::class);

        RateLimiter::for('login', function (Request $request) {
            $throttleKey = Str::transliterate(Str::lower($request->input(Fortify::username())).'|'.$request->ip());

            return Limit::perMinute(5)->by($throttleKey);
        });

        RateLimiter::for('two-factor', function (Request $request) {
            return Limit::perMinute(5)->by($request->session()->get('login.id'));
        });

        //Vista para verificar email
        Fortify::verifyEmailView('auth.verify-email');

        //Vista para confirmar contraseña
        Fortify::confirmPasswordView('auth.password-confirm');
        
        //Vista para ingresar codigo de 2fa
        Fortify::twoFactorChallengeView('auth.two-factor-challenge');

    }
}
