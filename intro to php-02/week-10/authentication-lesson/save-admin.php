<?php
 require './inc/database.php';
 $first_name = $_POST['first_name'];
 $last_name = $_POST['last_name'];
 $username = $_POST['username'];
// want to check paassword
 $password = $_POST['password'];
 $confirm = $_POST['confirm'];
 $ok = true;

//  error check
 require './inc/header.php';
 if(empty($first_name)){
  echo '<p>First name required</p>';
  $ok = false;
 }
 if(empty($last_name)){
  echo '<p>Last name required</p>';
  $ok = false;
 }
 if(empty($username)){
  echo '<p>Username is required</p>';
  $ok = false;
 }

if(empty($password) || ($password != $comfirm)){
  echo '<p>Invalied Password</p>';
  $ok = false;
}
if($ok){
  // hash password
 $password = hash('sha512', $password);
 $sql = "INSERT INTO admins (first_name, last_name, username, password) 
 VALUES('$first_name','$last_name','$username', $password);";
 $conn->exec($sql);
 echo'<section class="success-row">';
 echo '<div>';
 echo'<h3>Admin Saved</h3>';
 echo '</div>';
 echo'</section>';
 $conn = null;
}
?>
<section class="row success-back-row">
  <div>
    <p>All setup, click the button below to thead to the sigh in!</p>
    <a href="signin.php">Sign In</a>
  </div>
</section>
<?php require './inc/footer.php';?>