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
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/css/layers.css" rel="stylesheet">
    <link href="assets/css/expert.css" rel="stylesheet">

    <title>Lawyers</title>

<script>
const basicAutocomplete = document.querySelector('#search-autocomplete');
const data = ['One', 'Two', 'Three', 'Four', 'Five'];
const dataFilter = (value) => {
  return data.filter((item) => {
    return item.toLowerCase().startsWith(value.toLowerCase());
  });
};
new mdb.Autocomplete(basicAutocomplete, {
  filter: dataFilter
});
</script>

</head>
<body>

    <!-- ===========================================NAVBAR>>>START=========================================== -->
    <?php include "navbar.php"; ?>
    <!-- ===========================================NAVBAR>>>END=========================================== -->

    <!-- ===========================================SLIDER>>>START=========================================== -->
    <section class="_slider_01">
      <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
         <ol class="carousel-indicators">
          <li data-target="#carouselExampleFade" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleFade" data-slide-to="1"></li>
          <li data-target="#carouselExampleFade" data-slide-to="2"></li>
        </ol>
        
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="assets/images/slide1.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Software servicecompany With Smart Eye technology Capability propelled by Right Process, Tools and Experience.</h5>
              <div class="btn_01">
                <a href="validatepage.php?contact"><span>Contact Us</span></a>
                <!-- <a href="#"><span>Follow Us</span></a> -->
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <img src="assets/images/slide3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Software servicecompany With Smart Eye technology Capability propelled by Right Process, Tools and Experience.</h5>
              <div class="btn_01">
                <a href="validatepage.php?contact"><span>Contact Us</span></a>
                <!-- <a href="#"><span>Follow Us</span></a> -->
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <img src="assets/images/slide2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Software servicecompany With Smart Eye technology Capability propelled by Right Process, Tools and Experience.</h5>
              <div class="btn_01">
                <a href="validatepage.php?contact"><span>Contact Us</span></a>
                <!-- <a href="#"><span>Follow Us</span></a> -->
              </div>
            </div>
          </div>
        </div>
    </div>
    </section>

<!-- ===========================================SLIDER>>>END=========================================== -->

<!-- =========================================ABOUT US>>>START========================================= -->

    <section id="aboutus" class="_ab_er_we">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="_hg_we_fe">
              <h2>ABOUT <span>US</span></h2>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-8 col-12">
            <div class="_lk_fr_er">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis voluptatibus neque, assumenda maxime. Eaque libero unde corrupti deleniti maxime ratione doloremque suscipit perferendis aperiam labore debitis atque odit neque, possimus, aspernatur dicta nobis recusandae numquam provident porro, quam suscipit quibusdam. Commodi eum, optio quo.</p>

              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis voluptatibus neque, assumenda maxime. Eaque libero unde corrupti deleniti maxime ratione doloremque suscipit perferendis aperiam labore debitis atque odit neque, possimus, aspernatur dicta nobis recusandae numquam provident porro, quam suscipit quibusdam. Commodi eum, optio quo.</p>
              <div class="_kl_bv_xs">
                <ol>
                  <li><p>Deal Support</p></li>
                  <li><p>Online Consulting</p></li>
                  <li><p>Document preparation</p></li>
                </ol>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-12">
            <div class="_lk_rt_we">
              <img src="assets/images/img-01.jpg">
              <div class="_oi_yt_we">
                <div class="accordion" id="nu_kl">
                  <div class="card">
                    <div class="card-header" id="mo_yu">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#my-ss" aria-expanded="false" aria-controls="my-ss">
                           Best Case Strategy 
                        </button>
                      </h2>
                    </div>

                    <div id="my-ss" class="collapse" aria-labelledby="mo_yu" data-parent="#nu_kl">
                      <div class="card-body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis voluptatibus neque, assumenda maxime. Eaque libero unde corrupti deleniti maxime ratione doloremque suscipit perferendis aperiam labore debitis atque odit neque, possimus, aspernatur dicta nobis recusandae numquam provident porro, quam suscipit quibusdam. Commodi eum, optio quo.
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="mo_yu_a">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#my-ss_a" aria-expanded="false" aria-controls="my-ss_a">
                           Review your Case Documents 
                        </button>
                      </h2>
                    </div>
                    <div id="my-ss_a" class="collapse" aria-labelledby="mo_yu_a" data-parent="#nu_kl">
                      <div class="card-body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis voluptatibus neque, assumenda maxime. Eaque libero unde corrupti deleniti maxime ratione doloremque suscipit perferendis aperiam labore debitis atque odit neque, possimus, aspernatur dicta nobis recusandae numquam provident porro, quam suscipit quibusdam. Commodi eum, optio quo.
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="mo_yu_b">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#my-ss_b" aria-expanded="false" aria-controls="my-ss_b">
                           Fight for Justice 
                        </button>
                      </h2>
                    </div>
                    <div id="my-ss_b" class="collapse" aria-labelledby="mo_yu_b" data-parent="#nu_kl">
                      <div class="card-body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis voluptatibus neque, assumenda maxime. Eaque libero unde corrupti deleniti maxime ratione doloremque suscipit perferendis aperiam labore debitis atque odit neque, possimus, aspernatur dicta nobis recusandae numquam provident porro, quam suscipit quibusdam. Commodi eum, optio quo.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<!-- =========================================ABOUT US>>>END========================================= -->

