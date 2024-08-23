<?php

#an empty class Square that defines a square

class Square {
    private $size;

    function __construct($size = 0){
        if(gettype($size) != "integer"){
            throw new TypeError("Size must be an integer");
        }elseif($size < 0){
            throw new OutOfRangeException("Size must be a positive integer");
        }
        $this->size = $size;
    }

    function get_size(){
        return $this->size;
    }

    public function get_area(){
        return $this->size * $this->size;
    }

    public function set_area($area){
        if(gettype($area)!= "integer"){
            throw new TypeError("Area must be an integer");
        } elseif($area < 0){
            throw new OutOfRangeException("Area must be a positive integer");
        }
        $this->size = sqrt($area);
    }

    public function my_print(){
        if ($this->size == 0){
            echo "";
        }
        for ($i = 1; $i <= $this->size; $i++){
            for ($j = 1; $j <= $this->size; $j++){
                echo "* ";
            }
            echo "\n";
        }
    }
}

$square = new Square(10);
echo $square->get_area() . PHP_EOL;
echo $square->my_print();
