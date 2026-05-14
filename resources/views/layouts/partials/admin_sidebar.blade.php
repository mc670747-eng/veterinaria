{{-- ============================================================
     SIDEBAR - Administrador
     Partial incluido desde layouts/admin.blade.php
     ============================================================ --}}

<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

    {{-- Sidebar Brand --}}
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin.home') }}">
        <div class="sidebar-brand-icon">
            <i class="fas fa-user-shield"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin Vet</div>
    </a>

    {{-- Divider --}}
    <hr class="sidebar-divider my-0">

    {{-- Nav Item - Dashboard --}}
    <li class="nav-item {{ request()->routeIs('admin.home') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.home') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard Admin</span>
        </a>
    </li>

    {{-- Divider --}}
    <hr class="sidebar-divider">

    {{-- Heading --}}
    <div class="sidebar-heading">
        Gestión Administrativa
    </div>

    {{-- Nav Item - Usuarios --}}
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUsuarios"
            aria-expanded="false" aria-controls="collapseUsuarios">
            <i class="fas fa-fw fa-users-cog"></i>
            <span>Usuarios y Roles</span>
        </a>
        <div id="collapseUsuarios" class="collapse" aria-labelledby="headingUsuarios" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Administración:</h6>
                <a class="collapse-item" href="#">Lista de Usuarios</a>
                <a class="collapse-item" href="#">Nuevo Usuario</a>
            </div>
        </div>
    </li>

    {{-- Nav Item - Reportes --}}
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseReportes"
            aria-expanded="false" aria-controls="collapseReportes">
            <i class="fas fa-fw fa-chart-line"></i>
            <span>Reportes</span>
        </a>
        <div id="collapseReportes" class="collapse" aria-labelledby="headingReportes" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Financiero y Clínico:</h6>
                <a class="collapse-item" href="#">Ingresos</a>
                <a class="collapse-item" href="#">Estadísticas Médicas</a>
            </div>
        </div>
    </li>

    {{-- Nav Item - Configuración --}}
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-cogs"></i>
            <span>Configuración Sistema</span>
        </a>
    </li>

    {{-- Divider --}}
    <hr class="sidebar-divider d-none d-md-block">

    {{-- Sidebar Toggler --}}
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
