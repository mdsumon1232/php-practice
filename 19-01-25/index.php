<?php

        echo "------------- Today I learn php math----------------";
        

        echo "<br>".pi();

        echo"<br>". max(10,50,5887,-901);

        echo"<br>". min(10,50,5887,-901);

        echo "<br>".abs(-6.9); //abs() method return always positive value;

        echo "<br>". sqrt(25); // sqrt() method return root value;

        echo "<br>" . round(pi() , 2); // round method return nearest int number ,;

        $random_number = rand(1,6); //rand() method return the random number. we can control min and max number to pass min and max argument;
        
        echo"<br>" . $random_number;


$result = '';

function mathx($what){
    $number1 = (int) $_POST['number1'];
    $number2 =(int) $_POST['number2'];
    switch($what){
        case '+':
            return $number1 + $number2;
        case '-':
            return $number1 - $number2;
        case '*':
            return $number1 * $number2;
        case '/':
            return $number1 / $number2;
    }

    return $number1 .$what. $number2;
    
}

if(isset($_POST['addition'])){

  echo mathx('+');
}

elseif(isset($_POST['subcition'])){
    echo mathx('-');
}

elseif(isset($_POST['multi'])){
    echo mathx('*');
}

elseif(isset($_POST['divition'])){
    echo mathx('/');
}




?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <form action="<?php echo$_SERVER['PHP_SELF']?>" method="POST">

        <input type="text" name="number1">
        <br>
        <input type="text" name="number2">
        <br>
        <p> <?php echo $result ?> </p>
        <br>
        <button type="submit" name="addition"> + </button>
        <button type="submit" name="subcition"> - </button>
        <button type="submit" name="multi"> * </button>
        <button type="submit" name="divition"> / </button>


    </form>

</body>

</html>