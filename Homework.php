<?php
/**
 * Created by PhpStorm.
 * User: User
* Date: 31.08.2017
* Time: 12:31
*/
function setAsIs($name, $ebay_type){
    if($ebay_type != 'Default') {
        $name = 'AS IS ' . $name;
    }
    return $name;
}
