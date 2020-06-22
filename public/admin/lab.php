<?php require_once("../../private/initialize.php");

require_login();

$page_title = "Lab Status";
include(SHARED_PATH . '/admin_header.php');
include(SHARED_PATH . '/admin_navigation.php');

$users = current_lab_users();
$numResults = mysqli_num_rows($users);


if ($numResults > 0) { ?>
  <table class="table table-dark">
    <tr>
      <th>Name</th>
      <th>Picture</th>
      <th>3D</h>
      <th>Laser</th>
      <th>Woodshop</th>
      <th>Metalshop</th>
      <th>Vinyl</h>
    </tr> <?php
    while ($row = mysqli_fetch_assoc($users)) {
      echo "<tr>
      <td>".$row['FirstName']." ".$row['LastName']."</td>
      <td><div class='image'><img src=data:image/jpeg;base64,".base64_encode($row['Picture'])." style='width:93.75px;height:125px;border-radius:20%'></div></td>
      <td>".$row['3D']."</td>
      <td>".$row['Laser']."</td>
      <td>".$row['Wood']."</td>
      <td>".$row['Metal']."</td>
      <td>".$row['Vinyl']."</td>
      </tr>";
    } echo "</table>";
}


?>
<table>
  <tr>
    <th>Foreach Loop</th>
  </tr>


</table>
