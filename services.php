<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet                    ">
    <link href="assets/css/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/css/layers.css" rel="stylesheet">
    <link href="assets/css/expert.css" rel="stylesheet">

    <title>Lawyers</title>

<style>
      
nav .logo h1 {
  font-size: 30px;
  font-weight: 450;
  color: black;
  text-transform: uppercase;
  letter-spacing: 1px;
  position: relative;
  padding: 0 0 0 40px;
  z-index: 8; 
}

nav .logo h1 a{
  text-decoration: none;
  color: black;
}

nav .logo h1::before {
  position: absolute;
  content: "";
  background: url(AdminPanel/images/law-logo-white.png);
  top: 0;
  left: 0;
  width: 30px;
  height: 30px;
  background-repeat: no-repeat;
  background-position: left;
  z-index: 7; 
}

nav .logo h1::after {
  position: absolute;
  content: "";
  width: 145px;
  height: 5px;
  background: white;
  left: 43px;
  /* transform: rotate(8deg); */
  top: 16px; 
}

</style>

</head>
<body>
  
<!-- ===========================================NAVBAR>>>START=========================================== -->
<?php include "navbar.php"; ?>
<!-- ===========================================NAVBAR>>>END=========================================== -->

<section class="_cd_er_aq">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="_cd_er_aa">
          <h2>Services</h2>
          <ol>
            <li>Home</li>
            <li>Services</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="services" class="_vd_yt_re_wq">
<div class="container">
<div class="row">
  <div class="col-12">
    <div class="_hg_we_fe">
      <h2>Our <span>Services</span></h2>
    </div>
  </div>
</div>

<div class="row _ma_ol_lk">

<?php
include "connection.php";

$fetchalldeparts = mysqli_query($connect,"SELECT * FROM department");

while($data = mysqli_fetch_assoc($fetchalldeparts)){
?>
<div class="col-lg-3 col-md-4 col-sm-6 col-12">
  <div class="_ne_ol_vd_pl">
    <a href="detail.php?depart_name=<?php echo $data['D_Name'] ?>" style="background-image:url(AdminPanel/LawyersImages/DepartImages/<?php echo $data['D_Image'] ?>);" class="_ne_ol_vd_pr"></a>
    <a href="detail.php?depart_name=<?php echo $data['D_Name'] ?>"><h2><?php echo $data['D_Name'] ?></h2></a>       
  </div>
</div>
<?php } ?>
</div>
</div>
</section>

<!-- ======================================CALCULATION>>>START====================================== -->
<section class="_ng_cs_we_rw">
<div class="container">
<div class="row">
<div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
  <div class="_lk_bg_cd">
    <img src="assets/images/development.png">
    <div style="color:#fff;font-size:20px;" class="counting" data-count="10">0</div>
    <h5>Our Departments</h5>
  </div>
</div>

<div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
  <div class="_lk_bg_cd">
    <img src="assets/images/designing.png">
    <div style="color:#fff;font-size:20px;" class="counting" data-count="12">0</div>
    <h5>Our Lawyers</h5>
  </div>
</div>

<div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
  <div class="_lk_bg_cd">
    <img src="assets/images/erp.png">
    <div style="color:#fff;font-size:20px;" class="counting" data-count="250">0</div>
    <h5>Cases Won</h5>
  </div>
</div>

<div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
  <div class="_lk_bg_cd">
    <img src="assets/images/ecomerce.png">
    <div style="color:#fff;font-size:20px;" class="counting" data-count="6">0</div>
    <h5>Booked Lawyers</h5>
  </div>
</div>
</div>
</div>
</section>
<!-- ======================================CALCULATION>>>END====================================== -->

<section class="_cd_er_ab">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="_hg_we_fe">
          <h2>Why Choose <span>US</span></h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-6 col-12">
        <div class="_cd_er_ac">
          <div class="_cd_er_ad">
            <ol><li><i class="fa fa-briefcase"></i></li></ol>
            <b>Case Investigation</b>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
            Molestias non nulla placeat, odio.</p>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-3 col-sm-6 col-12">
        <div class="_cd_er_ac">
          <div class="_cd_er_ad">
            <ol><li><i class="fa fa-certificate"></i></li></ol>
            <b>Cases Fighting</b>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
            Molestias non nulla placeat, odio.</p>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-3 col-sm-6 col-12">
        <div class="_cd_er_ac">
          <div class="_cd_er_ad">
            <ol><li><i class="fa fa-pencil-square-o"></i></li></ol>
            <b>Legal Analysis</b>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
            Molestias non nulla placeat, odio.</p>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-3 col-sm-6 col-12">
        <div class="_cd_er_ac">
          <div class="_cd_er_ad">
            <ol><li><i class="fa fa-question"></i></li></ol>
            <b>Legal Help</b>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
            Molestias non nulla placeat, odio.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ====================================FOOTER>>>STARTED==================================== -->
<?php include "footer.php"; ?>
<!-- ====================================FOOTER>>>END==================================== -->