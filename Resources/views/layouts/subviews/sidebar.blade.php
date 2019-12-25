<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <i class="nav-icon fa fa-dashboard"></i> Dashboard
                </a>
            </li>  
            @loader(['loader_path' => 'sidebar.item'])
            <li class="nav-item mt-auto"></li>
            @loader(['loader_path' => 'sidebar.bottom'])
        </ul>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>