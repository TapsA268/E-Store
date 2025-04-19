<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        //Se crea una variable para validar el captcha en la creación de usuario
        $validator = Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'password' => $this->passwordRules(),
            'g-recaptcha-response' => ['required'] // Se agrega el campo g-recaptcha-response como requerido
    ]);

    // Verificación de reCAPTCHA
    $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
        'secret' => env('RECAPTCHA_SECRET_KEY'),
        'response' => $input['g-recaptcha-response'],
        'remoteip' => request()->ip()
    ]);

    $responseData = $response->json();

    if (!$responseData['success']) {
        // Si la verificación falla, agregamos un mensaje de error
        $validator->errors()->add('g-recaptcha-response', 'Por favor, verifica que no eres un robot.');
    }

    // Verificar si hay errores de validación
    if ($validator->fails()) {
        throw ValidationException::withMessages($validator->errors()->toArray());
    }

    // Si no hay errores, creamos el usuario
    return User::create([
        'name' => $input['name'],
        'email' => $input['email'],
        'password' => Hash::make($input['password']),
    ]);
}
    //     ])->validate();

    //     return User::create([
    //         'name' => $input['name'],
    //         'email' => $input['email'],
    //         'password' => Hash::make($input['password']),
    //     ]);
    // }
}
