<?php
$username = $_POST['username'];
$password = hash('sha512', $_POST["password"]);
require 'database.php';

$sql = "SELECT user_id FROM admins WHERE username = '$username' AND password = '$password'";
$result = $conn->query($sql);
$count = $result -> rowCount();
if ($count ==1){
  echo '<p>Logged In</p>';
  foreach($result as $row){
    session_start();
    $_SESSION['user_id'] = $row['user_id'];
    Header('Location: ../display-person.php');
  }
}else{
  echo '<p>Invalied Login</p>';
  

}

?>