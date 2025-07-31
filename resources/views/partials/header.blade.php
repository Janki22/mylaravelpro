<header class="top-header">
    <nav class="navbar navbar-expand">
        <div class="mobile-toggle-icon d-xl-none">
            <ion-icon name="menu-outline"></ion-icon>
        </div>
        <div class="top-navbar-right ms-auto">
            <ul class="navbar-nav align-items-center">
                <li class="nav-item">
                    <span class="nav-link">Welcome, {{ Auth::user()->name ?? 'User' }}</span>
                </li>
            </ul>
        </div>
    </nav>
</header>
