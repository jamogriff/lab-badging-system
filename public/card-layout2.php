<?php require_once('../private/initialize.php');

require_once(SHARED_PATH . '/admin_header.php'); ?>
<div class="container-fluid">
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

  <!-- This card works the best for layout. Changed .card to display as a row instead of column.
  The columns are not uniform. Likely need to assign each column width to be even.
  This part of front-end design blows. -->
  <div class="col-md" style="padding:25px;">
    <div class="side-card w-80">
      <img class="card-img" src="<?php echo url_for('/images/person.jpeg'); ?>" alt="Card image cap">
      <div class="card-body">
        <h3 class="card-title">Randy Shepard <img src="<?php echo url_for('/icons/IWKS_Symbol_Blk.svg');?>" style="height:2rem; width:2rem"></h3>
        <div class="card-text row">
          <img class="col" src="<?php echo url_for('/icons/3D.svg'); ?>" style="height:3rem; width:3rem">
          <img class="col" src="<?php echo url_for('/icons/Bio-Lab.svg'); ?>" style="height:3rem; width:3rem">
          <img class="col" src="<?php echo url_for('/icons/CNC-Mill.svg'); ?>" style="height:3rem; width:3rem">
          <img class="col" src="<?php echo url_for('/icons/CNC-Router.svg'); ?>" style="height:3rem; width:3rem">
          <img class="col" src="<?php echo url_for('/icons/Electronics.svg'); ?>" style="height:3rem; width:3rem">
          <img class="col" src="<?php echo url_for('/icons/Laser.svg'); ?>" style="height:3rem; width:3rem">
          <img class="col" src="<?php echo url_for('/icons/Vinyl.svg'); ?>" style="height:3rem; width:3rem">
        </div>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
  <div class="col-md" style="padding:25px;">
    <div class="side-card w-80 bg-light">
      <img class="card-img" src="<?php echo url_for('/images/person.jpeg'); ?>" alt="Card image cap">
      <div class="card-body">
        <h2 class="card-title" style="background-color: rgba(0, 0, 0, 0.03">Randy Shepard</h2>
        <h5 class="card-subtitle mb-2 text-muted">Level 1 Ensign</h5>
        <hr class="my-4">
        <div class="card-text row">
          <img class="col" src="<?php echo url_for('/icons/3D.svg'); ?>" style="height:3rem; width:3rem">
          <img class="col" src="<?php echo url_for('/icons/Bio-Lab.svg'); ?>" style="height:3rem; width:3rem">
          <img class="col" src="<?php echo url_for('/icons/CNC-Mill.svg'); ?>" style="height:3rem; width:3rem">
          <img class="col" src="<?php echo url_for('/icons/CNC-Router.svg'); ?>" style="height:3rem; width:3rem">
          <div class="w-100"></div>
          <img class="col" src="<?php echo url_for('/icons/Electronics.svg'); ?>" style="height:3rem; width:3rem">
          <img class="col" src="<?php echo url_for('/icons/Laser.svg'); ?>" style="height:3rem; width:3rem">
          <img class="col" src="<?php echo url_for('/icons/Metal-Shop.svg'); ?>" style="height:3rem; width:3rem">
          <img class="col" src="<?php echo url_for('/icons/Micro_Electronics.svg'); ?>" style="height:3rem; width:3rem">
          <img class="col" src="<?php echo url_for('/icons/Sewing.svg'); ?>" style="height:3rem; width:3rem">
          <img class="col" src="<?php echo url_for('/icons/Vinyl.svg'); ?>" style="height:3rem; width:3rem">
          <img class="col" src="<?php echo url_for('/icons/Wood-Shop.svg'); ?>" style="height:3rem; width:3rem">
        </div>
      </div>
    </div>
  </div>
  <div class="col-md" style="padding:25px;">
    <div class="side-card w-80 bg-warning shadow p-3 mb-5">
      <img class="card-img border border-dark" src="<?php echo url_for('/images/person.jpeg'); ?>" alt="Card image cap">
      <div class="card-body">
        <h2 class="card-title">Randy Shepard</h2>
        <h5 class="card-subtitle mb-2 text-muted">Level 1 Ensign</h5>
        <hr class="my-4">
        <div class="card-text row">
          <img class="col" src="<?php echo url_for('/images/3d2.png'); ?>" style="height:3rem; width:3rem">
          <img class="col" src="<?php echo url_for('/images/cncm3.png'); ?>" style="height:3rem; width:3rem">
          <img class="col" src="<?php echo url_for('/images/Bio.png'); ?>" style="height:3rem; width:3rem">
          <img class="col" src="<?php echo url_for('/images/e1.png'); ?>" style="height:3rem; width:3rem">
          <img class="col" src="<?php echo url_for('/images/elec.png'); ?>" style="height:3rem; width:3rem">
          <div class="w-100"></div>
          <img class="col" src="<?php echo url_for('/images/l4.png'); ?>" style="height:3rem; width:3rem">
          <img class="col" src="<?php echo url_for('/images/m1.png'); ?>" style="height:3rem; width:3rem">
          <img class="col" src="<?php echo url_for('/images/cncm3.png'); ?>" style="height:3rem; width:3rem">
          <img class="col" src="<?php echo url_for('/images/cncm3.png'); ?>" style="height:3rem; width:3rem">
          <img class="col" src="<?php echo url_for('/images/cncm3.png'); ?>" style="height:3rem; width:3rem">
        </div>
      </div>
    </div>
  </div>
  <div class="col-md" style="padding:25px;">
    <div class="side-card w-80 bg-warning shadow p-3 mb-5">
      <img class="card-img border border-dark" src="<?php echo url_for('/images/person.jpeg'); ?>" alt="Card image cap">
      <div class="card-body">
        <h2 class="card-title">Randy Shepard</h2>
        <h5 class="card-subtitle mb-2 text-muted">Level 1 Ensign</h5>
        <hr class="my-4">
        <div class="card-text row">
          <p class="col">Safety</p>
          <button type="button" class="col btn-primary">Laser Cutting<span class="badge badge-light">2</span></button>
          <p class="col">3D Printng</p>
          <p class="col">Woodshop</p>
          <p class="col">Metal</p>
          <p class="col">CNC Mill</p>
          <p class="col">Basic Safety</p>
          <p class="col">Basic Safety</p>
          <p class="col">Basic Safety</p>

        </div>
      </div>
    </div>
  </div>
  <div class="col-md">
    <div cass="card" style="width: 15rem; position:relative; z-index:1;">
      <img class="card-img-top" src="<?php echo url_for('/images/person.jpeg'); ?>" >
      <span class="badge badge-primary float-right" style="position:absolute; right:15px; top:10px; z-index:3;">Verified</span>
      <div class="card-body">
        <h2 class="card-title bg-warning rounded-lg" style="position:absolute; z-index:3; top:260px; padding:5px;">Name Person</h2>
        <div class="row card-text" >
          <div class="col">
            <h5 class="rounded-lg bg-primary text-white text-center" style="padding:5px;">Laser&nbsp;<p class="badge badge-light">1/3</p></h5>
          </div>
          <div class="col">
            <h5 class="rounded-lg bg-success text-white text-center" style="padding:5px;">Laser&nbsp;<span class="badge badge-light">3</span></h5>
          </div>
          <div class="col">
            <h5 class="rounded-lg bg-dark text-white text-center" style="padding:5px;">Laser&nbsp;<span class="badge badge-light">3</span></h5>
          </div>
          <div class="col">
            <h5 class="rounded-lg bg-primary text-white text-center" style="padding:5px;">Laser&nbsp;<span class="badge badge-light">3</span></h5>
          </div>
          <div class="col">
            <h5 class="rounded-lg bg-primary text-white text-center" style="padding:5px;">Laser&nbsp;<span class="badge badge-light">3</span></h5>
          </div>

        </div>
      </div>
    </div>
  </div>
  <div class="col-md bg-dark justify-content-center">
    <div cass="card" style="width: 15rem; position:relative; z-index:1;">
      <img class="card-img-top" src="<?php echo url_for('/images/person.jpeg'); ?>" >
      <span class="badge badge-primary float-right" style="position:absolute; right:15px; top:10px; z-index:3;">Verified</span>
      <div class="card-body">
        <h2 class="card-title bg-warning rounded-lg text-center" style="position:absolute; z-index:3; top:260px; left:0; right:0; margin:0">Smaller Super-Longername</h2> <!-- Got to fix this formatting to include larger names. It looks fine with small names -->
        <div class="accordion" id="accordionExample">
          <div class="card">
            <div class="card-header" id="headingOne">
              <h2 class="mb-0">
                <a class="progress w-100 border border-dark" role="button" style="height:30px" data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  <div class="progress-bar progress-bar-striped bg-primary text-dark" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"><h6>The Basics</h6></div>
                </a>
              </h2>
            </div>

            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="row card-body">
                  <div class="col">
                    <h5 class="rounded-lg bg-primary text-white text-center" style="padding:5px;">Handtools&nbsp;<p class="badge badge-light">1/1</p></h5>
                  </div>
                  <div class="col">
                    <h5 class="rounded-lg bg-success text-white text-center" style="padding:5px;">Laser&nbsp;<span class="badge badge-light">2/3</span></h5>
                  </div>
                  <div class="col">
                    <h5 class="rounded-lg bg-dark text-white text-center" style="padding:5px;">3D Printing&nbsp;<span class="badge badge-light">0/3</span></h5>
                  </div>
              </div>
            </div>
          </div>
          <div class="card bg-light w-100">
            <div class="card-header" id="headingTwo">
              <h2 class="mb-0">
                <a class="progress w-100 collapsed border border-dark" role="button" style="height:30px" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  <div class="progress-bar progress-bar-striped bg-warning text-dark" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"><h6>Material Mastery</h6></div>
                </a>
              </h2>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
              <div class="row card-body">
                <div class="col">
                  <h5 class="rounded-lg bg-primary text-white text-center" style="padding:5px;">Vinyl&nbsp;<p class="badge badge-light">1/3</p></h5>
                </div>
                <div class="col">
                  <h5 class="rounded-lg bg-success text-white text-center" style="padding:5px;">Sewing&nbsp;<span class="badge badge-light">3</span></h5>
                </div>
                <div class="col">
                  <h5 class="rounded-lg bg-dark text-white text-center" style="padding:5px;">Woodshop&nbsp;<span class="badge badge-light">3</span></h5>
                </div>
                <div class="col">
                  <h5 class="rounded-lg bg-dark text-white text-center" style="padding:5px;">Metalshop&nbsp;<span class="badge badge-light">3</span></h5>
                </div>
                <div class="col">
                  <h5 class="rounded-lg bg-dark text-white text-center" style="padding:5px;">Mold-making&nbsp;<span class="badge badge-light">3</span></h5>
                </div>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header" id="TechoWizardry">
              <h2 class="mb-0">
                <a class="progress w-100 border border-dark" role="button" style="height:30px" data-toggle="collapse" href="#collapseTechno" aria-expanded="false" aria-controls="collapseTechno">
                  <div class="progress-bar progress-bar-striped bg-success text-dark" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"><h6>Techno-Wizardry</h6></div>
                </a>
              </h2>
            </div>

            <div id="collapseTechno" class="collapse" aria-labelledby="TechoWizardry" data-parent="#accordionExample">
              <div class="row card-body">
                <div class="col">
                  <h5 class="rounded-lg bg-primary text-white text-center" style="padding:5px;">Electronics&nbsp;<p class="badge badge-light">1/3</p></h5>
                </div>
                <div class="col">
                  <h5 class="rounded-lg bg-success text-white text-center" style="padding:5px;">Soldering&nbsp;<span class="badge badge-light">3</span></h5>
                </div>
                <div class="col">
                  <h5 class="rounded-lg bg-dark text-white text-center" style="padding:5px;">Arduino&nbsp;<span class="badge badge-light">3</span></h5>
                </div>
                <div class="col">
                  <h5 class="rounded-lg bg-dark text-white text-center" style="padding:5px;">Raspberry Pi&nbsp;<span class="badge badge-light">3</span></h5>
                </div>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header" id="AdvFab">
              <h2 class="mb-0">
                <a class="progress w-100 border border-dark" role="button" style="height:30px" data-toggle="collapse" href="#collapseAdv" aria-expanded="false" aria-controls="collapseAdv">
                  <div class="progress-bar progress-bar-striped bg-warning text-dark" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"><h6>Advanced Fabrication</h6></div>
                </a>
              </h2>
            </div>

            <div id="collapseAdv" class="collapse" aria-labelledby="AdvFab" data-parent="#accordionExample">
              <div class="row card-body">
                <div class="col">
                  <h5 class="rounded-lg bg-primary text-white text-center" style="padding:5px;">CNC Mill&nbsp;<p class="badge badge-light">1/3</p></h5>
                </div>
                <div class="col">
                  <h5 class="rounded-lg bg-success text-white text-center" style="padding:5px;">OtherMill&nbsp;<span class="badge badge-light">3</span></h5>
                </div>
                <div class="col">
                  <h5 class="rounded-lg bg-dark text-white text-center" style="padding:5px;">CNC Router&nbsp;<span class="badge badge-light">3</span></h5>
                </div>
                <div class="col">
                  <h5 class="rounded-lg bg-dark text-white text-center" style="padding:5px;">SLA Printing&nbsp;<span class="badge badge-light">3</span></h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md justify-content-center">
    <div cass="card" style="width: 15rem; position:relative; z-index:1;">
      <img class="card-img-top shadow rounded" src="<?php echo url_for('/images/person.jpeg'); ?>" >
      <span class="badge badge-primary float-right" style="position:absolute; right:15px; top:10px; z-index:3;">Verified</span>
      <div class="card-body bg-light shadow mb-5 rounded">
        <h2 class="card-title bg-primary rounded-lg text-center text-light border border-dark" style="position:absolute; z-index:3; top:260px; left:0; right:0; margin:auto">Smaller name</h2> <!-- Got to fix this formatting to include larger names. It looks fine with small names -->
        <div class="accordion" id="accordionExample">
          <div class="card">
            <div class="card-header" id="headingOne">
              <h2 class="mb-0">
                <a class="progress w-100 border border-dark" role="button" style="height:30px" data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  <div class="progress-bar progress-bar-striped bg-primary text-dark" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"><h6>The Basics</h6></div>
                </a>
              </h2>
            </div>

            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="row card-body">
                  <div class="col">
                    <h5 class="rounded-lg bg-primary text-white text-center" style="padding:5px;">Handtools&nbsp;<p class="badge badge-light">1/1</p></h5>
                  </div>
                  <div class="col">
                    <h5 class="rounded-lg bg-success text-white text-center" style="padding:5px;">Laser&nbsp;<span class="badge badge-light">2/3</span></h5>
                  </div>
                  <div class="col">
                    <h5 class="rounded-lg bg-dark text-white text-center" style="padding:5px;">3D Printing&nbsp;<span class="badge badge-light">0/3</span></h5>
                  </div>
              </div>
            </div>
          </div>
          <div class="card bg-light w-100">
            <div class="card-header" id="headingTwo">
              <h2 class="mb-0">
                <a class="progress w-100 collapsed border border-dark" role="button" style="height:30px" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  <div class="progress-bar progress-bar-striped bg-warning text-dark" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"><h6>Material Mastery</h6></div>
                </a>
              </h2>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
              <div class="row card-body">
                <div class="col">
                  <h5 class="rounded-lg bg-primary text-white text-center" style="padding:5px;">Vinyl&nbsp;<p class="badge badge-light">1/3</p></h5>
                </div>
                <div class="col">
                  <h5 class="rounded-lg bg-success text-white text-center" style="padding:5px;">Sewing&nbsp;<span class="badge badge-light">3</span></h5>
                </div>
                <div class="col">
                  <h5 class="rounded-lg bg-dark text-white text-center" style="padding:5px;">Woodshop&nbsp;<span class="badge badge-light">3</span></h5>
                </div>
                <div class="col">
                  <h5 class="rounded-lg bg-dark text-white text-center" style="padding:5px;">Metalshop&nbsp;<span class="badge badge-light">3</span></h5>
                </div>
                <div class="col">
                  <h5 class="rounded-lg bg-dark text-white text-center" style="padding:5px;">Mold-making&nbsp;<span class="badge badge-light">3</span></h5>
                </div>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header" id="TechoWizardry">
              <h2 class="mb-0">
                <a class="progress w-100 border border-dark" role="button" style="height:30px" data-toggle="collapse" href="#collapseTechno" aria-expanded="false" aria-controls="collapseTechno">
                  <div class="progress-bar progress-bar-striped bg-success text-dark" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"><h6>Techno-Wizardry</h6></div>
                </a>
              </h2>
            </div>

            <div id="collapseTechno" class="collapse" aria-labelledby="TechoWizardry" data-parent="#accordionExample">
              <div class="row card-body">
                <div class="col">
                  <h5 class="rounded-lg bg-primary text-white text-center" style="padding:5px;">Electronics&nbsp;<p class="badge badge-light">1/3</p></h5>
                </div>
                <div class="col">
                  <h5 class="rounded-lg bg-success text-white text-center" style="padding:5px;">Soldering&nbsp;<span class="badge badge-light">3</span></h5>
                </div>
                <div class="col">
                  <h5 class="rounded-lg bg-dark text-white text-center" style="padding:5px;">Arduino&nbsp;<span class="badge badge-light">3</span></h5>
                </div>
                <div class="col">
                  <h5 class="rounded-lg bg-dark text-white text-center" style="padding:5px;">Raspberry Pi&nbsp;<span class="badge badge-light">3</span></h5>
                </div>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header" id="AdvFab">
              <h2 class="mb-0">
                <a class="progress w-100 border border-dark" role="button" style="height:30px" data-toggle="collapse" href="#collapseAdv" aria-expanded="false" aria-controls="collapseAdv">
                  <div class="progress-bar progress-bar-striped bg-warning text-dark" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"><h6>Advanced Fabrication</h6></div>
                </a>
              </h2>
            </div>

            <div id="collapseAdv" class="collapse" aria-labelledby="AdvFab" data-parent="#accordionExample">
              <div class="row card-body">
                <div class="col">
                  <h5 class="rounded-lg bg-primary text-white text-center" style="padding:5px;">CNC Mill&nbsp;<p class="badge badge-light">1/3</p></h5>
                </div>
                <div class="col">
                  <h5 class="rounded-lg bg-success text-white text-center" style="padding:5px;">OtherMill&nbsp;<span class="badge badge-light">3</span></h5>
                </div>
                <div class="col">
                  <h5 class="rounded-lg bg-dark text-white text-center" style="padding:5px;">CNC Router&nbsp;<span class="badge badge-light">3</span></h5>
                </div>
                <div class="col">
                  <h5 class="rounded-lg bg-dark text-white text-center" style="padding:5px;">SLA Printing&nbsp;<span class="badge badge-light">3</span></h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md bg-dark justify-content-center align-items-center">
    <div cass="card" style="width: 15rem; position:relative; z-index:1;">
      <img class="card-img-top" src="<?php echo url_for('/images/person.jpeg'); ?>" >
      <span class="badge badge-primary float-right" style="position:absolute; right:15px; top:10px; z-index:3;">Verified</span>
      <div class="card-body">
        <h2 class="card-title bg-warning rounded-lg text-center" style="position:absolute; z-index:3; top:260px; left:0; right:0; margin:0">Smaller Super-Longername</h2> <!-- Got to fix this formatting to include larger names. It looks fine with small names -->
        <div class="accordion" id="accordionExample">
          <div class="card">
            <div class="card-header" id="headingOne">
              <h2 class="mb-0">
                <a class="progress w-100 border border-dark" role="button" style="height:30px" data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  <div class="progress-bar progress-bar-striped bg-primary text-dark" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"><h6>The Basics</h6></div>
                </a>
              </h2>
            </div>

            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="row card-body">
                  <div class="col">
                    <h5 class="rounded-lg bg-primary text-white text-center" style="padding:5px;">Handtools&nbsp;<p class="badge badge-light">1/1</p></h5>
                  </div>
                  <div class="col">
                    <h5 class="rounded-lg bg-success text-white text-center" style="padding:5px;">Laser&nbsp;<span class="badge badge-light">2/3</span></h5>
                  </div>
                  <div class="col">
                    <h5 class="rounded-lg bg-dark text-white text-center" style="padding:5px;">3D Printing&nbsp;<span class="badge badge-light">0/3</span></h5>
                  </div>
              </div>
            </div>
          </div>
          <div class="card bg-light w-100">
            <div class="card-header" id="headingTwo">
              <h2 class="mb-0">
                <a class="progress w-100 collapsed border border-dark" role="button" style="height:30px" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  <div class="progress-bar progress-bar-striped bg-warning text-dark" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"><h6>Material Mastery</h6></div>
                </a>
              </h2>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
              <div class="row card-body">
                <div class="col">
                  <h5 class="rounded-lg bg-primary text-white text-center" style="padding:5px;">Vinyl&nbsp;<p class="badge badge-light">1/3</p></h5>
                </div>
                <div class="col">
                  <h5 class="rounded-lg bg-success text-white text-center" style="padding:5px;">Sewing&nbsp;<span class="badge badge-light">3</span></h5>
                </div>
                <div class="col">
                  <h5 class="rounded-lg bg-dark text-white text-center" style="padding:5px;">Woodshop&nbsp;<span class="badge badge-light">3</span></h5>
                </div>
                <div class="col">
                  <h5 class="rounded-lg bg-dark text-white text-center" style="padding:5px;">Metalshop&nbsp;<span class="badge badge-light">3</span></h5>
                </div>
                <div class="col">
                  <h5 class="rounded-lg bg-dark text-white text-center" style="padding:5px;">Mold-making&nbsp;<span class="badge badge-light">3</span></h5>
                </div>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header" id="TechoWizardry">
              <h2 class="mb-0">
                <a class="progress w-100 border border-dark" role="button" style="height:30px" data-toggle="collapse" href="#collapseTechno" aria-expanded="false" aria-controls="collapseTechno">
                  <div class="progress-bar progress-bar-striped bg-success text-dark" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"><h6>Techno-Wizardry</h6></div>
                </a>
              </h2>
            </div>

            <div id="collapseTechno" class="collapse" aria-labelledby="TechoWizardry" data-parent="#accordionExample">
              <div class="row card-body">
                <div class="col">
                  <h5 class="rounded-lg bg-primary text-white text-center" style="padding:5px;">Electronics&nbsp;<p class="badge badge-light">1/3</p></h5>
                </div>
                <div class="col">
                  <h5 class="rounded-lg bg-success text-white text-center" style="padding:5px;">Soldering&nbsp;<span class="badge badge-light">3</span></h5>
                </div>
                <div class="col">
                  <h5 class="rounded-lg bg-dark text-white text-center" style="padding:5px;">Arduino&nbsp;<span class="badge badge-light">3</span></h5>
                </div>
                <div class="col">
                  <h5 class="rounded-lg bg-dark text-white text-center" style="padding:5px;">Raspberry Pi&nbsp;<span class="badge badge-light">3</span></h5>
                </div>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header" id="AdvFab">
              <h2 class="mb-0">
                <a class="progress w-100 border border-dark" role="button" style="height:30px" data-toggle="collapse" href="#collapseAdv" aria-expanded="false" aria-controls="collapseAdv">
                  <div class="progress-bar progress-bar-striped bg-warning text-dark" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"><h6>Advanced Fabrication</h6></div>
                </a>
              </h2>
            </div>

            <div id="collapseAdv" class="collapse" aria-labelledby="AdvFab" data-parent="#accordionExample">
              <div class="row card-body">
                <div class="col">
                  <h5 class="rounded-lg bg-primary text-white text-center" style="padding:5px;">CNC Mill&nbsp;<p class="badge badge-light">1/3</p></h5>
                </div>
                <div class="col">
                  <h5 class="rounded-lg bg-success text-white text-center" style="padding:5px;">OtherMill&nbsp;<span class="badge badge-light">3</span></h5>
                </div>
                <div class="col">
                  <h5 class="rounded-lg bg-dark text-white text-center" style="padding:5px;">CNC Router&nbsp;<span class="badge badge-light">3</span></h5>
                </div>
                <div class="col">
                  <h5 class="rounded-lg bg-dark text-white text-center" style="padding:5px;">SLA Printing&nbsp;<span class="badge badge-light">3</span></h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
</div>
