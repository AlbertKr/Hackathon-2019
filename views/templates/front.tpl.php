<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $title; ?> </title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href=".<?php echo DIRNAME; ?>public/bootstrap/css/bootstrap.min.css" />

    <!-- Custom styles for this template -->
    <link rel="stylesheet" type="text/css" href=".<?php echo DIRNAME;?>public/css/simple-sidebar.css" rel="stylesheet" />

    <!-- Mon style.css -->
    <link rel="stylesheet" type="text/css" href=".<?php echo DIRNAME;?>public/css/style.css" rel="stylesheet" />

    <script src="<?php echo DIRNAME; ?>public/jquery/jquery.min.js"></script>

    <script src="<?php echo DIRNAME; ?>public/bootstrap/js/bootstrap.bundle.js"></script>

</head>
<body>
    <div id="wrapper">
        <!-- Sidebar -->
        <?php 

            if(Auth::isConnect()){
        ?>
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Logo
                    </a>
                </li>
                <li>
                    <a href="#">Fil d'actualité</a>
                </li>
                <li class="sidebar-brand">
                  <a href="#">Votre profil</a>

                </li>
                <li>
                    <a href="#">Vos abonnées</a>
                </li>
                <li>
                    <a href="#">Vos abonnements</a>
                </li>
                <li>
                    <a href="#">Mon compte</a>
                </li>
                <li>
                    <a href="#">Aide</a>
                </li>
            </ul>
        </div>
        <?php

            }
        ?>

        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->

        <div class="container-fluid" id="page-content-wrapper">
            <?php
                include "views/front/".$this->v;
              ?>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->


    <!-- Menu Toggle Script -->
    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>
</body>
</html>