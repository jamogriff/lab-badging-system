<?php require_once('../../private/initialize.php'); ?>

<?php require_login(); ?>

<?php $page_title = "Admin Portal"; ?>
<?php include(SHARED_PATH . '/admin_header.php'); ?>
<?php include(SHARED_PATH . '/admin_navigation.php'); ?>

<?php
$users = num_lab_users();
$timestamp = date("Y-m-d H:i:s"); ?>

<form action='capture.php' method='POST'>

<input type=hidden name=id value='<?php echo $users; ?>'>
<button class='button' type='submit' name='logout'>Log Out</button>
</form>
