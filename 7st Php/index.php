<?php

$n1 = 200;
$n2 = 400;
$op = '+';

if($op == '+'){
    echo $n1 + $n2;
}elseif($op == '-'){
    echo $n1 - $n2;
}elseif($op == '*'){
    echo $n1 * $n2;
}elseif($op == '/'){
    echo $n1 / $n2;
}else{
    echo "Invalid operator";
}
