<?php include "db.php";

function showAllData() {
    global $connection;
    $query = 'SELECT * from users';
    $result = mysqli_query($connection, $query);
    if(!$result) {
        die('query FAILED');
    }
    while($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        
        echo "<option value='$id'>$id</option>";
    }
}

?>