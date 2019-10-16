<header class="app-header navbar">
    <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="{{ route('dashboard') }}">
        <img class="navbar-brand-full" src="{{ url('modules/dashboard/img/logo.png') }}" width="89" height="25" alt="Scancode Logo">
        <img class="navbar-brand-minimized" src="{{ url('modules/dashboard/img/logo.png') }}" width="30" height="30" alt="Scancode Logo">
    </a>
    <ul class="nav navbar-nav ml-auto">
        <li class="nav-item d-md-down-none mr-3">Logado como <strong>{{ $user->name }}</strong>!</li>
        <li class="nav-item dropdown mr-4">
            <a class="nav-link nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <img class="img-avatar" src="{{ url('/') }}/modules/dashboard/img/companies/logo.png" alt="logo">
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-header text-center">
                    <strong>Empresa</strong>
                </div>
                <a class="dropdown-item" href="{{ route('companies.edit', 0) }}">
                    <i class="fa fa-info"></i> Informações
                </a>
                {{ Form::open(['route' => 'logout']) }}
                @csrf
                {{ Form::button('<i class="icon-logout"></i> Sair', ['type' => 'submit', 'class' => 'dropdown-item']) }}
                {{ Form::close() }}
                <div class="dropdown-header text-center">
                    <strong>Configurações</strong>
                </div>
                <a class="dropdown-item" href="{{ route('settings.index', 'events') }}">
                    <i class="fa fa-gears"></i> Sistema
                </a>
            </div>
        </li>
    </ul>
    <button class="navbar-toggler aside-menu-toggler d-md-down-none" type="button" data-toggle="aside-menu-lg-show">
        <span class="navbar-toggler-icon"></span>
    </button>
    <button class="navbar-toggler aside-menu-toggler d-lg-none" type="button" data-toggle="aside-menu-show">
        <span class="navbar-toggler-icon"></span>
    </button>
</header>