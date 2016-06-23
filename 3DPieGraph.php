<?php 
// content="text/plain; charset=utf-8"
require_once ('jpgraph/jpgraph.php');
require_once ('jpgraph/jpgraph_pie.php');
require_once ('jpgraph/jpgraph_pie3d.php');

// if(!isset($_REQUEST['debug'])){
// echo 'Sorry , this web oage is debugging. --Axoford12';
// exit();
// }
$data = array(
    42,
    60,
    21,
    33
);
if (isset($_REQUEST['add']) && $_REQUEST['add'] == '1' && isset($_REQUEST['num'])) {
    
    $num = (int) $_REQUEST['num'];
    $data = array();
    for ($i = 0; $i < $num; $i ++) {
        if (@(int) $_REQUEST['n'.$i] >= 0) {
            
           @ array_push($data, (int) $_REQUEST['n' . $i]);
        }
    }
}

$graph = new PieGraph(300, 200);
$graph->SetShadow();

$p1 = new PiePlot3D($data);
if(isset($_REQUEST [ 'angle']) && $_REQUEST [ 'angle'] >= 5 && $_REQUEST [ 'angle'] <= 85){
    $p1->SetAngle($_REQUEST[ 'angle']);    
}
$graph->Add($p1);

if (file_exists('Pie3.png')) {
    unlink('Pie3.png');
}
// Display the graph
$graph->Stroke('Pie3.png');
?>
<html>
<head>
<title>Axoford12 3D Pie Graph</title>

</head>
<body>
	<img src="Pie3.png"></img>
</body>
</html>