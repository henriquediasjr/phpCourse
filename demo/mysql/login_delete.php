<?php include "db.php";
include "functions.php";

if(isset($_POST['submit'])) {
    deleteRows();
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
        <form action="login_delete.php" method="POST">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="form-group">
                    <select name="id" id="">
                    <?php 
                    showAllData();
                    ?>
                       
                    </select>
                </div>

                <input class="btn btn-primary" type="submit" name="submit" value="DELETE"/> 
            </form>
    </div>


    </body>
</html>