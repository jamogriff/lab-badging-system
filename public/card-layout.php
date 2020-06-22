<?php require_once('../private/initialize.php');

require_once(SHARED_PATH . '/admin_header.php');

$labusers = current_lab_users();

$queryResults = mysqli_num_rows($labusers);


/* I'll mess with the arranging database users later. Going to make mock card first to get formatting down.
if($queryResults > 0) {
  echo "<div class='row'>";
  while ($row = mysqli_fetch_assoc($labusers)) {
    echo "
      <div class='col-md'>";
      if(($row["BasicSafety"])!=1) {
        echo "<div class='card bg-danger mb-3 border-danger text-center' style='width: 3rem;'>";
      }
      else {echo "<div class='card bg-dark mb-3 text-center' style='width: 9rem;'>";
      }   echo "
          <img class='card-img-side' src=data:image/jpeg;base64,".base64_encode($row['Picture']).">
          <div class='card-body'>
            <h5 class='card-title text-white text-nowrap'>".$row['FirstName']."<br>".$row['LastName']."</h5>
            <div class='row'>
              <div class='col-sm'>
                <img src='icons/3D.svg' style='height:1rem;width:1rem;'>
              </div>
              <div class='col-sm'>
                <img src='icons/CNC-Mill.svg' style='height:1rem;width:1rem;color:red;'>
              </div>

          </div>
        </div>
      </div>";
    } echo '</div>';
  } */
  ?>
<div class="row">
  <div class="col-md">
    <div class="card">
      <div class="row card-body">
        <img class="col-sm-4 card-img" src="<?php echo url_for('/images/person.jpeg'); ?>"/>
        <div class="col-sm-8">
          <h3 class="card-title">Tester McTestin</h3>
          <p class="card-text">images!.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md" style="padding:25px;">
    <div class="side-card">
      <img class="card-img" src="<?php echo url_for('/images/person.jpeg'); ?>" alt="Card image cap">
      <div class="card-body">
        <h3 class="card-title">Randy Shepard <img src="<?php echo url_for('/icons/IWKS_Symbol_Blk.svg');?>" style="height:2rem; width:2rem"></h3>
        <div class="card-text">
          <img src="<?php echo url_for('/icons/3D.svg'); ?>" style="height:3rem; width:3rem">
          <img src="<?php echo url_for('/icons/Bio-Lab.svg'); ?>" style="height:3rem; width:3rem">
          <img src="<?php echo url_for('/icons/CNC-Mill.svg'); ?>" style="height:3rem; width:3rem">
          <img src="<?php echo url_for('/icons/CNC-Router.svg'); ?>" style="height:3rem; width:3rem">
          <img src="<?php echo url_for('/icons/Electronics.svg'); ?>" style="height:3rem; width:3rem">
          <img src="<?php echo url_for('/icons/Laser.svg'); ?>" style="height:3rem; width:3rem">
          <img src="<?php echo url_for('/icons/Vinyl.svg'); ?>" style="height:3rem; width:3rem">
        </div>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
  <div class="col-md">
    <div class="card" style="width: 9rem;">
      <img class="card-img-side" src="<?php echo url_for('/images/person.jpeg'); ?>" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
</div>
