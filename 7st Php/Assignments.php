<?php
#======================================================
#------------Assignments-lesson-from-6-to-12-----------
#======================================================
/**
 *  echo 15.2 + 14.7 + (10.5 + 10.5);        // 50  & integer
 */

use function PHPSTORM_META\type;

echo (int)15.2 + (int)14.7 + (int)(10.5 + 10.5);
echo "<hr>";


/**
 *  use Three Method to print data type of int 100
 */

echo gettype(100), PHP_EOL;
var_dump(100);
$n = 100;
echo get_debug_type(100);
echo "<hr>";

/**
 * echo "???";
 *Needed Output
 * Hello "Elzero" \\ """ We Love "$$PHP"
 */

echo "Hello \"Elzero\" \\\\ \"\"\" We Love \"\$\$PHP\"";
echo "<hr>";

/**
 * echo "We \n Love \n Elzero \n Web \n School";
 */

echo "We <br> Love <br> Elzero <br> Web <br> School";
echo "<hr>";

echo <<< 'str'
Hello "'Elzero'"
We Love $Programming$
Languages Specially "PHP"
str;
echo "<hr>";
/**
 * [1] Fix The Error
 *[2] Remove 2 Characters To Get The Output
 *Hello \PHP\ We Love Programming
 */
$something = "Programming";

echo <<<"code"
Hello \PHP\
We Love $something
code;
echo "<hr>";
/**
 * use this line echo "Hello PHP";
 * Needed Output:
 * 1
 *integer
 */
echo (int)is_string("Hello PHP");
echo '<br>';
echo gettype((int)"Hello PHP");
echo "<hr>";

/**
 * write this array
 */

echo "<pre>";
print_r([
  "FrontEnd" => [
    "html",
    "css",
    "js" => [
      "vue" => ["2" => "v1", "3" => "v2"],
      "reactjs",
      "Svelte"
    ]
  ],
  "BackEnd" => ["php", "mySql", "Security"],
  "Git",
  "Github",
  "Testing" => [
    "Unit Testing",
    "End To End",
    "Integration"
  ]
]);
echo "<hr>";
?>
<?php
/** ==================================================================
 *------------------Assignments-lesson-from-13-to-19----------------
 *=====================================================================
 */
# make the coursename changes dynamicly.
$coursename = "Elzero Courses";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content='<?= $coursename; ?>'>
  <title>Welcome To <?= $coursename; ?></title>
</head>

<body>
  <h1><?= $coursename; ?></h1>
  <p>Here In <?= $coursename; ?> We Provide Front-End And Back-End Courses</p>
  <br>
  <div><?= $coursename; ?> Is The What You Need.</div>
  <footer>All Right Reserved To <?= $coursename; ?></footer>
</body>

</html>


<?php
echo "<hr>";
/**
 * print the word (web) using different 5 methods
 */
$name = "elzero";
$$name = "Web";
$ $$name = $$name;
$x = &$$name;
$new_var = "elzero";
echo $$name;  //or echo ${$name};
echo '<br>';
echo $elzero;
echo "<br>";
echo $ $$name;
echo "<br>";
echo $x;
echo "<br>";
echo ${$new_var};
echo "<hr>";

/**
 * how to print $b =  100 without changing any of 100 or 200
 */
$a = 200;
$a = 100;
$b = $a;

echo $b;
echo "<hr>";

/**
 * use Predefined Variables to print:-
 *  Document Root
 * Server Name
 *  System Root
 *  Open SSL Configuration
 */

print_r($_SERVER["DOCUMENT_ROOT"]);
echo "<br>";
print_r($_SERVER["SERVER_NAME"]);
echo "<br>";
print_r($_SERVER["SystemRoot"]);
echo "<br>";
print_r($_SERVER["OPENSSL_CONF"]);
echo "<hr>";

/**
 * 10 reserved words in php:
 *break	callable	case	catch	class
 *clone	const	continue	declare 	default
 *die	do	else	elseif	enddeclare
 */
//-----------------------------------------
/**
 * currnt line, file and folder pass
 */

echo __LINE__;
echo __FILE__;
echo __DIR__;
echo "<hr>";
#======================================================
#------------Assignments-lesson-from-20-to-29----------
#======================================================

