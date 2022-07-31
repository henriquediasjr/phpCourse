if (session_status() == PHP_SESSION_NONE) session_start();
like this:

<?php include "db.php"; ?>
<?php session_start(); ?>
<?php if (session_status() == PHP_SESSION_NONE) session_start(); ?>
 
<?php if(isset($_POST['login']))  { // this page is responsible for receiving the login form
 
$username = $_POST['username'];
$password = $_POST['password'];
//these two lines below are doing the hacker blocking
$punkbuster_username = mysqli_real_escape_string($connection, $username);
$punkbuster_password = mysqli_real_escape_string($connection, $password);
 
$query = "SELECT * FROM users WHERE  username = '{$username}' ";
$select_user_query = mysqli_query($connection, $query);
 
if(!$select_user_query) {
 
    die ("QUERY FAILED" .  mysqli_error($connection));
}
//this while loop 
while($row = mysqli_fetch_array($select_user_query)) {
 
    $db_id = $row['user_id'];
    $db_username = $row['username'];
    $db_user_password = $row['user_password'];
    $db_firstname = $row['user_firstname'];
    $db_lastname = $row['user_lastname'];
    $db_user_role = $row['user_role'];
    
}
 
// we crypted the user passwords that registered to the cms from registration.php. since it's encrypted and changed, we cannot login from the index. so we removed the salt and replaced it with  $db_user_password
// $password = crypt($password, $db_user_password);
 
// this if statement takes us to the index if the username and password do not match
 
 
// this else if statement takes us to the admin if the username and password match
 if (password_verify($password, $db_user_password)) {
    if (session_status() == PHP_SESSION_NONE) session_start();
    // session is started here so we can validate the user in admin page
    // parameters that sessions take doesn't matter you can name anything you want
    $_SESSION['username'] = $db_username;
    $_SESSION['firstname'] = $db_user_firstname;
    $_SESSION['lastname'] = $db_user_lastname;
    $_SESSION['user_role'] = $db_user_role;
 
    header("Location: ../admin"); // this part takes us to admin
}
 
else {
    header("Location: ../index.php");
}
 
    
}

 
?>

