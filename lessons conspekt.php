<?php
###############################################################################
/*LESSON 3*/
###############################################################################


const DB_NAME = "test";
###############################################################################

echo "Hello world";
###############################################################################

$aray = aray(); #  масив
$aray = [2, 5];
    function logarifm(float $param, array $test) : int {
    return $param;} # такая запись работает только в 7 + верисии

& # ссылка (амперсант)
###############################################################################

unset ($k);# очищает переменную как только ссылка пропадает ссылка = указатель
###############################################################################

$b = "k";
###############################################################################

$$ b; #cыдка на имя переменной
###############################################################################

var_dump($k); # выводит всю инфу о переменной
###############################################################################

$k = 5;
if($k == 3) {
    $b = 4;
}
else {
   $b=1;
}
###############################################################################

if($userGroup == "admin"){
    if ($userPassword == "superadmin"){
     $access === true;
    } else {
        $access == false;
    }
}
elseif($userGroup == "moderator") {
    if ($userGroup == "moderator") {
        if ($userPassword == "moderator") {
            $access === true;
        } else {
            $access == false;
        }
    }
}
###############################################################################
/*LESSON 4*/
###############################################################################

array_merge(); /* сливает массивы */
count          /* к-во элементов в масиве */
###############################################################################

$list = [1,2,4];
$count = count(list);
for ($a = 0 ;$a < $count/2; $a++ ) {
    $tmp = $list[$a];
    $list[$a] = $list[$count - $a - 1];
    $list[$count - $a - 1] = $tmp;
}
###############################################################################