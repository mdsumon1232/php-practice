<?php 

echo "--------------------16-01-25---------------------";

echo"php string <br> In php double quote and single quote has big deference . <br> Double quote process special character but single quote is not process special character";
 
echo" <br> </br> example double quote and single quote </br>";

$x = "ami nitto pagola chondo";

echo "Hello , I am not rich $x man <br>";
echo 'Hello, I am not rich $x man';

echo" <br> To get string word count use strlen() method <br>";

echo strlen($x);

echo "<br> To count word of any sentence use str_word_count() method <br>";
echo str_word_count($x); 

echo "<br> to find any match word from sentence use strpos() method <br>";

echo strpos($x , "pchon");
echo "<br>" . bin2hex("Hello");

$hx = bin2hex($x);

echo pack("H*",$hx);

echo "<br> to convert upper case use strtoupper() method";

echo "<br> example <br>";

echo strtoupper($x);

echo "<br> php constant. Constant doesn't change <br>";

define("testing" , "I am practicing php constant");

echo Testing;

?>