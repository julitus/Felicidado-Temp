<?php 
    $users_login = $this->Url->build(['controller' => 'Users', 'action' => 'login']);
    $users_index = $this->Url->build(['controller' => 'Users', 'action' => 'index']);
    $users_add = $this->Url->build(['controller' => 'Users', 'action' => 'add']);
    
    $cities_index = $this->Url->build(['controller' => 'Cities', 'action' => 'index']);
    $cities_add = $this->Url->build(['controller' => 'Cities', 'action' => 'add']);

    $states_index = $this->Url->build(['controller' => 'States', 'action' => 'index']);
    $states_add = $this->Url->build(['controller' => 'States', 'action' => 'add']);

    $countries_index = $this->Url->build(['controller' => 'Countries', 'action' => 'index']);
    $countries_add = $this->Url->build(['controller' => 'Countries', 'action' => 'add']);
?>

<nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html"><?= $this->fetch('title') ?></a>
    </div>

    <div class="header-right">

        <a href="message-task.html" class="btn btn-info" title="New Message"><b>30 </b><i class="fa fa-envelope-o fa-2x"></i></a>
        <a href="message-task.html" class="btn btn-primary" title="New Task"><b>40 </b><i class="fa fa-bars fa-2x"></i></a>
        <a href="login.html" class="btn btn-danger" title="Logout"><i class="fa fa-exclamation-circle fa-2x"></i></a>

    </div>

</nav>
<!-- /. NAV TOP  -->
<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li>
                <div class="user-img-div">
                    <?= $this->Html->image('user.png', ['class' => 'img-thumbnail']) ?>

                    <div class="inner-text">
                        Admin
                    <br />
                        <small>Último ingreso : 1 día </small>
                    </div>
                </div>
            </li>
            <li>
                <a href="#"><i class="fa fa-desktop "></i>Usuarios <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="<?= $users_index?>"><i class="fa fa-toggle-on"></i>Listado</a></li>
                    <li><a href="<?= $users_add?>"><i class="fa fa-bell "></i>Agregar</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-sitemap "></i>Ubigeo <span class="fa arrow"></span></a>
                 <ul class="nav nav-second-level">
                    <li>
                        <li>
                            <a href="#"><i class="fa fa-desktop "></i>Ciudades <span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li><a href="<?= $cities_index?>"><i class="fa fa-toggle-on"></i>Listado</a></li>
                                <li><a href="<?= $cities_add?>"><i class="fa fa-bell "></i>Agregar</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-desktop "></i>Estados/Regiones <span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li><a href="<?= $states_index?>"><i class="fa fa-toggle-on"></i>Listado</a></li>
                                <li><a href="<?= $states_add?>"><i class="fa fa-bell "></i>Agregar</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-desktop "></i>Paises <span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li><a href="<?= $countries_index?>"><i class="fa fa-toggle-on"></i>Listado</a></li>
                                <li><a href="<?= $countries_add?>"><i class="fa fa-bell "></i>Agregar</a></li>
                            </ul>
                        </li>
                    </li>
                </ul>
            </li>
            <li>
                <a class="active-menu" href="<?= $users_login?>"><i class="fa fa-sign-in "></i>Login</a>
            </li>
        </ul>
    </div>
</nav>