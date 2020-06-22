<?php

// Used so I don;t have to type htmlspecialchars every time.
function h($string="") {
  return htmlspecialchars($string);
}

// Used to add missing '/' if not present in URL path.
function url_for($script_path) {
  if($script_path[0] != '/') {
    $script_path = "/" . $script_path;
  }
  return WWW_ROOT . $script_path;
}

function redirect_to($location) {
  header("Location: " . $location);
  exit;
}

// This function needs to be tested to see if it actually works.
// I used an isset($_POST) function instead.
function is_post_request() {
  return $_SERVER['REQUEST_METHOD' == 'POST'];
}

function display_errors($errors=array()) {
  $output = '';
  if(!empty($errors)) {
    foreach($errors as $error) {
      $output .= "<div class=\"alert alert-warning\" role=\"alert\" style=\"padding:10px\">".h($error)."</div>";
    }
  }
  return $output;
}

?>
