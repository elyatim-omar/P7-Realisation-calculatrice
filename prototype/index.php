
      <form action = "index.php" method = "post">
          <input type = "text" name = "num1" >
          <input type = "text" name = "num2" >
         <input type = "submit" >
      </form>

  

<?php

if(isset($_POST['num1'],$_POST['num2'])){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

$sum = $num1 + $num2;
   echo "Sum of the two numbers is : $sum";
}


?>
 
