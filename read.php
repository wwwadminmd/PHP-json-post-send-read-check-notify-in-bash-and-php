<?php
$responseBody = file_get_contents('php://input');
$json = json_decode($responseBody);
//If you need return data
//echo json_encode($json);
//Save in json file
$date = date('d.m.y-h.i.s');
if($json){
    $fp = fopen('results_'.$date.'.json', 'w');
    fwrite($fp, json_encode($json));
    fclose($fp);
}
?>
