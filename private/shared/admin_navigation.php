<!-- Have to play around with a good, functional setup -->

<nav class="navbar navbar-light bg-light">

  <a class="btn btn-sm btn-outline-primary nav-item nav-link" href="<?php echo url_for('/admin/index.php');?>">Home</a>
  <a class="btn btn-sm btn-outline-primary nav-item nav-link" href="https://inworks.ucdenver.edu/w/workshops/" target="_blank">Workshops</a>
  <!-- the following is how we could capture number of users in space at certain timepoints -->
  <form action='capture.php' method='POST'>
    <input type=hidden name=numUsers value="#">
    <button class="btn btn-sm btn-outline-primary nav-item nav-link" type="submit">Snapshot (beta)</button>
  </form>
  <form class="form-inline" action="<?php echo url_for('/admin/lab_search.php');?>" method="POST">
    <input class="form-control mr-sm-2" type="search" placeholder="Search users" name="search">
    <button class="btn btn-sm btn-outline-primary my-2 my-sm-0" type="submit" name="submit-search">Search</button>
  </form>
</nav>
