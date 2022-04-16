<?php include "db.php";

    $query = 'SELECT * from users';

    $result = mysqli_query($connection, $query);

    if(!$result) {
        die('query FAILED');
    }

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
    
    <div class="container">
        <div class="class-sm-6">
          <?php 
            while($row = mysqli_fetch_row($result)) {
                ?>

                <pre>

                <?php
                print_r($row);
                ?>

                </pre>

                <?php
            }
          
          
          ?>
    </div>


    </body>
</html>