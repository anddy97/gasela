<div class="navegadorarriba">
    <a class="cont-icon-users" href="usuario.html">
        <i class="icon-user"></i>
    </a>
    <h4>Gasela</h4>
    <a class="cont-icon-cart" href="cart.php">
        <i class="icon-basket phone"><span class="cart">0</span></i>
    </a>
</div>
<header class="menu-respo">
    <nav class=" nav">
        <div class="nav-wrapper container">
            <!-- logo ----->
            <a class="brand-logo left hide-on-med-and-down logo" href="index.php">Gasela</a>
            <!-- buscador -->
            <a class="brand-logo sidenav-trigger left " href="index.php">
                <form action="">
                    <div class="input-field">
                        <input class="nav-buscador" type="search" name="search" placeholder="buscar...">
                    </div>
                </form>
            </a>
            <!-- menu-phone -->
            <a href="#" data-target="mobile-demo" class="sidenav-trigger right"><i class="icon-menu"></i></a>
            <ul class=" hide-on-med-and-down right">
                <li>
                    <form action="">
                        <div class="input-field">
                            <input class="nav-buscador" type="search" name="search" placeholder="buscar...">
                        </div>
                    </form>
                </li>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="catalogo.php">Catalogo</a></li>
                <li><a href="contacto.php">Contacto</a></li>
                <li><a href="usuario.php"><i class="icon-user "></i></a></li>
                <li><a class="carr" href="cart.php"><i class="icon-basket">
                            <span class="cart">0</span>
                        </i></a></li>
            </ul>
        </div>

    </nav>
</header>

<ul class="sidenav nav-deslizable" id="mobile-demo">
    <li><a href="index.php"><i class="icon-home-1 right"></i>Inicio</a></li>
    <div class="divider"></div>
    <li><a href="catalogo.php"><i class="icon-th right"></i> Catalogo</a></li>
    <div class="divider"></div>
    <li><a href="contacto.php"><i class="icon-mail right"></i>Contacto</a></li>
    <div class="divider"></div>
    <li><a href="usuario.php"><i class="icon-user right"></i>Mis compras</a></li>
    <div class="divider"></div>
    <li><a href="cart.php"><i class="icon-basket right"></i>Carrito</a></li>
</ul>