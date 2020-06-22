<?php
  // Performs all necessary actions when logging in.
  function log_in_admin($admin) {
  // Regenerating ID protects admin from session fixation
    session_regenerate_id();
    $_SESSION['admin_id'] = $admin['id'];
    $_SESSION['last_login'] = time();
    $_SESSION['username'] = $admin['username'];
    $_SESSION['name'] = $admin['first_name'];
    return true;
  }
  // Performs all necessary functions to logout a user.
  function log_out_admin () {
    unset($_SESSION['admin_id']);
    unset($_SESSION['last_login']);
    unset($_SESSION['username']);
    unset($_SESSION['name']);
    // session_destroy() would also accomplish these above functions, but would destroy the entire session.
  }

  // Checks to see whether the admin_id session is set to determine whether user logged in.
  // Forms the basis of the require_login() function below.
  function is_logged_in() {
    return isset($_SESSION['admin_id']);
  }

  // Uses the above function to check whether session was set. If it's not set, then a redirect to the login page is executed.
  function require_login() {
    if(!is_logged_in()) {
      redirect_to(url_for('/admin/login.php'));
    } else {
      // do nothing
    }
  }

  ?>
