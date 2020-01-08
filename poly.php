<?php
$array = array();
$array[] = array('a','b','c','d','e');
$array[] = array('f','g','h','j','k');
$array[] = array('l','m','n','o','p');
$array[] = array('q','r','s','t','u');
$array[] = array('v','w','x','y','z');

$str= "2315313134";

for ($c = 0; $c < strlen($str); $c+=2) {
        $d = $c + 1;
        $left = $str[$c] - 1;
        $top = $str[$d] - 1;
        echo $array[$left][$top];
}

echo "\n\n";

?>
