<?php

if (isset($_GET["remove"])) {
    $id = (int) $_GET["remove"];
    $all = file_get_contents('dataa.json');
    $all = json_decode($all, true);
    foreach ($all as $key => $val) {
        foreach($val as $_key => $val){
        if($val===$id){
            $id=$key;
        break;
        }

    }
    }
    $jsonfile = $all[$id];

    if ($jsonfile) {
        unset($all[$id]);
        $all = array_values($all);
        $all = json_encode($all);
        file_put_contents("dataa.json", $all);
    }
    header("Location: ./index.php");
}