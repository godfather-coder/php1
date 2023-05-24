<?php
declare(strict_types=1);
echo "TASK N1".'<br>';

$data =[
    "temo" => 23,
    "nika" => 32,
    "giorgi" => 45,
    "lia" => 28,
    "mariami" =>15,
    "tako" => 35,
    "vako" => 55
];
foreach ($data as $pearson => $age){
    if($age >=30){
        echo $pearson.'<br>';
    }
}
echo "// // // // // // // // // // // // // // // // //".'<br>';;
echo "TASK N2".'<br>';
$intdata = [
    "12",
    "32",
    "118",
    "15",
    "3",
];
function multByTwo(int $element) :void{
   echo $element * 2 .'<br>';;
}
foreach($intdata as $item){
     multByTwo((int)$item);
}
