<?php

include "index.php";

$sql = "SELECT * FROM users";

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Kihyeon Kim Assignment 2 </title>
  <meta name="description" content="Ths ">
  <meta name="robots" content="noindex, nofollow">
  <!-- GOOOGLE FONTS -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,500&family=Nabla&family=Roboto:wght@700&display=swap"
    rel="stylesheet">

  <!--  BOOTSTRAP  -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!--  CSS  -->
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/header.css">
  <link rel="stylesheet" href="./css/footer.css">
  <body>
<div class ="container">
  <h2>users </h2>
  <table class="table">
    <head>
      <tr>
        <th>ID</th>
        <th>First name</th>
        <th>Last Name</th>
        <th>Email</th>   
        <th>Action</th>
      </tr>
</thread>
<tbody>
  <?php
  if ($result-> num_rows>0){
    while ($row = $result->fetch_assoc()){
      ?>
      <tr>
        <td><?php echo $row['id']; ?> </td>
        <td><?php echo $row['firstname']; ?> </td>
        <td><?php echo $row['lastname']; ?> </td>
        <td><?php echo $row['email']; ?> </td>
        <td><a class ="btn btn-info" href = "update.php?id=<?php echo $row['id']; ?>">
        Edit</a>$nbsp;<a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>">
        Delete </a></td>
    </tr>
         
  <?php  }
  }
  ?>

</tbody>
</table>

</div>

  </body>
  </html>