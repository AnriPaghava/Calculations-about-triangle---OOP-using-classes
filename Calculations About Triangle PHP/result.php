<?php

if (!empty($_POST['init'])){
    
    $sideA;
    $sideB;
    $sideC;
    $type;
    $perimeter;
    $area;
    $radius;

    $info = array(
        'type' => $type,
        'sideA' => $sideA,
        'sideB' => $sideB,
        'sideC' => $sideC,
        'perimeter' => $perimeter,
        'area' => $area,
        'radius' => $radius,
        'area1'=> $Area1,
    );
}


ob_start();

$content = ob_get_clean();
