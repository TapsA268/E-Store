<div class="offcanvas offcanvas-start p-3" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel"
    data-bs-theme="dark" style="width: 20%;">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel">Hey!</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <ul class="list-unstyled ps-0">
        <ul class="mb-1">
            <input type="search" class="form-control" id="buscar" placeholder="Buscar producto...">
            <ul id="resultados" class="list-unstyled mt-2"></ul>

        </ul>
        <li class="mb-2">
            <button class="btn btn-toggle btn-toggle-custom align-items-center rounded collapsed text-light"
                data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                    class="bi bi-bag" viewBox="0 0 16 16">
                    <path
                        d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z" />
                </svg>
                Pedidos
            </button>
            <div class="collapse {{ Route::is('user.userOrder') ? 'show' : '' }}" id="orders-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li class="mb-3"><a href="{{ route('user.userOrder') }}"
                            class="text-light link-sidebar-custom 
                        {{ Route::is('user.userOrder') ? 'active' : '' }} rounded text-decoration-none">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                class="bi bi-bag-check" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0" />
                                <path
                                    d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z" />
                            </svg>
                            Mis Pedidos
                        </a>
                    </li>
                    <li class="mb-3"><a href="#"
                            class="text-light link-sidebar-custom rounded text-decoration-none">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                class="bi bi-bag-x" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M6.146 8.146a.5.5 0 0 1 .708 0L8 9.293l1.146-1.147a.5.5 0 1 1 .708.708L8.707 10l1.147 1.146a.5.5 0 0 1-.708.708L8 10.707l-1.146 1.147a.5.5 0 0 1-.708-.708L7.293 10 6.146 8.854a.5.5 0 0 1 0-.708" />
                                <path
                                    d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z" />
                            </svg>
                            Pedidos Devueltos
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="border-top my-3"></li>
        <li class="mb-2">
            <button class="btn btn-toggle btn-toggle-custom align-items-center rounded collapsed text-light"
                data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                    class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                    <path fill-rule="evenodd"
                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                </svg>
                Cuenta
            </button>
            <div class="collapse {{ request()->is('perfil/editar') ? 'show' : '' }}" id="account-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li>
                        <a href="{{ url('/perfil/editar') }}"
                            class="{{ request()->is('perfil/editar') ? 'active' : '' }} text-light link-sidebar-custom rounded text-decoration-none">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                                <path
                                    d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1z" />
                            </svg>
                            Perfil
                        </a>
                    </li>
                    <li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                            class="d-flex align-items-center">
                            @csrf
                            <button type="submit"
                                class="text-danger link-sidebar-custom rounded text-decoration-none border-0 bg-transparent w-100 text-start">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    fill="currentColor" class="bi bi-door-open me-2" viewBox="0 0 16 16">
                                    <path d="M8.5 10c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1" />
                                    <path
                                        d="M10.828.122A.5.5 0 0 1 11 .5V1h.5A1.5 1.5 0 0 1 13 2.5V15h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V1.5a.5.5 0 0 1 .43-.495l7-1a.5.5 0 0 1 .398.117M11.5 2H11v13h1V2.5a.5.5 0 0 0-.5-.5M4 1.934V15h6V1.077z" />
                                </svg>
                                Cerrar Sesión
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const input = document.getElementById('buscar');
        const resultados = document.getElementById('resultados');

        input.addEventListener('input', function() {
            const valor = input.value.trim();

            if (valor.length === 0) {
                resultados.innerHTML = '';
                return;
            }

            fetch(`/Buscar?buscar=${encodeURIComponent(valor)}`)
                .then(response => response.json())
                .then(data => {
                    resultados.innerHTML = '';

                    if (data.length === 0) {
                        resultados.innerHTML =
                            '<li class="badge text-danger">No se encontraron productos.</li>';
                    } else {
                        data.forEach(producto => {
                            const li = document.createElement('li');
                            li.textContent = producto.nombre;
                            li.classList.add('mb-1', 'badge', 'text-bg-light');
                            resultados.appendChild(li);
                        });
                    }
                });
        });
    });
</script>
