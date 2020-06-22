<?php
  if(!isset($page_title)) { $page_title = "Admin Portal"; }
  ?>
<!doctype html>

<html lang="en">
  <title>Inworks Lab <?php if(isset($page_title)) { echo "- " . $page_title; } ?></title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" type="text/css" href="<?php echo url_for('stylesheets/bootstrap.css'); ?>"/>


  <!-- JQuery loaded first through CDN, and then js file hosted locally -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.js" integrity="sha256-BTlTdQO9/fascB1drekrDVkaKd9PkwBymMlHOiG+qLI=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="<?php echo url_for('stylesheets/bootstrap.js'); ?>"></script>
  </head>

<header>
<div class="container-fluid">
  <div class="row bg-dark align-items-center" style="padding-bottom:10px; padding-top:15px;">
    <div class="col-md-4 text-center img-logo"><img src="<?php echo url_for('images/scaled-logo_light.svg'); ?>"></div>
    <h1 class="col-md-6 text-center text-light"><?php echo $page_title; ?></h1>
    <div class="col-md-2 text-center"><?php if(isset($_SESSION['admin_id'])) {echo "<a class=\"btn btn-secondary btn-lg\" href=\"".url_for('/admin/logout.php')."\">Logout</a>";} ?></div>
  </div>
</div>

</header>
