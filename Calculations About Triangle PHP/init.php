<?php
function init()
{

    if (!is_numeric($_POST['sideA']) || !is_numeric($_POST['sideB']) || !is_numeric($_POST['sideC'])) {
        $error = 'არასწორი სახის პარამეტრები';
        header('Location: error.php?error=' . $error);
        exit;
    }

    $sideA = $_POST['sideA'];
    $sideB = $_POST['sideB'];
    $sideC = $_POST['sideC'];
    if ($sideA + $sideB <= $sideC || $sideA + $sideC <= $sideB || $sideC + $sideB <= $sideA) {
        $error = 'შემოტანილი პარამეტრებით სამკუთხდი არ მიიღება';
        header('Location: error.php?error=' . $error);
        exit;
    }


    $type = $_POST['type'];

    switch ($type) {
        case 1: 
            $triangle = new scalene_triangle($sideA, $sideB, $sideC, $type);
            break;
        case 2: 
            $triangle = new equilateral_triangle($sideA, $sideB, $sideC, $type);
            break;
    }
    return $triangle;
}

?>
