<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
        <?php 
            function init() {
                say_Something();
                echo "<br>";
                calculate();
            }

            function calculate() {
                echo 410 + 190;
            }

            function say_Something(){
                echo "Hello World, how its going?";
            }
            init();
          
        ?>
    </body>
</html>