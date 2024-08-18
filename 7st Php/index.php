<?php
    #<?= 'hello';
    ECHO 'hi', PHP_EOL;
    echo/*comment inside my code*/ 'hi';

    /**
     * ==========Data Types==========
     * Boolean
     *Integer
     *Double
     *String
     *The user-defined (compound) data types are:
     *Array
     *Objects
     *The special data types are:
     *NULL
     *Resource
     */
    $int = 1;
    echo gettype($int), '<br>';
    var_dump($int);
    echo 1 + '2';
     echo gettype(1 + '2'); // converting its result data type
    echo '<br>';
     echo 5 + "5 cars"; // result will raise with warning that cars is non numerical value
    echo '<br>';
     // ==================Data Casting==============
    echo 5 + (int)"5 cars";
    echo 5 + (integer) 15.5;
    echo "<br>";
    echo gettype(10.5 + 10.5); // doube data type
    echo "<br>";
    var_dump((bool) array()); var_dump((bool) []); var_dump((bool) ""); var_dump((bool) "0");
    echo "<br>";
    /*=============string & escaping=================
    *        nl2br() -> to disply string in multiple lines as php is a server side lang.
    */
    echo "hello \"php\"";
    echo "<br>";
    echo nl2br("Line-1
    Line-2 
    Line-3");
    echo "<br>";

    /**
     * -------------------Heredoc--------------------
     * -------------------Nowdoc---------------------
     */
    $name = 'alaa';
    echo <<< "Here"
    This is a heredoc string.
    " ' \\ \\\ $$
    Hey it's $name
    Here;
echo "<br> ---------------- <br>";
    # the differnce is single & double qoutes
    echo <<< 'Now'
    This is a heredoc string.
    " ' \\ \\\ $$
    Hey it's $name
    Now;

    echo <<< "ullinks"
    <ul?>
    <li>$name</li>
    <li>$name</li>
    <li>$name</li>
    </ul>
    ullinks;
    echo '<br>';

    echo '<pre>';
    print_r([
        "0" =>"info",
        "a" => "alaa",
        "b" => "25",
        "myname",
        true => "alaa",
        false => "",
        "education" => [1, 2, 3]
        //no sorting
    ]);
    echo "<br>";
    //* -------------------variables--------------------
    $username = "alaa";
    # notice the differnce : -
    echo "Hello $username";
    echo 'Hello $username';
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>php page | <?= $username?></title>
    </head>
    <body>
        <div>welcome <?= $username?></div>
        <div><?= $username?>, you score 1000 points</div>
        <div><?php include'score.php' ?></div>
    </body>
    </html>

    <?php 
    //* -------------------variable $ variable $$ (Reference) --------------------(something like pointers)
    $fullname = 'alaa';
    $$fullname = 'hamed';
    $$$fullname = "test";
    echo $fullname;
    echo '<br>';
    echo $$fullname;
    echo '<br>';
    echo $alaa;
    echo '<br>';
    echo $$$fullname;
    echo '<br>';
    echo "hello {$$fullname}";
    echo '<br>';
    echo "hello {$$$fullname}";
    echo '<br>';
    /**--------------------------------pre defined variable---------------------------- */
    echo '<pre>';
    // print_r($_SERVER);
    print_r($_POST["username"]);

    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form action="" method="post">
            <input type="text" name="username">
            <input type="submit" value="send" >
        </form>
    </body>
    </html>
    #----------------------------------------------------------------------
    <?php
    /**
     * ===========================onstant==================================
     * pre defined constant --> (case sensitive)
     * PHP_VERSION
     * 
     * magic constant --> (case insenstive)
     * __LINE__
     * __FILE__
     * __DIR__
     * 
     *  */
    define("DB_NAME", "alaa");
    define("MAIN_NUMBER", 5);
    echo DB_NAME;
    echo '<br>';
    echo MAIN_NUMBER * 50;
    echo '<br>';
    echo php_uname();
    echo '<br>';
    echo PHP_VERSION;
    echo '<br>';
    echo __DIR__;  // current directory
    echo '<br>';
    echo __FILE__; // file name and its pass
    echo '<br>';
    echo __LINE__; // current line number
    echo '<br>';

    //* ---------------------------Arithmetic Operators-----------------------------
    echo 5 + 3;
    echo "<br>";
    echo 5 - 3;
    echo "<br>";
    echo 5 * 3;
    echo "<br>";
    echo 5 / 3;
    echo "<br>";
    echo 5 % 3; //
    echo "<br>";
    echo 5 ** 3; // exponentiation
    echo "<br>";
    $a = "100";
    echo +$a;
    echo "<br>";
    // to convert a string including number to integer use  1) (int)   -   2) +
    // - قبل الرقم بتعكس الاشاره

    /* ---------------------------Comparison Operators-----------------------------
    *  ==  equal
    *  ===  strict comparison  - identical
    *  !== || < >  -> not equal
    *  <=> spaceship [< || = || >] 
    * if < return (-1) , if = return (0) , if > return (1)
    */
    var_dump(5 == 3);
    echo "<br>";
    var_dump(5 === 3);
    echo "<br>";
    var_dump(5 <> 3);
    echo "<br>";

    /**---------------------------Logical Operators-----------------------------
     * and
     * &&
     * or
     * ||
     * xor (exclusive) one is true not all 
    */
    var_dump(100 > 10 xor 100 > 200); // true
    echo "<br>";
    //--------------concatenate string----------------
    $name = "alaa ";
    $name .= "hamed";
    echo $name;
    echo "<br>";
    //------------------------------------------------
    $aa = 1000;
    $bb = $aa;
    echo @$bb;  // @ operator will suppress the error 
    
    echo "<br>";
    $test = 10 || false;   // will print 1 or true
    echo $test;
    $test = 10 or false;  // will print 10 
    echo "<hr>";

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        echo $_POST["myname"];
        echo "<br>";
        echo $_POST['lang'];
        echo "<br>";
        print_r($_POST);
        if ($_POST["lang"] == "ar"){
            header("location: ar.php");
            exit();
        }
    }

    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Support</title>
    </head>
    <body>
        <form action="" method="post">
            <input type="text" name="myname">
            <select name="lang">
                <option value="ar">arabic</option>
                <option value="en">English</option>
            </select>
            <input type="submit" value="Go">
        </form>
    </body>
    </html>

    <?php 
    echo "<hr>";

