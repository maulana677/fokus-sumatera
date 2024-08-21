<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Fokus Sumatera</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">FS</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="{{ setSidebarActive(['dashboard.*']) }}"><a class="nav-link"
                    href="{{ route('dashboard.index') }}"><i class="fas fa-fire"></i><span>
                        Dashboard</span></a>
            </li>

            <li class="menu-header">Starter</li>

            <li class="{{ setSidebarActive(['kategori.*']) }}">
                <a class="nav-link" href="{{ route('kategori.index') }}"><i class="fas fa-list"></i>
                    <span>Kategori</span>
                </a>
            </li>

            <li class="{{ setSidebarActive(['artikel.*']) }}">
                <a class="nav-link" href="{{ route('artikel.index') }}"><i class="fas fa-address-card"></i>
                    <span>Artikel</span>
                </a>
            </li>

            {{--  <li
                class="dropdown {{ setSidebarActive(['admin.hero-sections.*', 'admin.principles.*', 'admin.statistics.*']) }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-globe"></i>
                    <span>Landing Page</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ setSidebarActive(['admin.hero-sections.*']) }}">
                        <a class="nav-link" href="{{ route('admin.hero-sections.index') }}">Hero Section</a>
                    </li>
                    <li class="{{ setSidebarActive(['admin.principles.*']) }}">
                        <a class="nav-link" href="{{ route('admin.principles.index') }}">Our Principles</a>
                    </li>
                    <li class="{{ setSidebarActive(['admin.statistics.*']) }}">
                        <a class="nav-link" href="{{ route('admin.statistics.index') }}">Company Stats</a>
                    </li>
                </ul>
            </li>  --}}

            {{--  <li class="{{ setSidebarActive(['admin.artikel.*']) }}">
                <a class="nav-link" href="{{ route('admin.artikel.index') }}"><i class="fas fa-address-card"></i>
                    <span>Our Teams</span>
                </a>
            </li>  --}}

        </ul>
    </aside>
</div>
