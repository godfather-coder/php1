<?php
abstract class Cars{
    abstract function printCarName():void;
}
class MercedesBenz extends Cars {
     function printCarName():void
    {
        print "Mercedes-Benz".'<br>';
    }
}
class BMW extends Cars {
    function printCarName():void
    {
        print "BMW".'<br>';
    }
}
$MERCEDES = new MercedesBenz();
$MERCEDES->printCarName();
$BMW = new BMW();
$BMW->printCarName();

class Foo{
    static $name ="Foo".'<br>';
    static function intro(): string{
        return "This is a text".'<br>';
    }
}
echo Foo::$name;
echo Foo::intro();