<?php
require_once('../../private/initialize.php');

$errors = []; // empty array for holding multiple input/authentication errors
$username = '';
$password = '';

if(isset($_POST['submit'])) { // TRIED FOR EVER TO GET is_post_request() TO WORK!!! Never did, so used an isset() fxn instead. Thank God.

  $username = $_POST['username'] ?? ''; // ?? is a null coalescing operator-- acts like an isset.
  $password = $_POST['password'] ?? ''; // ?? will return first operand if it exists and not NULL, otherwise returns it's second operand ('')
  $_SESSION['user'] = $_POST['username'];
  // Validations
  if(is_blank($username)) {
    $errors[] = "Username cannot be blank.";
  }
  if(is_blank($password)) {
    $errors[] = "Password must be entered.";
  }

  // if there were no errors, try to log in
  if(empty($errors)) {
    // Using one variable ensures message is uniform
    $login_msg_failure = "Login was unsuccessful.";

    $admin = find_admin_by_username($username);
    if($admin) {
      if(password_verify($password, $admin['hashed_password'])) {
        // password matches
        log_in_admin($admin);
        redirect_to(url_for('/admin/index.php'));
      } else {
        // username found, but no match on password
        $errors[] = $login_msg_failure;
      }
    } else {
        // no username found
        $errors[] = $login_msg_failure;
    }

  }

}

  $page_title = "Login Page";
  include(SHARED_PATH . '/admin_header.php'); ?>

<div class="container">
    <div class="row justify-content-center" style="padding-top:20px; padding-bottom:20px">
      <div class="col-center border bg-light rounded" style="width:400px">
        <div class="text-center bg-dark rounded-top"><h1 class="text-light">Log In</h1></div>
        <div class="text-center" style="padding: 10px"><?php echo display_errors($errors); ?></div>
        <form class="text-center" style="padding:10px" method="POST" action="login.php">
        <b>Username:</b><br> <input type="text" name="username" value="<?php echo h($username); ?>"></input><br/>
        <b>Password:</b><br> <input type="password" name="password" value=""></input><br><br>
        <input class="btn btn-primary btn-lg" type="submit" name="submit" value="Submit"></input></form>
      </div>
    </div>
</div>

<?php include(SHARED_PATH . '/admin_footer.php'); ?>
