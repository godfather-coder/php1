<?php
$x = 15;
$y = 13;
echo "x + y = ". $x+$y .'<br>';
echo "x - y = ". $x-$y .'<br>';
echo "x * y = ". $x*$y .'<br>';
echo "x / y = ". $x/$y .'<br>';
echo "x % y = ". $x%$y .'<br>';
echo "x ** y = ". $x**$y .'<br>';
$x=$y;
echo "x = y = ". $x .'<br>';
$x = 15;
$x+=$y;
echo "x += y = ". $x .'<br>';
$x = 15;
$x-=$y;
echo "x -= y = ". $x .'<br>';
$x = 15;
$x*=$y;
echo "x *= y = ". $x .'<br>';
$x = 15;
$x/=$y;
echo "x /= y = ". $x .'<br>';
$x = 15;
$x%=$y;
echo "x %= y = ". $x .'<br>';
$x =15;
echo "x == y = false".'<br>';
echo "x === y = false".'<br>';
echo "x != y = ";
echo $x!=$y;
echo '<br>'."x !== y = ";
echo $x!==$y.'<br>';
echo "x < y = ". $x<$y ;
echo '<br>'."x > y = ";
echo $x>$y .'<br>';
echo '<br>'."x <= y = false";
echo $x<=$y ;
echo '<br>'."x >= y = ";
echo $x>=$y ;