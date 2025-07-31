<aside class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <img src="{{ asset('assets/images/logo-icon.png') }}" class="logo-icon" alt="logo">
        <h4 class="logo-text">SYN-UI</h4>
        <div class="toggle-icon ms-auto"><ion-icon name="menu-sharp"></ion-icon></div>
    </div>

    <ul class="metismenu" id="menu">
        <li>
            <a href="{{ url('/dashboard') }}">
                <div class="parent-icon"><ion-icon name="home-outline"></ion-icon></div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>
        <li>
            <a href="#">
                <div class="parent-icon"><ion-icon name="people-outline"></ion-icon></div>
                <div class="menu-title">Users</div>
            </a>
        </li>
        <li>
            <a href="#">
                <div class="parent-icon"><ion-icon name="settings-outline"></ion-icon></div>
                <div class="menu-title">Settings</div>
            </a>
        </li>
        <li>
            <a href="{{ route('logout') }}"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <div class="parent-icon"><ion-icon name="log-out-outline"></ion-icon></div>
                <div class="menu-title">Logout</div>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>
    </ul>
</aside>
