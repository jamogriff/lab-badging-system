<?php require_once('../../private/initialize.php'); ?>

<?php require_login(); ?>

<?php

$sql = "UPDATE inworks_users SET BasicSafety='$_POST[safe]', Wood='$_POST[wood]', Laser='$_POST[laser]', Vinyl='$_POST[vinyl]', Cncr='$_POST[cncr]', Cncm='$_POST[cncm]', Metal='$_POST[metal]', 3D='$_POST[print]', Electrical='$_POST[elec]', Sewing='$_POST[sewing]',  Bio='$_POST[bio]', Micro='$_POST[micro]' WHERE CardNumber='$_POST[id]'";

 if(mysqli_query($db, $sql)) {
   redirect_to(url_for('/admin/index.php'));
 }
  else {
    echo "Error updating database. Tell Jamison.";
  }

  ?>
