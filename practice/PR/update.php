<?php 
include "config.php";

if(isset($_POST['update'])){
  $firstname = $_POST['firstname'];
  $user_id = $_POST['id'];
  $lastname = $_POST['lastname'] ;
  $email = $_POST['email'] ;
  $password = $_POST['password'] ;

  $sql = "UPDATE 'users' SET ' firstname ' = '$firstname', 'lastname' = '$lastname ', 'email'='$email', 'password' ='$password' WHERE 'ud'='$user_id'";

  $result =$conn->query($sql);

  if($result == TRUE){
    echo "Record updatd Succesfully";
  }
  else {
    echo "Error :". $sql . "<br>" .$conn->error;
  }
}

if(isset($_GET['id'])){
  $user_id = $_GET['id' ];

  $sql = "SELECT * FROM 'users' WHERE 'id  ' = '$user_id'";

  $result = $conn->query($sql);

  if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){

      $first_name = $row['first_name'];
      $lastname = $row['last_name'];
      $email = $row['email' ];
      $password = $row['password'];
      $id = $row['id'];
    }
  }
}

 