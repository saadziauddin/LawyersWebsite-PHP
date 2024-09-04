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

<div class="m-4">
<table class="table table-borderless table-light">
<thead>
<tr>
<th>Lawyer ID</th>
<th>Lawyer Name</th>
<th>Case Subject</th>
<th>Appointment Date</th>
<th>Appointment Time</th>
<th>Lawyers Department</th>
<th>Meeting Place</th>
<th>Case Description</th>
<th>Status</th>
<th>Booking Date & Time</th>
</tr>
</thead>

<?php
include "connection.php";
$c_name = $_SESSION['name'];
$fetchappointment = mysqli_query($connect, "SELECT * FROM appointment WHERE C_Name = '$c_name'");

while ($data = mysqli_fetch_Assoc($fetchappointment)) {
?>

<tbody>
<tr>
<td><?php echo $data['Law_ID']; ?></td>
<td><?php echo $data['Law_Name']; ?></td>
<td><?php echo $data['Case_Subject']; ?></td>
<td><?php echo $data['App_Date']; ?></td>
<td><?php echo $data['App_Time']; ?></td>
<td><?php echo $data['Lawyer_Department']; ?></td>
<td><?php echo $data['Meeting_Place']; ?></td>
<td><?php echo $data['Description']; ?></td>
<td><?php echo $data['Status']; ?></td>
<td><?php echo $data['App_Booking_Date']; ?></td>
</tr>

</tbody>
<?php } ?>
</table>
</div>

</div>
</section>
<!-- ====================================FOOTER>>>STARTED==================================== -->
<?php include "footer.php"; ?>
<!-- ====================================FOOTER>>>END==================================== -->
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

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>