<?php
function info_about_triangle(triangle $triangle)
{

    switch ($triangle->getType()) {
        case 1:
            $tr_type = 'სხვადასხვა გვერდა';
            break;
        case 2:
            $tr_type = 'ტოლგვერდა';
            break;
    }
    echo
    '<p>შეოტანილი ინფორმაციის მიხედვით სამკუთხედი არის ', $tr_type, ' </p>',
    '<p>სამკუთხედის  შემოტანილი გვერდებია  '
    , $triangle->getSideA(), ', ',
    $triangle->getSideB(), ', ',
    $triangle->getSideC(), '</p>
    <p>სამკუთხედის პერიმეტრია  ',
    $triangle->get_perimeter(), '
    სამკუთხედის ფართობია ', 
    number_format($triangle->get_area(), 3, '.', ''), '</p><p>
    სამკუთხედში ჩახაზული წრეწირის რადიუსია  ',
    $triangle->findRadiusOfIncircle(), '<p></p>',
    '</p><p>
    სამკუთხედში ჩახაზული წრეწირის დიამეტრია  ',
    $triangle->findRadiusOfIncircle()*2, '<p></p>',
    '</p><p>
    სამკუთხედში შემოხაზული წრეწირის ფართობია  ',
    $triangle->findAreausOfoutcircle(), '<p></p>';


    
    
}

class triangle
{
    private $sideA;
    private $sideB;
    private $sideC;
    private $type;

   
    public function __construct($sideA, $sideB, $sideC, $type)
    {
        $this->sideA = $sideA;
        $this->sideB = $sideB;
        $this->sideC = $sideC;
        $this->type = $type;
    }
 
    public function setSideA($sideA)
    {
        $this->sideA = $sideA;
    }

    public function setSideB($sideB)
    {
        $this->sideB = $sideB;
    }

    public function setSideC($sideC)
    {
        $this->sideC = $sideC;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getSideA()
    {
        return $this->sideA;
    }

    public function getSideB()
    {
        return $this->sideB;
    }

    public function getSideC()
    {
        return $this->sideC;
    }

    public function getType()
    {
        return $this->type;
    }

}

class scalene_triangle extends triangle
{
    public function get_perimeter()
    {
        $perimeter = $this->getSideA() + $this->getSideB() + $this->getSideC();
        return $perimeter;
    }

    public function get_area()
    {
        $p = $this->get_perimeter() / 2;
        $area = sqrt($p * ($p - $this->getSideA()) * ($p - $this->getSideB()) * ($p - $this->getSideC()));
        return $area;
    }
    public function findRadiusOfIncircle()
    {
        $radius = $this -> get_area() / $this ->get_perimeter();
        return $radius;
    }
    public function findAreausOfoutcircle()
    {
        $Area1 = pi() * pow((($this -> getSideA() * $this -> getSideB() *
        $this -> getSideC()) / (4 * $this -> get_area())), 2);
        return $Area1;
    }

}

class equilateral_triangle extends triangle
{

    public function get_perimeter()
    {
        $perimeter = 3 * $this->getSideA();
        return $perimeter;
    }

    public function get_area()
    {
        $area = ($this->getSideA() * $this->getSideA() * sqrt(3)) / 4;
        return $area;
    }
    public function findRadiusOfIncircle()
    {
        $radius = $this -> get_area() / $this ->get_perimeter();
        return $radius;
    }
    public function findAreausOfoutcircle()
    {
        $Area1 = pi() * pow((($this -> getSideA() * $this -> getSideB() *
        $this -> getSideC()) / (4 * $this -> get_area())), 2);
        return $Area1;
    }
}
