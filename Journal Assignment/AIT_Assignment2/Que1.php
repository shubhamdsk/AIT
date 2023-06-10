<?php

$str1 = array("Sophia"=> "31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
$str2 = array("Vijay"=> "32","Jacob"=>"41","Root"=>"23","Ramesh"=>"40");

$menu=$_GET['menu'];

switch ($menu) {

    case 1:avalue($str1);break;
    
    case 2:avwkey($str1);break;

    case 3 : intersection($str1,$str2);break;

    case 4: union($str1,$str2);break;
    

}

function avalue($str1){
    echo "<br>";
    echo "<br> Ascending order sort by value <br>";
    echo "<br>";
    sort($str1);
    print_r($str1);

    echo "<br>";
    echo "<br> Descending order sort by Value <br>";
    echo "<br>";
    rsort($str1);
    print_r($str1);
}

function avwkey($str1){
    echo "<br>";
    echo "<br> Sort the array by values without changing the keys in Ascending Order<br>";
    echo "<br>";
    asort($str1);
    print_r($str1);

    echo "<br>";
    echo "<br> Sort the array by values without changing the keys in Descending Order <br>";
    echo "<br>";
    arsort($str1);
    print_r($str1);
}

function intersection($str1,$str2){
    print_r($str1); 
    print("<br>");
    print_r($str2);
    echo "<br>";
    echo "<br> Intersection of Two Array <br>";
    echo "<br>";
    print_r(array_intersect($str1,$str2));
}

function union($str1,$str2){
    print_r($str1);
    print("<br>");
    print_r($str2);
    echo "<br>";
    echo "<br> Union of Two Array <br>";
    echo "<br>";
    print_r(array_merge($str1,$str2));
}
?>