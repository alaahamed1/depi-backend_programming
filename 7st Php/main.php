<?php
#======================================================
#------------Assignments-lesson-from-6-to-12-----------
#======================================================
/**
 *  echo 15.2 + 14.7 + (10.5 + 10.5);        // 50  & integer
 */
echo (int )15.2 + (int)14.7 + (int)(10.5 + 10.5);
echo "<br>--------------------------<br>";


/**
 *  use Three Method to print data type of int 100
 */

 echo gettype(100), PHP_EOL;
 var_dump(100);
 $n = 100;
 echo get_debug_type(100) ;
 echo "<br>--------------------------<br>";

/**
 * echo "???";
 *Needed Output
 * Hello "Elzero" \\ """ We Love "$$PHP"
 */

 echo "Hello \"Elzero\" \\\\ \"\"\" We Love \"\$\$PHP\"";
 echo "<br>--------------------------<br>";

 /**
  * echo "We \n Love \n Elzero \n Web \n School";
  */

  echo "We <br> Love <br> Elzero <br> Web <br> School";
  echo "<br>--------------------------<br>";

 echo <<< 'str'
Hello "'Elzero'"
We Love $Programming$
Languages Specially "PHP"
str;
 echo "<br>--------------------------<br>";
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
echo "<br>--------------------------<br>";
/**
 * use this line echo "Hello PHP";
 * Needed Output:
 * 1
 *integer
 */
echo (int)is_string("Hello PHP");
echo '<br>';
echo gettype((int)"Hello PHP");
echo "<br>--------------------------<br>";

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
    echo "<br>--------------------------<br>";
    