echo 10 - 20 - 15 - 3 - 190 - 10 - 400;
echo "<hr>";

/**  Needed Ouput:
 * 10
 * "integer" -> with 3 differnet methods.
 */

$a = "10";
echo gettype(+$a);
echo gettype((int)$a);
echo gettype((integer)$a);
echo "<hr>";
/**  Needed Ouput:
 * -1
 * "integer" -> don't change anyhting.
 */
$a = 10;
$b = 20;

echo $a <=> $b;
echo "<hr>";

/**
 * replace ? by Comparison Operators to print true.
 */
$a = 10;
$b = 20;
$c = 15;

var_dump($a < $b); // True
var_dump($c > $a); // True
var_dump($a <> $b); // True
var_dump($a != $b); // True
var_dump($a < $c); // True
var_dump($a <> $c); // True
var_dump(gettype($a) == gettype($b)); // True
var_dump(gettype($a) && gettype($b)); // True
var_dump(gettype((float) $a) != gettype($b)); // True
echo "<hr>";

/**
 * @var :
 * 
 */
$points = 10;

echo 3+$points;
echo "<br>";
echo -(2-$points);
echo "<hr>";
    /**
     * print this sentences using 4 methods
     */
    $a = "Elzero";
    $b = "Web";
    $c = "School";

// Method One
$d = "{$a} {$b} {$c}";
// Method Two
$d = $a ." ". $b ." ". $c;
// Method Three
echo implode(" ", [$a, $b, $c]);
// Method Four
printf("%s %s %s", $a, $b, $c);
echo $d; // Elzero Web School
echo "<hr>";

/**
 * custom the error  -> done
 */
// Code 1
// $a1 = @$b1 or die("Custom Error");

// Code 2
// $f = @file("Not_A_File") or die("Custom Error");

// Code 3
// (@include"Not_A_File")or die("Custom Error");
echo "<hr>";


#======================================================
#------------Assignments-lesson-from-30-to-36----------
#======================================================
$a = 100;
$b = 200;
$c = 100;

/*
Check That:
Variable "b" Larger Than Variable "a"
Variable "a" Identical To Variable "c"
Variable "a" Plus Variable "c" Identical To Variable "b"
*/

if ($a > $b){
  echo "YES";
}elseif($a === $c){
  echo "YES";
}elseif($a + $c === $b){
  echo "YES";
}
  echo "<hr>";

  // Test Case 1
$a = 100;
$b = 200;
$c = 300;
// A Is Not Larger Than B Or C
if($a < $b || $a < $c) echo "A Is Not Larger Than B Or C";

// Test Case 2
$a = 200;
$b = 100;
$c = 300;

// A Is Larger Than B
if ($a > $b) echo "A Is Larger Than B";

// Test Case 3
$a = 200;
$b = 200;
$c = 100;
if($a > $c) echo "A Is Larger Than c";
  echo "<hr>";
  
  $admins = ["alaa", "Ahmed", "Sayed"];
  if ($_SERVER["REQUEST_METHOD"] == "POST"){
    echo "The Request Method Is Post And Username Is $_POST[user]";
    echo "<br>";
    if (in_array($_POST["user"], $admins))
    echo "This Username $_POST[user] Is Admin";
}

echo "<hr>";


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Assignment</title>
</head>
<body>
<form action="" method="POST">
  <input type="text" name="user">
  <input type="submit" value="Send">
</form>
</body>
</html>

<?php

$a = 30;
$b = 20;
$c = 10;
// nested if ternary operator
($a + $b === $c) ? "A + B = C" :
(($a + $c === $b )? "A + C = B" :
(($b + $c === $a) ? "B + C = A" :
"The End"));

echo "<hr>";
$name = "Osama";
$age = 40;
$country = "Egypt";

if ($age > 18) echo "The Age Is Good To Go<br>";
if (gettype($name) === "string") echo "The Name Is Good To Go<br>";
if ($country === "Egypt") echo "The Country Is Good To Go<br>";
echo "<hr>";

