<?php require_once('../../private/initialize.php'); ?>

<?php require_login(); ?>

<?php $page_title = "Admin Portal"; ?>
<?php include(SHARED_PATH . '/admin_header.php'); ?>
<?php include(SHARED_PATH . '/admin_navigation.php'); ?>

<div class="table-responsive">
  <?php
  $sql = "SELECT * FROM inworks_users WHERE Here=1";
  $result = mysqli_query($db, $sql); // $db should be within scope
  $queryResults = mysqli_num_rows($result);

  if ($queryResults > 0) { ?>
    <table class="table table-sm">
      <thead>
        <tr>
          <!-- these section headers have their associated symbol instead of text -->
          <th scope="col"></th>
          <th scope="col"></th>
          <th scope="col"><img src="<?php echo url_for('/icons/IWKS_Symbol_Blk.svg'); ?>" style="width:40px;height:40px"></th>
          <th scope="col"><img src="<?php echo url_for('/icons/Laser.svg'); ?>" style="width:40px;height:40px"></th>
          <th scope="col"><img src="<?php echo url_for('/icons/3D.svg'); ?>" style="width:40px;height:40px"></th>
          <th scope="col"><img src="<?php echo url_for('/icons/Sewing.svg'); ?>" style="width:40px;height:40px"></th>
          <th scope="col"><img src="<?php echo url_for('/icons/Vinyl.svg'); ?>" style="width:40px;height:40px"></th>
          <th scope="col"><img src="<?php echo url_for('/icons/Wood-Shop.svg'); ?>" style="width:40px;height:40px"></th>
          <th scope="col"><img src="<?php echo url_for('/icons/Metal-Shop.svg'); ?>" style="width:40px;height:40px"></th>
          <th scope="col"><img src="<?php echo url_for('/icons/Micro_Electronics.svg'); ?>" style="width:40px;height:40px"></th>
          <th scope="col"><img src="<?php echo url_for('/icons/Electronics.svg'); ?>" style="width:40px;height:40px"></th>
          <th scope="col"><img src="<?php echo url_for('/icons/CNC-Router.svg'); ?>" style="width:40px;height:40px"></th>
          <th scope="col"><img src="<?php echo url_for('/icons/CNC-Mill.svg'); ?>" style="width:40px;height:40px"></th>
          <th scope="col"><img src="<?php echo url_for('/icons/Bio-Lab.svg'); ?>" style="width:40px;height:40px"></th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
      <?php while ($row = mysqli_fetch_assoc($result)) {
        /* The following decision tree changes the color
        of the table row depending on whether the user is
        student, UCD, COM, staff, etc. */
        if ($row['Status']=="Student") {
          echo "<tr class='table-success'>";
        }
        elseif ($row['Status']=="Staff") {
          echo "<tr class='table-primary'>";
        }
        elseif ($row['Status']=="UCD") {
          echo "<tr class='table-info'>";
        }
        elseif ($row['Status']=="COM") {
          echo "<tr class='table-danger'>";
        }
        elseif ($row['Status']=="Monitor") {
          echo "<tr class='table-warning'>";
        }
        else {
          echo "<tr>";
        }
        echo
            "<td><img src=data:image/jpeg;base64,".base64_encode($row['Picture'])."  style='width:93.75px;height:125px;border-radius:20%'></td>
            <td><b>".$row['FirstName']."<br>".$row['LastName']."&nbsp</b>";

            // this code will add a checkbox next to the user's name is they have BasicSafety checked
            if ($row['BasicSafety']==1) {
              echo "&#9745</br></br>";
            }

            // used to add logout button inside name cell
            echo "<form action=".url_for('/admin/user_logout.php')." method=POST>
            <input type=hidden name=id value='".$row['CardNumber']."'>
            <button class='btn btn-warning' type='submit'><b>Logout</b></button></form></td>";

            /*
            populates table with user's current level in each of our skills.
            skills can be changed by using arrows keys to obtain 1-3 values which are then updated to Database
            */
            echo "
            <form action=".url_for('/admin/user_update.php')." method=POST>
            <td><input type=number min=0 max=1 name=safe value='".$row['BasicSafety']."' style=width:40px;'</td>
  					<td><input type=number min=0 max=3 name=laser value='".$row['Laser']."' style=width:40px;'</td>
            <td><input type=number min=0 max=3 name=print value='".$row['3D']."' style=width:40px;'</td>
            <td><input type=number min=0 max=3 name=sewing value='".$row['Sewing']."' style=width:40px;'</td>
            <td><input type=number min=0 max=3 name=vinyl value='".$row['Vinyl']."' style=width:40px;'</td>
  					<td><input type=number min=0 max=3 name=wood value='".$row['Wood']."' style=width:40px;'</td>
            <td><input type=number min=0 max=3 name=metal value='".$row['Metal']."' style=width:40px;'</td>
            <td><input type=number min=0 max=3 name=micro value='".$row['Micro']."' style=width:40px;'</td>
            <td><input type=number min=0 max=3 name=elec value='".$row['Electrical']."' style=width:40px;'</td>
            <td><input type=number min=0 max=3 name=cncr value='".$row['Cncr']."' style=width:40px;'</td>
            <td><input type=number min=0 max=3 name=cncm value='".$row['Cncm']."' style=width:40px;'</td>
            <td><input type=number min=0 max=3 name=bio value='".$row['Bio']."' style=width:40px;'</td>
            <input type=hidden name=id value='".$row['CardNumber']."'>
            <td><button class='btn btn-lg btn-primary' type='submit'>Update</button></td>
            </form>

          </tr> ";
         }

  echo  "</tbody></table>";

  } ?>

</div>


<?php include(SHARED_PATH . '/admin_footer.php'); ?>
