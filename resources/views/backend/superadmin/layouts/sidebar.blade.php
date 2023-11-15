<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
        <a class="nav-link @if(Request::segment(2) != 'dashboard') collapsed @endif" href="{{ url('superadmin/dashboard') }}">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
        </a>
    </li><!-- End Dashboard Nav -->

    <li class="nav-item">
        <a class="nav-link @if(Request::segment(2) != 'acara') collapsed @endif" href="{{ url('superadmin/acara') }}">
        <i class="bi bi-envelope"></i>
        <span>Daftar Acara</span>
        </a>
    </li><!-- End Daftar Acara Page Nav -->

    <li class="nav-item">
        <a class="nav-link @if(Request::segment(2) != 'users') collapsed @endif" href="{{ url('superadmin/users') }}">
        <i class="bi bi-person"></i>
        <span>Daftar Pengguna</span>
        </a>
    </li><!-- End Daftar Pengguna Page Nav -->

    <li class="nav-item">
        <a class="nav-link @if(Request::segment(2) != 'about') collapsed @endif" href="{{ url('superadmin/about') }}">
        <i class="bi bi-question-circle"></i>
        <span>Tentang Aplikasi</span>
        </a>
    </li><!-- End Tentang Page Nav -->

    </ul>

</aside><!-- End Sidebar-->