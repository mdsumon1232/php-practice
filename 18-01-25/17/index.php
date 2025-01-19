<?php

    echo "-----------------practice PHP syntax, variables, constants,Data types, strings, operators-------------- <br>";
    
    echo "problem by chatgpt generated";

    echo "1. Write a PHP script to output 'Hello World' using echo. <br>";
    
    echo "Hello World";

    echo "<br>";

    echo "2. Write a PHP script to include comments (single-line and multi-line) explaining your code. <br>";

    // echo "This is single line comment";

    /* echo "This is multi line comment"; */

    echo phpversion();

    echo "<br>";

    if(isset($_POST['submit'])){
        $name = $_POST['name'];

        echo $name;
    }

    echo "<br";

    if(isset($_SERVER['HTTP_CLIENT_IP'])){
        echo "Ip address is". $_SERVER['HTTP_CLIENT_IP'];
    }
    elseif(isset($_SERVER['HTTP_X_FORWARDED_FOR'])){
        echo $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else{
        echo $_SERVER['REMOTE_ADDR'];
    }

    echo "<br>";

    echo $_SERVER['HTTP_USER_AGENT'];

    echo "<br>";

    echo $_SERVER['PHP_SELF'];

    echo "<br>";

    $text = 'PHP Tutorial';

// Use a regular expression to replace the first letter of each word with a span element with red color
$text = preg_replace('/(\b[a-z])/i', '\1', $text);

echo $text;

    






?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">

        <input type="text" name="name" placeholder="input your name">
        <br>
        <input type="submit" name="submit">

    </form>
</body>

</html>