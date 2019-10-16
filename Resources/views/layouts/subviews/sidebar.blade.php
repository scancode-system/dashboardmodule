<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <i class="nav-icon fa fa-dashboard"></i> Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{  route('companies.edit', 2) }}">
                    <i class="nav-icon fa fa-opencart"></i> Pedidos
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{  route('companies.edit', 2) }}">
                    <i class="nav-icon fa fa-cube"></i> Produtos
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{  route('companies.edit', 3) }}">
                    <i class="nav-icon fa fa-users"></i> Clientes
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{  route('companies.edit', 4) }}">
                    <i class="nav-icon fa fa-credit-card"></i> Pagamentos
                </a>
            </li>
        </ul>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>