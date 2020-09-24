<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>If Else Statement</title>
</head>

<body bgcolor="#f3f3f3">
  <center>
    <h1>
        <?php 
            // If, else if, else
            /*  if (condition) {
                do something 
              } else {
                do something } */
            // It always start in the top

            $first_name = "Jam";
            $age = 21;

            if ($first_name == "Dems") {
              echo "My Name is " . $first_name;
            } else if ($age == 21) {
              echo "My Age is " . $age;
            } else {
              echo "Sorry, I don't know who you are";
            }

        ?>
    </h1>
  </center>
    
</body>
</html>