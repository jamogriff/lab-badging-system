<?php require_once('../../private/initialize.php'); ?>

<?php require_login(); ?>

<?php

$user_id = $_POST['id'];
$sql = "UPDATE inworks_users SET Here=0 WHERE CardNumber='$user_id'";

 if(mysqli_query($db, $sql)) {
   redirect_to(url_for('/admin/index.php'));
 }
  else {
    echo "Error updating database. Tell Jamison.";
  }

  ?>
