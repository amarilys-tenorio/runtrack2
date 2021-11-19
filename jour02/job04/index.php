<?php

  $counter = 1;

    while ($counter <= 100){
  
    if($counter%15==0) {

    echo"FizzBuzz <br>";
  }

    elseif ($counter%3==0){

    echo"Fizz <br>";
  }

    elseif ($counter%5==0){
    
    echo"Buzz <br>";

  }

    else {
      echo $counter , "<br>";
    }

  $counter++;

}
?>