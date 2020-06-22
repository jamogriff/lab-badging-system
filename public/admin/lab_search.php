<?php require_once('../../private/initialize.php'); ?>

<?php require_login(); ?>

<?php $page_title = "Search Results"; ?>
<?php include(SHARED_PATH . '/admin_header.php'); ?>
<?php include(SHARED_PATH . '/admin_navigation.php'); ?>

<div class="container">
  <?php
      $results = $_POST['search'];
  		$search = mysqli_real_escape_string($db, $results); // Prevents SQL injection.
  		$sql = "SELECT * FROM inworks_users WHERE FirstName LIKE '%$search%' OR LastName LIKE '%$search%'"; // SQL query searches for like terms from search field input.
  		$result = mysqli_query($db, $sql); // Database results
  		$queryResult = mysqli_num_rows($result); // Number of results

  		echo "<h2>There are ".$queryResult." results.</h2>"; ?>

      <div class="row" style="padding-bottom:10px">
      <?php
      if ($queryResult > 0) {
  			while ($row = mysqli_fetch_assoc($result)) { // PHP fetches results, of which each instance is a link that sends user to update credentials. Should add admin access here.
  				echo "<div class='col'>
                  <div class='card' style='width: 10rem;'>
                  <img class='card-img-top' src='data:image/jpeg;base64,".base64_encode($row['Picture'])."'>
                  <div class='card-body'>
                  <h5 class='card-title'><b>".$row['FirstName']." ".$row['LastName']."</b>";
                  if ($row['BasicSafety']==1) {
                    echo " &#9745</h5></br>";
                  }
                echo  "<form action=".url_for('/admin/user_login.php')." method='POST'>
                  <button class='btn btn-primary' type='submit'>Login User</button>
                  <input type=hidden name=id value='".$row['CardNumber']."'></form>
                  </div>
                </div></div>"; // CSS code needs to be added.
  			}
  		}
  		else {
  			echo "There are no results matching your search.";
  		} ?>
</div>
</div>
