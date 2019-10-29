<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <i class="nav-icon fa fa-dashboard"></i> Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{  route('orders.index') }}">
                    <i class="nav-icon fa fa-opencart"></i> Pedidos
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{  route('products.index') }}">
                    <i class="nav-icon fa fa-cube"></i> Produtos
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{  route('clients.index') }}">
                    <i class="nav-icon fa fa-users"></i> Clientes
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{  route('representatives.index') }}">
                    <i class="nav-icon fa fa-user-circle"></i> Representantes
                </a>
            </li>      
            @loader(['loader_path' => 'sidebar.item'])
            <li class="nav-item mt-auto">
                <a class="nav-link nav-link-info" href="https://coreui.io">
                    <i class="nav-icon fa fa-qrcode"></i> Portal Scancode
                </a>
            </li>
        </ul>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>