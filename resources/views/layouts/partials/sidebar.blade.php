<div class="flex-shrink-0 p-3 bg-dark-secondary" style="width: 15%; z-index:0;">
    <ul class="list-unstyled ps-0">
        <ul class="mb-1">
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar" id="input-buscar">
            </form>
        </ul>                
        <li class="mb-1">
            <button class="btn btn-toggle btn-toggle-custom align-items-center rounded collapsed text-light" data-bs-toggle="collapse"
                data-bs-target="#orders-collapse" aria-expanded="false">
                Pedidos
            </button>
            <div class="collapse {{ Route::is('user.userOrder') ? 'show' : '' }}" id="orders-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">                    
                    <li><a href="{{route('user.userOrder')}}" class="text-light link-sidebar-custom 
                        {{ Route::is('user.userOrder') ? 'active' : '' }} rounded text-decoration-none">Mis Pedidos</a></li>                    
                    <li><a href="#" class="text-light link-sidebar-custom rounded text-decoration-none">Pedidos Devueltos</a></li>
                </ul>
            </div>
        </li>
        <li class="border-top my-3"></li>
        <li class="mb-1">
            <button class="btn btn-toggle btn-toggle-custom align-items-center rounded collapsed text-light" data-bs-toggle="collapse"
                data-bs-target="#account-collapse" aria-expanded="false">
                Cuenta
            </button>
            <div class="collapse {{ request()->is('perfil/editar') ? 'show' : '' }}" id="account-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">                    
                    <li><a href="{{ url('/perfil/editar') }}" class="{{request()->is('perfil/editar') ? 'active' : '' }} text-light link-sidebar-custom rounded text-decoration-none">Perfil</a></li>                    
                    <li><a href="#" class="text-light link-sidebar-custom rounded text-decoration-none">Cerrar Sesión</a></li>
                </ul>
            </div>
        </li>
    </ul>
</div>
