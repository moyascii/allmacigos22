 <!-- navBar -->
    <nav class="navbar navbar-default" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="home.php">Allmacigos</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav ">
            <li><a href="#">Mis Datos</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Administración <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Usuarios</a></li>
                    <li><a href="#">Control de Permisos</a></li>
                    <li <?php if (stripos($_SERVER['REQUEST_URI'],'administrarEspecie.php') !== false) {echo 'class="active"';} ?>><a href="administrarEspecie.php">Especies</a></li>
                    <li><a href="#">Variedades</a></li>
                    <li><a href="#">Clientes</a></li>
                    <li><a href="#">Vendedores</a></li>
                    <li><a href="#">Semillas</a></li>
                    <li><a href="#">Bandejas</a></li>
                    <li><a href="#">Sectores</a></li>
                    <li><a href="#">Parametros Generales</a></li>
                    <li><a href="#">Regiones</a></li>
                    <li><a href="#">Comunas</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Venta <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Nota de Venta</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Por Sembrar <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Control de Siembra</a></li>
                    <li><a href="#">Imprimir Siembra</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Siembra <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Control Stock</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Excedentes  <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Control de Excedentes</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Despacho y Facturación  <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Despachar</a></li>
                    <li><a href="#">Control de Despacho</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Control de Bandejar  <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Devolución</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Consultas e Informes  <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Historico de Ventas</a></li>
                    <li><a href="#">Historico de Siembras</a></li>
                    <li><a href="#">Informe de Rendimiento Final</a></li>
                </ul>
            </li>

        </ul>
    </div><!-- /.navbar-collapse -->
</nav>
    <!-- Fin navBar -->