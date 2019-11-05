<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <i class="nav-icon fa fa-dashboard"></i> Dashboard
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