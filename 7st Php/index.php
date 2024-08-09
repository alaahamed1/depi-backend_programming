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
        <title>php page | </title>
    </head>
    <body>
        <div>welcome <?= $username?></div>
        <div><?= $username?>, you score 1000 points</div>
        <div><?php include'score.php' ?></div>
    </body>
    </html>

    <?php 
    //* -------------------variable $ variable $$--------------------
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

    ?>