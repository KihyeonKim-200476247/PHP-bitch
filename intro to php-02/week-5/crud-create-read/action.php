<?php 
session_start();
include 'DB.class.php';
$tblName = 'fallUsers';
$db = new DB();
if(isset($_REQUEST['action_type']) && !empty($_REQUEST['action_type'])) {
  if($_REQUEST['action_type'] == 'add') {
    $userData = array(  
      'name'  => $_POST['name'],
      'email' => $_POST['email'],
      'phone' => $_POST['phone']
    );
    $insert = $db->insert($tblName, $userData);
    $statusMas = $insert?'User data has been inserted.':'Some problem occurred try again.';
    $_SESSION['statusMsg'] = $statusMsg;
    header("Location:index.php");
  }
}
