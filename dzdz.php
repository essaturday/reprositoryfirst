<?php
$cars = array
(
    array('key_a' =>"Volvo",'key_b' =>22,'key_c' =>18),
    array('key_a' =>"BMW",'key_b' =>15,'key_c' =>23),
    array('key_a' =>"Saab",'key_b' =>5,'key_c' =>2),
    array('key_a' =>"Land Rover",'key_b' =>17,'key_c' =>15),
);
function sorter($key){
    return function ($a, $b)
    use ($key){
        return strnatcmp($a[$key],$b[$key]);
    };
    usort ($cars, sorter('key_b'));
    foreach ($cars as $item){
        echo $item['key_a'].','.$item['key_b'].','.$item['key_c'].\n;
    }
};