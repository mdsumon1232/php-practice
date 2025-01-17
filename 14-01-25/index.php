<?php
    echo "----------------------(14-01-2025)--------------------------- <br>";
    echo "----------------- syntax , variable, constants---------------";
    echo phpversion() ."<br>";

    echo " hello I am md sumon <br>";

    print "Hi this is md sumon hei
    <br>";

    print("hello"."I am testing print <br>");

    echo "this is echo" , " its take multiple value <br>";
    print "this is print" . "its take only single value";

    echo "different between echo and print <br>  <br> <br>";

     echo " 
       <table border='1px solid black' style='border-collapse: collapse'>
            <thead>
                <tr>
                    <th> echo </th>
                     <th> print </th>
                 </tr>
            </thead>
             <tbody>
                <tr> 
                 <td> echo receive multi parameter </td>
                  <td> print receive only one parameter </td>
                 </tr>
                  <tr> 
                      <td> echo 'this is' , ' right way' </td>
                      <td> print 'it output', 'error' </td>
 
                  </tr>
                  <tr>
                        <td> echo faster than print </td>
                         <td> print slow than echo </td>
                  
                  </tr>
             </tbody>
       </table>
       
     "; 



     echo "<br> </br> </br>";

     echo "php variable scope";

     echo "
            <h3> php has 3 variable scope </h3>

            <ol type='i'> 
                <li> local </li>
                <li> global </li>
                <li> static </li>
            </ol>
     
     <br> </br> ";

     echo "
           <h3> local scope </h3>
  
           <p> Thats variable declared in the function is call local variable scope. it's only use in that function . local variable doesn't use outside of the function </p>
      
     <br> </br>
           ";

           echo "example of local variable";

           function localVariable(){
             $x = "This is local variable example";
             echo $x; 
           }

           localVariable();

           //echo "$x"; Undefined $x, because $x is local variable. it's work only the function;


           echo "
              <h3> global scope </h3>

              <p> Thats variable declared outside of function it's call global variable. It's only ues outside of the function </p>
           
           <br>
              ";

              echo " example of global variable";

              $x = "This is global scope variable example";

              echo $x;

              function globalVariable(){
                echo $x;
              }

              globalVariable();

              // undefined the $x in globalVariable . because of $x is a global variable;

              echo "but we can use global variable inside function to use global keyword <br>";

              function globalVariable2(){
               global $x;
               echo"<br> </br>";
               echo $x;
              }

              globalVariable2();


        echo "<br> <br>";


      echo "----------------15-01-2025-----------------";

        echo "<h3> static scope variable </h3>";

        echo "<br> <br>";

        echo " static variable use into a function. It save the reference,,";

        function staticVariable(){
          $x = 5; //local scope variable;
           echo $x++;
          
        }
          staticVariable();
          echo "<br> <br>";

          staticVariable();

          echo"example of static scope variable";

        function staticVariable2(){
          static $x = 10;
          echo $x++;

        }

         echo "<br>";
        staticVariable2();
        echo "<br>";

        staticVariable2();
        echo "<br>";

        staticVariable2();

        echo "<br> <br> supper global variable";

        echo "<br> <br> supper global variable are access from any where.";

        

        function testGlobalVariable(){
          $GLOBALS['x'] = "this is supper global variable";
        }

        testGlobalVariable();
        echo $x;
    echo "<br> <br> server global variable";

    echo $_SERVER['PHP_SELF']."<br>";
    echo $_SERVER['SERVER_NAME'] . "<br>";
    echo $_SERVER['HTTP_HOST'] . "<br>";
    echo $_SERVER['HTTP_REFERER'] ."<br>";
    echo $_SERVER['HTTP_USER_AGENT'] . "<br>";
    echo $_SERVER['SCRIPT_NAME'];

  

?>