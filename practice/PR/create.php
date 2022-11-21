<?php
 include"index.php";

 if(isset($_POST['submit'])){
      $first_name =$_POST['firstname'];
      $last_name =$_POST['lastname'];
      $email =$_POST['email'];
      $passwrod =$_POST['passwrod'];
    
 }

 $sql = "INSERT INTO 'users' ('firstname', 'lastname', 'email', 'passwrod') VALUES ('$first_name', '$last_name', '$email', '$passwrod')";

 $result = $conn->query($sql);

 if($result == TRUE) {
   echo "New record created succesfully";
 }else {
  echo "Error:" . $sql . "<br>" .$conn->error;
 }
?>