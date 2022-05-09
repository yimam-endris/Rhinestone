<nav class="bottom-navbar">
    <div class="container">
        <ul class="nav page-navigation">
            <li class="nav-item">
                <a class="nav-link  {{ Route::is('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">
                    <span class="menu-title"><b>Dashboard</b></span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::is('contacts.*') ? 'active' : '' }}" href="{{ route('contacts.index') }}">
                    <span class="menu-title"><b>Contacts</b></span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link  {{ Route::is('invention-disclosures.*') ? 'active' : '' }}" href="{{ route('invention-disclosures.index') }}">
                    <span class="menu-title"><b>Invention Disclosures</b></span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <span class="menu-title"><b>Country</b></span>
                    <i class="fa fa-arrow"></i></a>
                <div class="submenu">
                    <ul class="submenu-item">
                        <li class="nav-item"><a class="nav-link"
                                href="#"><b>Patent</b></a></li>
                        <li class="nav-item"><a class="nav-link"
                                href="#"><b>Design</b></a></li>
                        <li class="nav-item"><a class="nav-link"
                                href="#"><b>Trademark</b></a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span class="menu-title"><b>Performance</b></span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span class="menu-title"><b>Invoices</b></span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span class="menu-title"><b>Settings</b></span>
                </a>
            </li>
        </ul>
    </div>
</nav>