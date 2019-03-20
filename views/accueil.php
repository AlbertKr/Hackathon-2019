<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
<<<<<<< HEAD

    <title><?php echo $title; ?> </title>

=======
    
    <title>SportsSearch</title>

    <link rel="icon" href="../public/img/logo.ico">
>>>>>>> e209d3398c9bc231c78c8148fe2da595d7df2b56
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="../public/bootstrap/css/bootstrap.min.css" />

    <!-- Mon style.css -->
    <link rel="stylesheet" type="text/css" href="../public/css/style.css" rel="stylesheet" />
<<<<<<< HEAD
=======
    <!-- Pour ceux qui ont une résolution inférieure à 1024px -->    
    <link rel="stylesheet" media="screen and (max-width: 1024px)" href="../public/css/petite_resolution.css" /> 
>>>>>>> e209d3398c9bc231c78c8148fe2da595d7df2b56

    <script src="../public/jquery/jquery.min.js"></script>

    <script src="../public/bootstrap/js/bootstrap.bundle.js"></script>
<<<<<<< HEAD
    <script type="text/javascript" src="https://d3js.org/d3.v4.min.js"></script>

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
        <?php
        /* foreach ($data as $d):
            echo "<br>";    
            echo $d["ngram"];  
            echo $d["count_articles"];  
            echo "______";
        endforeach;*/

        ?>











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

dataset = {
        "children":   <?=json_encode($dataset)?> // don't forget to sanitize 


    /*"children": [{"Name":"PSG","Count":4319},
        {"Name":"Manchester","Count":4159},
        {"Name":"Neymar","Count":2583},
        {"Name":"Playoff","Count":2074},
        {"Name":"Serena Williams","Count":1894},
        {"Name":"FIFA","Count":1809}]*/
};

console.log(dataset);

var diameter = 600;
var color = d3.scaleOrdinal(d3.schemeCategory20);

var bubble = d3.pack(dataset)
    .size([diameter, diameter])
    .padding(1.5);

var svg = d3.select("body")
    .append("svg")
    .attr("width", diameter)
    .attr("height", diameter)
    .attr("class", "bubble");

var nodes = d3.hierarchy(dataset)
    .sum(function(d) { return d.Count; });

var node = svg.selectAll(".node")
    .data(bubble(nodes).descendants())
    .enter()
    .filter(function(d){
        return  !d.children
    })
    .append("g")
    .attr("class", "node")
    .attr("transform", function(d) {
        return "translate(" + d.x + "," + d.y + ")";
    });

node.append("title")
    .text(function(d) {
        return d.Name + ": " + d.Count;
    });

node.append("circle")
    .attr("r", function(d) {
        return d.r;
    })
    .style("fill", function(d,i) {
        return color(i);
    });

node.append("text")
    .attr("dy", ".2em")
    .style("text-anchor", "middle")
    .text(function(d) {
        return d.data.Name.substring(0, d.r / 3);
    })
    .attr("font-family", "sans-serif")
    .attr("font-size", function(d){
        return d.r/5;
    })
    .attr("fill", "white");


node.append("text")
    .attr("dy", "1.3em")
    .style("text-anchor", "middle")
    .text(function(d) {
        return d.data.Count;
    })
    .attr("font-family",  "Gill Sans", "Gill Sans MT")
    .attr("font-size", function(d){
        return d.r/5;
    })
    .attr("fill", "white");



d3.select(self.frameElement)
    .style("height", diameter + "px");



</script>

</body>
=======

</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 side">
                <nav class="navbar">
                    <a class="navbar-brand logo" href="defaut"><img width="35" height="35" src="../public/img/logo.svg"><strong>Sport</strong>Search</a>
                    <form class="navbar-form navbar-right inline-form" id="div_input_search_web">
                        <input type="text" id="input_search_web" name="input_search_web">
                        <img id="img_search" src="../public/img/input_search.png">
                    </form>
                    <form class="navbar-form navbar-right inline-form" id="div_input_search">
                        <input type="text" id="input_search" name="input_search">
                        <img id="img_search" src="../public/img/input_search.png">
                    </form>
                    <ul class="nav navbar-nav menu">
                        <li><a href="#" id="search"><i class="icon"><img src="../public/img/search.png"></i></a></li>
                        <li><a href="#" style="display:flex; align-items:center;"><i class="icon" ><img src="../public/img/all.png" class=""></i><p class="label_responsive">Tous les sports</p></a></li>
                        <li><a href="#" style="display:flex; align-items:center;"><i class="icon"><img src="../public/img/foot.png" class=""></i><p class="label_responsive">Football</p></a></li>
                        <li><a href="#" style="display:flex; align-items:center;"><i class="icon"><img src="../public/img/rugby.png" class=""></i><p class="label_responsive">Rugby</p></a></li>
                        <li><a href="#" style="display:flex; align-items:center;"><i class="icon"><img src="../public/img/basket.png" class=""></i><p class="label_responsive">Basket</p></a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-10 main" id="bulles" style="display: none;">
                <div>
                    Bulles
                    <!-- TODO : BULLES D3J -->
                </div>
            </div>
            <div class="col-lg-10 main" id="article">
                <div class="fond_blanc" style="display: flex;width: 100%;height: 100%;position: absolute;z-index: 1;align-content: center;justify-content: center;">
                    <img src="../public/img/loading.gif" class=".dialog-animation" style="margin: auto;height: 50%;">
                </div>
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
        
    </div>
</body>

<script src="../public/js/responsive.js"></script>
<script type="text/javascript">
    $(document).on({
        ajaxStart: function () {
            $('.fond_blanc').css("display", "flex");
            $('.fond_blanc').css("width", "100%");
            $('.fond_blanc').css("height", "100%");
            $('.fond_blanc').css("position", "absolute");
            $('.fond_blanc').css("z-index", "1");
            $('.fond_blanc').css("align-content", "center");
            $('.fond_blanc').css("justify-content", "center");
            $('.dialog-animation').css("height", "50%");
            $('.dialog-animation').css("margin", "auto");
        },
        ajaxStop: function () {
            $('.dialog-animation').css("display", "none");
            $('.fond_blanc').css("display", "none");
        }
    });
</script>

>>>>>>> e209d3398c9bc231c78c8148fe2da595d7df2b56
</html>
