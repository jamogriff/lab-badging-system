<?php
  ob_start(); // Turns on output buffering.

  session_start(); // Sessions used to track users and authenticate all admin pages.

  /* The following are declaring common paths to more easily navigate assets in the file directory.
  These are the directory paths of the ACTUAL FILES on the Windows web server.
  Notice the BACKSLASH to denote the Windows path is backwards from a typical URL forward slash */
  define("PRIVATE_PATH", dirname(__FILE__)); // __FILE__ refers to the path of THIS file.
  define("PROJECT_PATH", dirname(PRIVATE_PATH)); // This is one directory above this file.
  define("PUBLIC_PATH", PROJECT_PATH . '\public');
  define("SHARED_PATH", PRIVATE_PATH . '\shared');

  /* This section is dynamically setting the root directory based on finding the position of '/public'.
  Notice that this function is setting the URL path, not the file directory. Thus the forward slash. */
  $public_end = strpos($_SERVER['SCRIPT_NAME'], '/public') + 7;
  $doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end);
  define("WWW_ROOT", $doc_root);


  // Functions that are used across the site. Broken up by type of function.
  require_once('db_credentials.php');
  require_once('db_functions.php');
  require_once('functions.php');
  require_once('auth_functions.php');
  require_once('validation_functions.php');
  require_once('query_functions.php');


  $db = db_connect();
  $errors = []; // Sets up errors array for login page.

  // $_SESSION['user'] = $_POST['username']; // Sets User session variable after login... may have to move it outside of this file if issues occur
?>