<!-- ========================================SERVICESS>>>START======================================== -->

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
<!-- ========================================SERVICESS>>>END======================================== -->

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

<!-- ======================================TEAM>>>START====================================== -->
<section class="bg-02">
<div class="container">
<div class="row">

<div class="row">
<div class="col-12">
  <div class="_hg_we_fe">
    <h2>Meet<span>Our Lawyers</span></h2>
  </div>
</div>
</div>

<div class="main-team-card d-flex">

<?php
include "connection.php";

$fetchallLawyers = mysqli_query($connect,"SELECT * FROM lawyer");

while($data = mysqli_fetch_assoc($fetchallLawyers)){
?>

<div class="team-setup">
<div class="team-items">
<div class="team-user">
    <img style="height: 250px; width: 250px;" src="AdminPanel/LawyersImages/<?php echo $data['Image'] ?>">
</div>
<div class="team-user-social">
<a href="detail.php?depart_name=<?php echo $data['Department'] ?>" class="btn btn-dark btn-sm">View</a>
<!-- <ol>
      <li><i class="fa fa-facebook"></i></li>
      <li><i class="fa fa-twitter"></i></li>
      <li><i class="fa fa-instagram"></i></li>
      <li><i class="fa fa-skype"></i></li>
  </ol> -->
</div>
<div class="team-name">
  <h2><?php echo $data['Name'] ?></h2>
  <b><?php echo $data['Department'] ?> Lawyer</b>
  <h6><?php echo $data['City'] ?>, <?php echo $data['Country'] ?></h6>
</div>
</div>
</div>
<?php } ?>
</div>
</div>
</div>
</section>

<?php include"footer.php"; ?>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script>
  $(document).ready (function(){
    $('.menu-toggle').click(function(){
      $('.menu-toggle').toggleClass('active')
      $('.menu').toggleClass('active')
    })
  })
</script>
<script>
  $( () => {

    //On Scroll Functionality
    $(window).scroll( () => {
      var windowTop = $(window).scrollTop();
      windowTop > 50 ? $('.header-wrapper').addClass('og-hf') : $('.header-wrapper').removeClass('og-hf');
    });
  });
</script>
<script>
        $(document).ready(function() {
          var owl = $('.owl-carousel');
          owl.owlCarousel({
            items:3,
            loop: true,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 1000,
            autoplayHoverPause: true
          });
          $('.play').on('click', function() {
            owl.trigger('play.owl.autoplay', [1000])
          })
          $('.stop').on('click', function() {
            owl.trigger('stop.owl.autoplay')
          })
        })
      </script>
<script>
  $('.owl-carousel').owlCarousel({
      loop:true,
      margin:10,
      nav:true,
      responsive:{
          0:{
              items:1
          },
          600:{
              items:2
          },
          1000:{
              items:4
          }
      }
})
</script>
<script>
  $('.counting').each(function() {
    var $this = $(this),
    countTo = $this.attr('data-count');

  $({ countNum: $this.text()}).animate({
    countNum: countTo
    },

  {

  duration: 3000,
  easing:'linear',
  step: function() {
  $this.text(Math.floor(this.countNum));
},
  complete: function() {
  $this.text(this.countNum);
  //alert('finished');
}
});
});
</script>
<script type="text/javascript" src="js/bootstrap/bootstrap-dropdown.js"></script>
<script>
     $(document).ready(function(){
        $('.dropdown-toggle').dropdown()
    });
</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>