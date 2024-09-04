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
<h2>Contact Us</h2>
<ol>
<li>Home</li>
<li>Contact Us</li>
</ol>
</div>
</div>
</div>
</div>
</section>


<!-- ====================================CONTACT>>>START==================================== -->
<section id="contact" class="_mn_uy_we">
<div class="container">
<div class="row">
<div class="col-12">
<div class="_hg_we_fe">
<h2>Get<span>In Touch</span></h2>
</div>
</div>
</div>

<div class="row">
<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
<div class="_cd_er_we_zs">
<ol>
<li>OUR OFFICE LOCATION
<p>#405, Lan Streen, Los Vegas, USA</p>
</li>
</ol>
</div>

<div class="_cd_er_we_zs _nd_er_io">
<ol>
<li>OUR CONTACT NUMBER
<p>+91 9751791203</p>
</li>
</ol>
</div>

<div class="_cd_er_we_zs _nd_er">
<ol>
<li>OUR CONTACT E-MAIL
<p>info@lawyers.com</p>
</li>
</ol>
</div>
</div>

<div class="col-lg-8 col-md-6 col-sm-6 col-xs-12">
<h3 class="_lk_iu_ew">Interested in discussing?</h3>
<div class="row">
<div class="col-lg-6 col-12">
<div class="form-group">
<label for="name">Name <small>*</small></label>
<input id="name" name="name" class="form-control _ge_de_ol" type="text" placeholder="Enter Name" required="" aria-required="true">
</div>
</div>

<div class="col-lg-6 col-12">
<div class="form-group">
<label for="name">Email <small>*</small></label>
<input id="email" name="email" class="form-control _ge_de_ol" type="text" placeholder="Enter Email" required="" aria-required="true">
</div>
</div>

<div class="col-lg-6 col-12">
<div class="form-group">
<label for="name">Subject <small>*</small></label>
<input id="subject" name="subject" class="form-control _ge_de_ol" type="text" placeholder="Enter Subject" required="" aria-required="true">
</div>
</div>

<div class="col-lg-6 col-12">
<div class="form-group">
<label for="name">Phone <small>*</small></label>
<input id="phone" name="phone" class="form-control _ge_de_ol" type="text" placeholder="phone number" required="" aria-required="true">
</div>
</div>

<div class="col-12">
<div class="form-group">
<label for="message">Message</label>
<textarea id="message" name="message" class="form-control required" rows="5" placeholder="Enter Message" aria-required="true"></textarea>
</div>
</div>

<div class="col-12">
<div class="btn-02">
<a href="#"><span>Submit</span></a>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

<section class="_lo_bn_cs_we">

<iframe style="width:100%" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d28961.521203605134!2d67.0212917!3d24.8573544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1679479608307!5m2!1sen!2s" height="450" frameborder="0" allowfullscreen=""></iframe>

</section>
<!-- ====================================CONTACT>>>END==================================== -->

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