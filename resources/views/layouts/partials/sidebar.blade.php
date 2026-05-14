{{-- ============================================================
     SIDEBAR - Veterinaria
     Partial incluido desde layouts/main.blade.php
     ============================================================ --}}

<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    {{-- Sidebar Brand --}}
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home') }}">
        <div class="sidebar-brand-icon">
            <i class="fas fa-paw"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Veterinaria</div>
    </a>

    {{-- Divider --}}
    <hr class="sidebar-divider my-0">

    {{-- Nav Item - Dashboard --}}
    <li class="nav-item {{ request()->routeIs('home') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    {{-- Divider --}}
    <hr class="sidebar-divider">

    {{-- Heading --}}
    <div class="sidebar-heading">
        Módulos
    </div>

    {{-- Nav Item - Placeholder para módulos futuros --}}
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePacientes"
            aria-expanded="false" aria-controls="collapsePacientes">
            <i class="fas fa-fw fa-dog"></i>
            <span>Pacientes</span>
        </a>
        <div id="collapsePacientes" class="collapse" aria-labelledby="headingPacientes" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Gestión:</h6>
                <a class="collapse-item" href="#">Lista de pacientes</a>
                <a class="collapse-item" href="#">Nuevo paciente</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseConsultas"
            aria-expanded="false" aria-controls="collapseConsultas">
            <i class="fas fa-fw fa-stethoscope"></i>
            <span>Consultas</span>
        </a>
        <div id="collapseConsultas" class="collapse" aria-labelledby="headingConsultas" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Gestión:</h6>
                <a class="collapse-item" href="#">Lista de consultas</a>
                <a class="collapse-item" href="#">Nueva consulta</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePropietarios"
            aria-expanded="false" aria-controls="collapsePropietarios">
            <i class="fas fa-fw fa-users"></i>
            <span>Propietarios</span>
        </a>
        <div id="collapsePropietarios" class="collapse" aria-labelledby="headingPropietarios" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Gestión:</h6>
                <a class="collapse-item" href="#">Lista de propietarios</a>
                <a class="collapse-item" href="#">Nuevo propietario</a>
            </div>
        </div>
    </li>

    {{-- Divider --}}
    <hr class="sidebar-divider d-none d-md-block">

    {{-- Sidebar Toggler --}}
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
