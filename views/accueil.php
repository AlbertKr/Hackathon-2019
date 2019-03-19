<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SportSearch</title>

    <link rel="icon" href="../public/img/logo.ico">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="../public/bootstrap/css/bootstrap.min.css" />

    <!-- Mon style.css -->
    <link rel="stylesheet" type="text/css" href="../public/css/style.css" rel="stylesheet" />

    <script src="../public/jquery/jquery.min.js"></script>

    <script src="../public/bootstrap/js/bootstrap.bundle.js"></script>

</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 side">
                <nav class="navbar">
                    <a class="navbar-brand logo" href="#"><img width="30" height="30" src="../public/img/logo.svg"><strong>Sport</strong>Search</a>
                    <form class="navbar-form navbar-right inline-form">
                        <div class="form-group">
                            <input type="search" class="input-sm form-control" placeholder="Recherche">
                        </div>
                    </form>
                    <ul class="nav navbar-nav menu">
                        <li><a href="#"><i class="icon"><img src="../public/img/all.png" class=""></i>Tous les sports</a></li>
                        <li><a href="#"><i class="icon"><img src="../public/img/foot.png" class=""></i>Football</a></li>
                        <li><a href="#"><i class="icon"><img src="../public/img/rugby.png" class=""></i>Rugby</a></li>
                        <li><a href="#"><i class="icon"><img src="../public/img/basket.png" class=""></i>Basket</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-10 main" style="display: none;">
                <div>
                    Bulles
                    <!-- TODO : BULLES D3J -->
                </div>
            </div>
            <div class="col-lg-10 main">
                <div class="ensemble">
                    <div class="article col-lg-10">
                        <img src="../public/img/didi.png" class="imgArticle">
                        <h4>PSG - OM (3-1) : Didier Deschamps réagit sur le comportement de Kylian Mbappé</h4>
                        <h5 class="content">But! Football Club - Il y a 3 heures 18/03/2019</h5>
                        <h5 class="ngrams">Mbappé : 20  Neymar : 18  Ligue 1 : 15  Didier Deschamps : 14</h5>
                    </div>
                    <div class="article col-lg-10">
                        <img src="../public/img/didi.png" class="imgArticle">
                        <h4>PSG - OM (3-1) : Didier Deschamps réagit sur le comportement de Kylian Mbappé</h4>
                        <h5 class="content">But! Football Club - Il y a 3 heures 18/03/2019</h5>
                        <h5 class="ngrams">Mbappé : 20  Neymar : 18  Ligue 1 : 15  Didier Deschamps : 14</h5>
                    </div>
                    <div class="article col-lg-10">
                        <img src="../public/img/didi.png" class="imgArticle">
                        <h4>PSG - OM (3-1) : Didier Deschamps réagit sur le comportement de Kylian Mbappé</h4>
                        <h5 class="content">But! Football Club - Il y a 3 heures 18/03/2019</h5>
                        <h5 class="ngrams">Mbappé : 20  Neymar : 18  Ligue 1 : 15  Didier Deschamps : 14</h5>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- /#wrapper -->

        
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
