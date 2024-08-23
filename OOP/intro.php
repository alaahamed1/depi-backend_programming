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
// class Goodbye{
//     const MESSAGE = "Goodbye World!";

//     function bye(){
//         self::MESSAGE;
//     }
// }
// ECHO Goodbye::MESSAGE . PHP_EOL;

class AppleDvice {
  public $ram = "1gb";  // default values
  public $inch;
  public $space;
  var    $color;
  public $owner;

  // public $isFirst = false;

  // constants
  const MESSAGE = "hiiiiiiii";
  const OWNERNAME = 5;
  public function doublePressed(){
    echo "this feature does not supported by your device";
  }

  public function setOwnerName($ownerName){
    if (strlen($ownerName) < self::OWNERNAME){
      echo "invalid name, less than" . self::OWNERNAME;
    }else{
      echo "your name has been set";
    }
  }

  public function greating($isFirste){
    if ($isFirste == true){
      echo self::MESSAGE;
    }
  }

  public function ChangeSpace($ra, $in, $sp, $co){
    $this->ram = $ra;
    $this->inch = $in;
    $this->space = $sp;
    $this->color = $co;
  }
}
$iphone7 = new AppleDvice();
$iphone7->ChangeSpace("2GB", "5 Inch", "32GB", "gold");

echo "<pre>";
var_dump($iphone7);


$phone = new AppleDvice();
$phone->doublePressed() . "<br>";
$phone->setOwnerName("al");
$phone->greating(true);
var_dump($phone);

// [$this]  -> pseudo variable. (refer to object properties).
// [self]   -> refer to the constant of the class.
// [  ::  ] -> scope resolution opetator [paamayim nekudotayim].