$genre = "Hack And Slash";
switch($genre) 
{
  case "RPG":
    echo "I Recommend Ys Games";
    break;
  case "Hack And Slash":
    echo "I Recommend Castlevania Games";
    break;
  case "FPS" :
    echo "I Recommend Uncharted Games";
    break;
  case "Platform":
  case "Puzzle":
    echo "I Recommend Megaman Games";
    break;
  default:
    echo "I Recommend Shadow Of Mordor And Shadow Of War";
}
  echo "<hr>";
  
  $num_one = 23;
  $num_two = 5;
  $op = "/";
  switch($op){
    case "+":
      echo $num_one + $num_two;
      break;
    case "-":
      echo $num_one - $num_two;
      break;
    case "*":
      echo $num_one * $num_two;
      break;
    case "/":
      echo (int)($num_one / $num_two);
      echo "<br>";
      echo $num_one % $num_two;
      break;
    default:
      echo "Unknown Operation";
  }
  echo "<hr>";

  $day = "Sat";
  if ($day == "Sat" || $day == "Sun" || $day == "Mon"){
    echo "We Are Open All The Day";
  }elseif($day == "Tue" || $day == "Wed"){
    echo "We Are Open From 08:12";
  }elseif($day == "Thu" || $day == "Fri"){
    echo "We Are Closed";
  }else{
    echo "Unknown Day";
  }
  echo "<hr>";
#======================================================
#------------Assignments-lesson-from-37-to-42----------
#======================================================
$index = 10;
while($index > 0){
  echo $index;
  echo "\n";
  $index--;
}
echo "<hr>";
/**
 * use while - do while - for -> to print even numbers from 0 to 20(not including 0)
 */
// while
$i = 0;
while($i <= 20){
  $i = 0;
  while($i <= 20){
    if($i > 0) {
      echo $i;
      echo "\n";
    }
    $i+=2;
  }
}
// for
for ($i = 0; $i <= 20; $i+=2){
  if ($i > 0 ){
    echo $i;
    echo "\n";
  }
}
// do while
do {
  if ($i > 0 && $i < 20){
    echo $i;
    echo "\n";
  }
}while($i <= 20);
echo "<hr>";
$num = 2;
while ($num < 520) {
  echo $num - 1 . "\n";
  $num = $num * 2 + 2;
}
echo "<hr>";
$start = 10;
$end = 0;
$stop = 3;
for ($j = $start;$j >= $stop; $j--){
  if ($j < 10){
    echo "0$j";
  }else{
    echo $j;
  }
  echo "\n";
}
echo "<hr>";
$start = 0;
$mix = [1, 2, 3, "A", "B", "C", 4, 5];
foreach($mix as $num):
  if ($num > 1 && gettype($num) != "string"){
    echo $num;
  }
endforeach;
echo "<hr>";
$money = ["Ahmed" => 100, "Sayed" => 150, "Osama" => 100, "Maher" => 250];

foreach($money as $name => $amount){
  echo "The Name Is $name And I Need $amount Pound From Him";
  echo "<br>";
}

echo "<hr>";
/**
 * $mix = [1, 2, "A", "B", "C", 3, 4];
  *Output:
  *1
  *2
  *3
  *4
  *"4 Numbers Printed"
  *"3 Letters Ignored"
 * 
 */
$mix = [1, 2, "A", "B", "C", 3, 4];
$ch = [];
foreach($mix as $i):
  if (gettype($i) == "string"){
    $ch[] = $i;
    continue;
  }
  echo $i;
  echo "\n";
endforeach;
echo  count($money) ." Numbers Printed";
echo "<br>";
echo count($ch) . " Letters Ignored";
echo "<hr>";

/**
 * find all even nums divided by 2
 */
$nums = [1, 13, 12, 20, 51, 17, 30];
foreach($nums as $num):
  if ($num % 2 == 0){
    echo $num / 2;
    echo "\n";
  }
endforeach;
echo "<hr>";
$help_num = 3;
$nums = [4, 5, 6, 1, 2, 3];
$names = ["Ahmed", "Sayed", "Osama", "Mahmoud", "Gamal"];
foreach($names as $i =>$name):
  if ($name === "Sayed" || $name === "Osama"){
    echo $name;
    echo "\n";
  }
endforeach;
echo "<hr>";

