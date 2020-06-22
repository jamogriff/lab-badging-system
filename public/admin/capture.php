<?php require_once('../../private/initialize.php'); ?>

<?php

$currentAdmin = $_SESSION['name'];
$users = num_lab_users();
$timestamp = date("Y-m-d H:i:s");

$sql = "INSERT INTO snapshot(numUsers, timestamp, generator) VALUES ($users,'$timestamp','$currentAdmin')";

if(mysqli_query($db, $sql)) {
  redirect_to(url_for('/admin/index.php'));
}
 else {
   echo "Error updating database. Tell Jamison.";
 }

?>
