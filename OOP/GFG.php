<?php

class GFG{
    private $userId;
    private $pwd;

    function changeData($ui, $p){
        echo $this->userId = $ui. PHP_EOL;
        echo $this->pwd = $p;
    }
}
$obj = new GFG();
$obj->changeData(2, "alaa");
