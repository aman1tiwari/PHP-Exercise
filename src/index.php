<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise</title>
</head>
<body>
    <?php
    function myFunction() {
        echo "<br>Hello World!<br>";
      }
      
      myFunction();

      function myFunction2($fname, $lname) {
  
        return $lname;
        }


    $colors = array("red", "green", "blue", "yellow"); 

    foreach
     ($colors as $Value) {
      echo "$Value <br>";
    }


    $i = 1; 

    while
     ($i < 6) 
    {
      echo $i;
      $i++;
    }
    


    $color = "green";
    switch($color) {
     
    case "red":
       echo "Hello<br>";
       break;
     
    case
    "green":
       echo "Welcome <br>";
       break;

    default:

     echo "Neither";
}
    
    

    
    $a = 50;
    $b = 10;
    // if($a>$b){
    //     echo "Hello World! <br>";
    // }
    if($a==$b){
        echo 1;
    }
    elseif($a>$b){
        echo 2;

    }
    else{
        echo 3;
    }


    $oldtxt="Hello World!";
    $newtxt= str_replace("World","Dolly", $oldtxt);
    echo "<br> $newtxt <br>";


       $txt="Hello";
       echo "$txt <br>";
       
       $x=5;
       $y=7;
       echo  $x+$y ;

       echo "Hello World! <br>";
       echo strlen("Hello World!")
       #This is single line comment!  



    ?>
</body>
</html>