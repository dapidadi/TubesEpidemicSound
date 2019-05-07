<!DOCTYPE html>
<html>
<head>
    <title>Epidemic Sound</title>
<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-grid.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-grid.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-reboot.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-reboot.min.css') ?>">
<body>
  <style>
    .dot{
      height: 25px;
  width: 25px;
  background-color: red;
  border-radius: 50%;
  display: inline-block;
    }

    .warnanavbar{
      background-color: #d3d3d3;
    }

  </style>
<!-- Navigation Bar -->

<nav class="navbar fixed-top navbar-light warnanavbar navbar-expand-lg">
  <div class="container">
    <a class="navbar-brand" href="<?php echo base_url('index.php/home') ?>">
          <img src="<?php echo base_url('assets/img/logored.png') ?>">
        </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ">
        <li>
          <a class="nav-link" href="<?php echo site_url('welcome/browse') ?>">Browse
              </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('welcome/album') ?>">Album</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('sfx2') ?>">SFX</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Latest</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Account</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="<?php echo site_url('welcome/myaccount') ?>">My Account</a>
            <a class="dropdown-item" href="#">My Music</a>
            <a class="dropdown-item" href="<?php echo site_url('welcome/logout') ?>">Log Out</a>
          </div>
      </ul>
    </div>
  </div>
</nav>

<!-- END OF Navigation Bar -->

<!-- Page Content carousel-->
<div id="carousel1" class="carousel slide" data-ride="carousel" align="center" style="padding-top: 100px">

  <ul class="carousel-indicators">
    <li data-target="#carousel1" data-slide-to="0" class="active"></li>
    <li data-target="#carousel1" data-slide-to="1"></li>
    <li data-target="#carousel1" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo base_url('assets/img/slide1.jpg') ?>" width="1100" height="350">
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url('assets/img/slide2.jpg') ?>" width="1100" height="350">
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url('assets/img/slide3.jpg') ?>" width="1100" height="350">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#carousel1" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#carousel1" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<br>


<!-- Page Content list song-->
<div class="container">
  <h3>Staff Picks</h3>
  <table class="table">
  <thead>
    <tr>
      <th scope="col"> </th>
      <th scope="col">Title</th>
      <th scope="col">Genre</th>
      <th scope="col">Category</th>
      <th scope="col">BPM</th>
      <th scope="col">Energy</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><span class="dot"></span></th>
      <td>Wait Till the Summer</td>
      <td>2010s Pop</td>
      <td>Hopeful</td>
      <td>100</td>
      <td>Medium</td>
      <td><a href="#" data-toggle="tooltip" title="Add to Playlist">+</a></td>
    </tr>
    <tr>
      <th scope="row"><span class="dot"></span></th>
      <td>Wait Till the Summer</td>
      <td>2010s Pop</td>
      <td>Hopeful</td>
      <td>100</td>
      <td>Medium</td>
      <td><a href="#" data-toggle="tooltip" title="Add to Playlist">+</a></td>
    </tr>
    <tr>
      <th scope="row"><span class="dot"></span></th>
      <td>Wait Till the Summer</td>
      <td>2010s Pop</td>
      <td>Hopeful</td>
      <td>100</td>
      <td>Medium</td>
      <td><a href="#" data-toggle="tooltip" title="Add to Playlist">+</a></td>
    </tr>
    <tr>
      <th scope="row"><span class="dot"></span></th>
      <td>Wait Till the Summer</td>
      <td>2010s Pop</td>
      <td>Hopeful</td>
      <td>100</td>
      <td>Medium</td>
      <td><a href="#" data-toggle="tooltip" title="Add to Playlist">+</a></td>
    </tr>
    <tr>
      <th scope="row"><span class="dot"></span></th>
      <td>Wait Till the Summer</td>
      <td>2010s Pop</td>
      <td>Hopeful</td>
      <td>100</td>
      <td>Medium</td>
      <td><a href="#" data-toggle="tooltip" title="Add to Playlist">+</a></td>
    </tr>
    <tr>
      <th scope="row"><span class="dot"></span></th>
      <td>Wait Till the Summer</td>
      <td>2010s Pop</td>
      <td>Hopeful</td>
      <td>100</td>
      <td>Medium</td>
      <td><a href="#" data-toggle="tooltip" title="Add to Playlist">+</a></td>
    </tr>
    <tr>
      <th scope="row"><span class="dot"></span></th>
      <td>Wait Till the Summer</td>
      <td>2010s Pop</td>
      <td>Hopeful</td>
      <td>100</td>
      <td>Medium</td>
      <td><a href="#" data-toggle="tooltip" title="Add to Playlist">+</a></td>
    </tr>
  </tbody>
  </table>

</div>



<!-- /.container -->


<!-- FOOTER -->

<section style="background-color: black">
  <br>
  <div class="container-fluid" style="color: white; text-align: left;">
    <div class="row">
    <div class="col">
    <ul style="list-style: none;">
      <li><img src="<?php echo base_url('assets/img/logo.png') ?>"></li>
    </ul>
    </div>
    <div class="col">
    <ul style="list-style: none;">
      <li>Browse</li>
      <li>Album</li>
      <li>Latest Track</li>
      <li>SFX</li>
    </ul>
    </div>
    <div class="col">
    <ul style="list-style: none;">
      <li>Newsletter</li>
      <li>Careers</li>
      <li>Press</li>
      <li><a href="<?php echo site_url('welcome/contact') ?>">Contact </a></li>
    </ul>
    </div>
    <div class="col">
    <ul style="list-style: none;">
      <li>In-Store Music</li>
      <li>Pricing</li>
      <li>Blog</li>
      <li>Composers</li>
      <li>Supports</li>
    </ul>
    </div>
    </div>
  </div>
</section>


<section style="background-color: black">
  <br>
  <div class="container-fluid" style="color: white;">
    <div class="row">
      <div class="col">
        <ul style="list-style: none;">
          logo
          logo 
          logo
        </ul>
      </div>
      <div class="col">
        <ul>
          Copyright &copy Epidemic Sound 2019<br>
          <a href="#">Privact Policy</a>
          <a href="#">General Terms</a>
          <a href="#">Cookie Policy</a>
        </ul>
      </div>
    </div>
  </div>
</section>


<!-- == JS FILE == -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</head>
</html>