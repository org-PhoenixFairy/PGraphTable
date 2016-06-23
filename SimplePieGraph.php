<?php // content="text/plain; charset=utf-8"
require_once ('jpgraph/jpgraph.php');
require_once ('jpgraph/jpgraph_pie.php'); 

$data = array(40,60,21,33);

$graph = new PieGraph(300,200);
$graph->SetShadow();

$graph->title->Set("A simple Pie plot --by Axoford12");

$p1 = new PiePlot($data);
$graph->Add($p1);

 if(file_exists('Pie2.png')){
     unlink('Pie2.png');
 }
// Display the graph
$graph->Stroke('Pie2.png');
?>
<html>
<head>
<title>Axoford12 2D Pie Graph</title>

</head>
<body>
<img src="Pie2.png"></img>
</body>
</html>