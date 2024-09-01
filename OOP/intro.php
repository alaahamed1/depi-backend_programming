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

  private $lock;

  public $name;

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
    $this->ram   = $ra;
    $this->inch  = $in;
    $this->space = $sp;
    $this->color = $co;
  }

  public function changeLock($lo){
    $this->lock = sha1($lo);
  }

  final public function sayHello($n){   // can not rewrite this function in the child.
    $this->name = $n;
    echo "welcome to " . $this->name;
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
// [  sha1() ] -> 
// [ final ] -> to function and class (unable to be inherited)

/**
 * encapsulation
 */
$iphone7->changeLock("alaa@123");
$iphone7->sayHello("iphone7");
var_dump($iphone7);

#-----------------------------------------------------------------

/**
 * inheritance
 */

 class Sony extends AppleDvice{
    private $screen;
    function changeScreen($sc){
      $this->screen = $sc;
    }
  }

  $sony = new Sony();
  $sony->ChangeSpace("22GB", "55 Inch", "128GB", "black");
  $sony->changeScreen("OLED");
  $sony->sayHello("Sony");
  print_r($sony);

  //-----------------------------------------------------------------------
  
  /**
   * abstract
   * can not create inctance from
   * make to the other classes to inherit prop & methods from
   * can have abstract methods (you have to use them)
   * and have NO body
   */

    abstract class makeCar {
    public $ram;
    public function sayHello(){
      echo "hello";
    }

    abstract public function make(); // abstract method
    
  }

class Tesla extends makeCar {
  public function make(){
    echo "I'm making Tesla";
  }
}
  $tesla = new Tesla();
  $tesla->sayHello();
  echo '<pre>';
  print_r($tesla);

  /**
   * polymorphism
   * methods without body code
   * 
   */

   interface Moblie{

      public function pressHome($n);
   }
   class Iphone implements Moblie{
    public $name;
    public function pressHome($n){
      $this->name = $n;
      echo "exit home button" . $n;
    }
   }
   $iphone = new Iphone();
   $iphone->pressHome("Iphone");
    print_r($iphone);

   class Samsung implements Moblie{
    public $name;
    public function pressHome($n){
      $this->name = $n;
      echo "press home button" . $n;
    }
   }

   $samsung = new Samsung();
   $samsung->pressHome("samsung");
    print_r($samsung);
    #--------------------------------------------------

    interface DBConnects{

      public function getUsers();
      public function getArticals();
      public function showData();

    }

    class MySql implements DBConnects{
      public function getUsers(){
        echo "SELECT * from users";
      }
      public function getArticals(){
        echo "";
      }
      public function showData(){
        echo "";
      }
    }

    $row = new MySql();
    print_r($row);
    $row->getUsers();

    /**
     * magic methods:
     * special name starts with [ __ ].
     * __construct
     */

     class Phone {
        public $name;
        public $color;
        public function sayHello(){
          echo "hello user";
        }
     }

     $phone = new Phone();
     $phone->sayHello();
     print_r($phone);

     #------------------------------------------------------------------------------
abstract class Car {
  public $name;
  public function __construct($name) {
    $this->name = $name;
  }
  abstract public function intro() : string;
}

// Child classes
class Audi extends Car {
  public function intro() : string {
    return "Choose German quality! I'm an $this->name!";
  }
}
$audi = new audi("Audi");
echo $audi->intro();
echo "<br>";