/**
 * Output :-
  *"2 + 10 = 12"
  *"4 + 6 = 10"
  *"5 + 5 = 10"
  *"6 + 4 = 10"
  *"10 + 2 = 12"
 */
$help_num = 4;
$nums = [2, 4, 5, 6, 10];
$reversed_nums = array_reverse($nums);
foreach($nums as $index => $num1):
  $num2 = $reversed_nums[$index];
  echo "$num1 + $num2 = " . ($num1 + $num2) . "\n";
endforeach;
#======================================================
#------------Assignments-lesson-from-43-to-52----------
#======================================================
echo "<hr>";

function greeting($name, $gender = "Male"){
  if ($gender === "Male"){
    return "Hello Mr ". $name;
  }elseif($gender === "Female"){
    return "Hello Miss ". $name;
  }else{
    return "Hello ". $name;
  }
}
echo greeting("alaa", "Female");
echo "<hr>";
function grap($args){
  // print_r(func_get_args());
  foreach(func_get_args() as $arg):
    echo $arg;
  endforeach;
  return;
}
echo grap("I", "Love", "PHP");
echo "<hr>";

function add_numbers(...$numbers){
  $sum = 0;
  foreach($numbers as $number):
    if ($number != 5){
      if($number == 10) $number = 20;
      $sum +=$number;
    }
  endforeach;
  return $sum;
}
echo add_numbers(1, 2, 3, 4, 5 , 10);
echo "<hr>";
function mul_num(...$nums){
  $multiply = 1;
  foreach($nums as $num):
    if (gettype($num) == "integer"){
       $multiply *= $num;
    }
  endforeach;
  return $multiply;
}
echo mul_num( "A",10, 20);
echo "<hr>";
function check_status(string $a,int $b,bool $c) {
  if ($c == true){
    $av = "You Are Available For Hire";
  }else{
    $av ="You Are Not Available For Hire";
  }
  echo "Hello $a, Your Age Is $b, $av";
}
echo check_status("alaa",25, true );
echo "<hr>";
function calculate($n1, $n2, $op = "+"){
  switch($op):
    case "sum" || "+":
      echo $n1 + $n2;
    break;
    case "subtract" || "s":
      echo $n1 - $n2;
      break;
    case "multiply" || "*":
        echo $n1 * $n2;
        break;
      default:
      echo "unknown number";
    endswitch;
}
calculate(10, 20);
echo "<hr>";

function calc(int $num_one, int $num_two) : float {
  return $num_one + $num_two;
}

echo calculate(20, 10); // 30
echo gettype(calc(20, 10)); // Double

echo "<hr>";
$message = "Hello ";

$Hello = fn($item) => $message . $item;

echo $Hello("Osama"); // Hello Osama

echo "<hr>";
$greet = function($name){
  return "Hello ". $name;
};
// Needed Output
echo $greet("Osama"); // Greetings
echo "<hr>";
#======================================================
#------------Assignments-lesson-from-53-to-62----------
#======================================================
$num_one = -1;
$num_two = 2.5;

$let_one = "o";
$let_two = "z";

$str = "El%er0";
$str[(int) $num_two] = $let_two;
$str[$num_one] = $let_one;

echo $str; // Elzero
echo "<hr>";
#first method
$str = "Orezle";
$res = strrev($str);
echo $res;
echo "<br>";
#second method
$testedarr = (str_split($str));
$arrrev = array_reverse($testedarr);
echo implode($arrrev);
echo "<br>";
#third method
echo "<hr>";

$str = 'aAa';
$num = 3;
$char = "_";
echo str_repeat(strtolower($str) . $char, $num);
echo "<hr>";

$str = "<div><b>Elzero</b></div>";

echo strip_tags($str, "<b>");// <b>Elzero</b>
echo "<hr>";
$str = "Elzero Web School";
$e = "e";
$o = "O";
$four = 4;
echo substr_count($str,$e, $four);
$count = (int)substr_count($str,strtolower($o));
echo "<br>";
echo substr_count($str,strtolower($o), -$count);
echo "<hr>";
$chars = ["E", "l", "z", "e", "r", "o"];
print_r(implode($chars));
echo "<hr>";
$chars = ["E", 1, 2, "l", "z", "E", "R", "o"];
echo str_pad(implode($chars), 1 );
