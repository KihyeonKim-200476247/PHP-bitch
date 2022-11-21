<?php 
try {
  $conn = new PDO('mysql:host=localhost;abname-testing', 'Kihyeon200476247', 'Y_UZm8Ri87');
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e) {
  echo 'Connection Failed: ' . $e->getMessage();
};
?>



