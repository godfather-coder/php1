<?php
class  Fruit{
    protected $color;
    protected $weight;
    public function __construct($color,$weight)
    {
        $this->weight=$weight;
        $this->color=$color;
    }
}
class Mnago extends Fruit{
    function wc(){
        return array("color"=>$this->color,"weight"=>$this->weight);
    }
}

$mng = new Mnago("white",13);

echo '<pre>';
var_dump($mng->wc());
echo '</pre>';