if (10 > 5) :
    echo "alternative if syntax";
endif;

echo "<hr>";
echo "I love php because it's a". (10 > 5 ? "GOOD": "BAD"). "language";
echo "<br>";
$res = 10 > 5 ? "GOOD": "BAD";
echo "I love php because it's a $res language";
echo "<hr>";

$countries_with_discount = ["eg" => 30, "sa" => 40, "qa" => 50];
// foreach($["eg" => 30, "sa" => 40, "qa" => 50] as $country => $discount): --> i can do this
foreach($countries_with_discount as $country => $discount):
    echo "country name is $country and discount is $discount <br>";
endforeach;
// remember if you want to iterate over an array in php use foreach ,,
echo "<hr>";
/**--------------------functions---------------------- */
function say_hello($name = "alaa", $age = 25, $country = "egypt"){
    echo "hello: ".$name." your age is: ".$age." you're from: ".$country."";
}
say_hello(country:"USA");
echo "<hr>";
function calc(...$nums){              // ->important part.
    // echo func_num_args(). "<br>";
    // print_r(func_get_args());
    // $sum = 0;
    // foreach(func_get_args() as $arg):
    //     $sum += $arg;
    // endforeach;
    // return $sum;
    print_r($nums);
    $sum = 0;
    foreach($nums as $num):
        $sum += $num;
    endforeach;
    echo $sum;
}
echo calc(10, 20, 30 , 40);
echo "<hr>";

/**--------------------splat operator---------------------- */
$arr = ["php", "html", "css"];
function get_data($name, $country = "private", ...$skills){
    echo "hi $name your country is $country <br>";
    foreach($skills as $skill):
        echo "-- $skill";
    endforeach;
}
// get_data("alaa", skills[0]:"php",$skills[1]: "html" );
get_data("alaa","egypt", ...$arr);
echo "<hr>";

// args passed by value 
// if the value passed to the function changed it won't change outside
function add_five($number){
    $number += 5;
    return $number;
}
$n = 15; // it won't change
add_five($n); // = 20
// to change the var $n outside the function use referance
function add_four(&$number){
    $number += 4;
    return $number;
}
add_four($n);

echo "<hr>";
// how to change the data type of a returned function 
function data_change($n1, $n2) : int{
    return $n1 + $n2;
}
echo gettype(data_change(10.5, 9.5));
echo "<hr>";
/**--------------------anonymous function---------------------- */

$multiply = function($a, $b) : int {
    return $a * $b;
};
echo $multiply(10, 5);
echo "<hr>";
/**--------------------inherit variable from parent scope---------------------- */
$msg = "Hi";
$say_hi = function($someone) use ($msg){
    return "$msg $someone";
};
 echo $say_hi("alaa");
 echo "<hr>";
/**--------------------pass function to function -> array_map---------------------- */

$num = [10, 20 ,30, 40];

function add_two($number){
    return $number + 2;
}

// $new_num = array_map("add_two", $num);
$new_num = array_map(function($item){return $item + 10;}, $num);
print_r($new_num);
echo "<hr>";

// ---------------------------arrow function -----------------------------*/

$add_three = fn($a, $b) => $a + $b + 3;
echo $add_three(10, 5);
fn() => "test";
echo "<hr>";
// ---------------------------string-----------------------------*/
$str = "alaa";
echo $str[strlen($str) - 1]; //same as $str[-1]
/**
 * string function
 * lcfirst(string -> required) 
 * ucfirst(string -> required)
 * strtolower(string -> required)
 * strtoupper(string -> required)
 * ucwords(string -> required,  delimiter(optional)الفاصل)
 * str_repeat(string -> required, count -> required)
 */
/**
 * implode()
 * explode()
 * str_shuffle()  --> random
 * strrev() --> reverse
 * trim()
 * rtrim()
 * ltrim()
 */

/**
 * chunk_split()
 * strlen()
 * str_split()
 * strip_tags()
 * nl2br()
 */

 /**
  * strpos() -> search
  * strrpos() -> search from the right (last char )
  * stripos() -> search insenstive 
  * strripos() - search insenstive from the right
  * substr_count() -> search [srting, start, length]
  * search about => over labing string
  */

  /**
   * parse_str()
   * quotemeta()
   * str_pad()   =>flags:-
   * ---STR_PAD_BOTH
   * ---STR_PAD_LETF
   * ---STR_PAD_RIGHT
   * strtr()     =>translate
   */
  /**
   * str_replace()
   * str_ireplace()  ->insenstive
   */

   /**
    * substr_replace()
    */

/**
 * wordwrap()
 * ord()
 * chr()
 * similar_text()
 */
echo 10_000_000; //syntatic suger
/**
 * strstr()
 * stristr()
 * number_format()
 */
?>