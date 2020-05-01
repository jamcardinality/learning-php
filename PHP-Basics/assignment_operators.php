<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Assignment Operators</title>
</head>

<body bgcolor="#f3f3f3">
  <center>
    <h1>
        <?php 
          //Assignment Operators 
          // +=, -=, *=, /=, %=

          $num1 = 10;
          
          echo "Num1: " . $num1 . "<br>";
          // echo "Num1 + 5: " . ($num1 = $num1 + 5) . "<br>";  Long method for Assignment Operators
          echo "Num1 + 5: " . ($num1 += 5) . "<br>"; 
          echo "Num1: " . $num1 . "<br>";

        ?>
    </h1>
  </center>
    
</body>
</html>