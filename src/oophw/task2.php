<?php
class Car{
    private $color;
    public function setColor(string $color){
        $this->color=$color;
    }
    public function getColor(){
        return $this->color;
    }
}

$car  =new Car();
$car->setColor("ყვითელი");
echo $car->getColor();