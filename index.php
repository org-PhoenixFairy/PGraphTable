<?php
/**
 * @author Axoford12
 * @acscess 847072154
 * @see 2016Äê6ÔÂ22ÈÕ
 */

require_once ('jpgraph/jpgraph.php');
require_once ('jpgraph/jpgraph_line.php');


include 'Math.php';

// Some (random) data
$i = 27;
if(isset($_GET[ 'i']) && $_GET[ 'i'] > 0){
    $i = $_GET[ 'i'];
}
$i = (int)$i;

$ydata = Math::Compute($i);
$ydata_clone = $ydata;
sort($ydata_clone);
// print_r($ydata);
// Size of the overall graph
$width=600;
$height=650;

// Create the graph and set a scale.
// These two calls are always required
$graph = new Graph($width,$height);
$graph->title->Set("Request Index: ".$i.'    Max :'.$ydata_clone[count($ydata_clone)-1]);
$graph->subtitle->Set('Recompute count:'.count($ydata));
$graph->subsubtitle->Set('Powered by Axoford12   Q:847072154');
$graph->SetScale('intlin');

// Create the linear plot
$lineplot=new LinePlot($ydata);

// Add the plot to the graph
$graph->Add($lineplot);

// Display the graph
if(file_exists('T.png')){
   unlink('T.png'); 
}
$graph->Stroke('T.png');
?>
<html>
<head><title>Axoford12 Graph table</title></head>
<body>
<img src="T.png"></img>
</body>
</html>
