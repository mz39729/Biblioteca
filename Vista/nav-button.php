<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>
    <span>
        <?php if (isset($_SESSION['username'])) { ?>
            <i class="fas fa-solid fa-user"></i>
        <?php if ($_SESSION['tipo'] == "B") {
                echo "  Bibliotecario : " . $_SESSION['username'];
            } else if ($_SESSION['tipo'] == "P") {
                echo "  Profesor : " . $_SESSION['username'];
            } else if ($_SESSION['tipo'] == "E") {
                echo "  Estudiante : " . $_SESSION['username'];
            }
        } ?>
    </span>
</nav>