<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Barra lateral - Marca -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php?c=Inicio">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-book"></i>
        </div>
        <div class="sidebar-brand-text mx-3">BIBLIOTECA</div>
    </a>

    <!-- Divisor -->
    <hr class="sidebar-divider my-0">

    <!-- Elemento de navegación - Tablero -->
    <li class="nav-item active">
        <a class="nav-link" href="index.php?c=Inicio">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard / Inicio</span></a>
    </li>

    <hr class="sidebar-divider d-none d-md-block">

    <li class="nav-item active">
        <a class="nav-link" href="index.php?c=usuario">
            <i class="fas fa-solid fa-users"></i>
            <span>Usuarios</span></a>
    </li>

    <li class="nav-item active">
        <a class="nav-link" href="index.php?c=libro">
            <i class="fas fa-solid fa-book"></i>
            <span>Libros</span></a>
    </li>
    <?php
    if (isset($_SESSION['username'])) { ?>
        <li class="nav-item active">
            <a class="nav-link" href="index.php?c=categoria">
                <i class="fas fa-solid fa-swatchbook"></i>
                <span>Categoria</span></a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="index.php?c=prestamo">
                <i class="fas fa-solid fa-book-open"></i>
                <span>Prestamos</span></a>
        </li>
    <?php } ?>
    <?php if (!isset($_SESSION['username'])) { ?> 
        <li class="nav-item active">
            <a class="nav-link" href="index.php?c=usuario&a=login">
                <i class="fas fa-solid fa-user"></i>
                <span>Iniciar Sesion</span></a>
        </li>
    <?php } ?>
    <li class="nav-item active">
        <a class="nav-link" href="index.php?c=usuario&a=nuevo">
            <i class="fas fa-solid fa-user-plus"></i>
            <span>Registrar</span></a>
    </li>
    <?php if (isset($_SESSION['username'])) { ?> 
    <li class="nav-item active">
        <a class="nav-link" href="index.php?c=Inicio&a=salir">
            <i class="fas fa-solid fa-"></i>
            <span>Salir</span></a>
    </li>
    <?php } ?>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>