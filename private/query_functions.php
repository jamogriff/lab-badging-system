<?php


function find_all_admin() {
  global $db;

  $sql = "SELECT * FROM admins";
  $result = mysqli_query($db, $sql);
  return $result;
}

function num_lab_users() {
  global $db;

  $sql = "SELECT * FROM inworks_users WHERE Here = 1";
  $result = mysqli_query($db, $sql);
  confirm_result_set($result);
  $numUsers = mysqli_num_rows($result);
  return $numUsers;
}

// used to capture users in lab at a certain point in time
// WILL HAVE TO DEVELOP LATER
function snapshot() {
  global $db;

  $sql = "SELECT * FROM inworks_users WHERE Here = 1";
  $result = mysqli_query($db, $sql);
  confirm_result_set($result);

}

function find_admin_by_username($username) {
    global $db;

    $sql = "SELECT * FROM admins ";
    $sql .= "WHERE username='" . db_escape($db, $username) . "' ";
    $sql .= "LIMIT 1";
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    $admin = mysqli_fetch_assoc($result); // find first
    mysqli_free_result($result);
    return $admin; // returns an assoc. array
  }
 ?>
