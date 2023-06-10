<?php
$str = $_GET['str'];
$menu = $_GET['menu'];
switch ($menu) {
    case "Length":
        LengthofString($str);
        break;
    case "CountWords":
        CountWords($str);
        break;
    case "Upper":
        UpperCase($str);
        break;

}
function LengthofString($str)
{
    $Length = strlen($str);
        echo "$str<br>" . "Length : " . $Length;
}

function UpperCase($str)
{
    $upper = strtoupper($str);
    echo "Original String : " . "$str<br>";
    echo "Upper Case String : " . "$upper<br>";
}
function CountWords($str)
{
    $wordCount = str_word_count($str);
    echo "Number of words: $wordCount<br>";
}

?>