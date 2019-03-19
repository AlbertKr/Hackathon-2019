<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $title; ?> </title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="../public/bootstrap/css/bootstrap.min.css" />

    <!-- Mon style.css -->
    <link rel="stylesheet" type="text/css" href="../public/css/style.css" rel="stylesheet" />

    <script src="../public/jquery/jquery.min.js"></script>

    <script src="../public/bootstrap/js/bootstrap.bundle.js"></script>

</head>
<body>
    <div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <!-- Img -->
                    <a href="#">
                        Logo
                    </a>
                </li>
                <br />
                <li>
                  <!--<img src="">--><a href="#">Tous les sports</a>
                </li>
                <li>
                  <!--<img src="">--><a href="#">Football</a>

                </li>
                <li>
                    <!--<img src="">--><a href="#">Rugby</a>
                </li>
                <li>
                    <!--<img src="">--><a href="#">Basket</a>
                </li>
            </ul>
        </div>
        
        <!-- /#sidebar-wrapper -->

    </div>
    <!-- /#wrapper -->
    
    <div >
        Bulles
        <!-- TODO : BULLES D3J -->
    </div>
    <div style="display: none;">
        <ul class="sidebar-nav">
            <li>
                <p>Article n°1</p><h3>Title</h3><img>
            </li>
            <li>
                <p>Article n°2</p><h3>Title</h3><img>
            </li>
        </ul>
    </div>


    <!-- Menu Toggle Script -->
    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>
</body>
</html>
