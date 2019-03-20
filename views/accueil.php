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
</html>
