<?php


// class Fruit{
//     public $name;
//     public $color;
//     public $weight;

//     function set_name($name){
//         $this->name = $name;
//     }
//     function get_name(){
//         return $this->name;
//     }

//     function set_color($color){
//         $this->color = $color;
//     }

//     function get_color(){
//         return $this->color;
//     }

//     // function set_weight($weight){
//     //     $this->weight = $weight;
//     // }

//     // function get_weight(){
//     //     return $this->weight;
//     // }
// }
// $apple = new Fruit;
// $apple->set_name("apple");
// echo $apple->name . PHP_EOL;
// $apple->set_color("red");
// echo $apple->color . PHP_EOL;
// // $apple->set_weight(20);
// // echo $apple->weight;
// // echo $apple->get_weight();

// echo $apple->weight = 20;


// class Fruit{
//     public $name;
//     public $color;

//     function __construct($name , $color){
//         $this->name = $name;
//         $this->color = $color;
//     }

//     function get_name(){
//         return $this->name;
//     }

//     function get_color(){
//         return $this->color;
//     }
// }

// $first = new Fruit("apple", "red");
// echo $first->name;
// echo PHP_EOL;
// echo $first->color;
// echo PHP_EOL;
// // print_r($first);


class Fruit {
    public $name;
    public $color;
  
    function __construct($name, $color) {
      $this->name = $name;
      $this->color = $color;
    }
    function __destruct() {
      echo "The fruit is {$this->name} and the color is {$this->color}.";
    }
  }
  
  $apple = new Fruit("Apple", "red");


//   Class Constants
class Goodbye{
    const MESSAGE = "Goodbye World!";

    function bye(){
        self::MESSAGE;
    }
}
ECHO Goodbye::MESSAGE . PHP_EOL;