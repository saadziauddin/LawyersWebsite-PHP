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
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/modal.css">

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

<!-- Navbar Start -->
<?php include "navbar.php"; ?>
<!-- Navbar End -->

<!-- Shop Detail Start -->
<div class="container-fluid pb-5">
<div class="row px-xl-5">

<?php 
if(isset($_GET['depart_name'])){
include "connection.php";
$depart_name = $_GET['depart_name'];

$fetchDepartWiseData = mysqli_query($connect,"SELECT * FROM lawyer WHERE Department ='$depart_name'");
while($data = mysqli_fetch_assoc($fetchDepartWiseData)){
?>

<div class="col-md-4 ml-5 mb-3" >
<div class="carousel-item active">
<img style="height: 550px; width: 400px;" src="AdminPanel/LawyersImages/<?php echo $data['Image'] ?>" alt="Image">
</div>
</div>

<div class="col-md-7 h-auto mb-40">            

<div class="h-100 bg-white p-10 ml-5 mt-3">  
<h3><?php echo $data['Name'] ?></h3>

<div class="d-flex mb-3">
<div class="text-warning mr-2">
    <small class="fa fa-star"></small>
    <small class="fa fa-star"></small>
    <small class="fa fa-star"></small>
    <small class="fa fa-star-half-alt"></small>
    <small class="fa fa-star"></small>
</div>
<small class="pt-1">(99 Reviews)</small>
</div>

<h3 class="font-weight-semi-bold mb-4"><?php echo $data['Department'] ?> Lawyer</h3>
<p class="mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>

<div class="d-flex mb-1">
<strong class="text-dark mr-1">Contact:</strong>
<p><?php echo $data['Contact'] ?></p>
</div>

<div class="d-flex mb-2">
<strong class="text-dark mr-1">Location:</strong>
<p><?php echo $data['City'] ?>, <?php echo $data['Country'] ?></p>                    
</div>

<div class="d-flex align-items-center mb-4 pt-2">
            
<?php
if(isset($_SESSION['name'])){
?>
<button type="button" class="btn btn-dark px-3" data-toggle="modal" data-target="#exampleModalCenter_<?php echo $data['ID'] ?>"><i class="fa fa-calendar mr-2"></i>Book An Appointment</button>
<?php 
}else{
?>
<a class="btn btn-dark px-3" href="RegisterLogin/login.php"><i class="fa fa-calendar mr-2"></i>Book An Appointment</a>
<?php } ?>
</div>

<div class="d-flex pt-2">
    <strong class="text-dark mr-2">Share on:</strong>
    <div class="d-inline-flex">
        <a class="text-dark px-2" href="">
            <i class="fa fa-facebook"></i>
        </a>
        <a class="text-dark px-2" href="">
            <i class="fa fa-twitter"></i>
        </a>
        <a class="text-dark px-2" href="">
            <i class="fa fa-linkedin"></i>
        </a>
        <a class="text-dark px-2" href="">
            <i class="fa fa-pinterest"></i>
        </a>
    </div>
</div>

</div>
</form>
</div>


<div class="modal fade" id="exampleModalCenter_<?php echo $data['ID'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">

<div class="modal-header">
<button type="button" class="close d-flex align-items-center justify-content-center" data-dismiss="modal" aria-label="Close">
<i class="fa fa-rectangle-xmark"></i>
<!-- <span aria-hidden="true" class="ion-ios-close"></span> -->
</button>
</div>

<div class="row no-gutters">
<div class="col-md-6 d-flex">
<div class="modal-body p-5 img d-flex text-center d-flex align-items-center" style="background-image: url(assets/images/bg-1.jpg);">
</div>
</div>
<div class="col-md-6 d-flex">
<div class="modal-body p-4 p-md-5 d-flex align-items-center bg-dark">
<div class="text w-100 py-3">

<span class="subheading text-white">Booking an Appointment</span>
<h3 class="mb-4 heading text-white">Free Consultation</h3>

<form action="coding.php" method="POST" class="contact-form">

<div class="form-group mb-3">
<input type="text" class="form-control" name="name" placeholder="Enter Your Full Name" required>
</div>

<div class="form-group mb-3">
<input type="email" class="form-control" name="email" placeholder="Enter Your Email" required>
</div>

<div class="form-group mb-3">
<input type="number" class="form-control" name="contact" placeholder="Enter Your Contact Number" required>
</div>

<div class="form-group mb-3">
<input type="hidden" class="form-control" name="l_id" required value="<?php echo $data['ID'] ?>">
</div>

<div class="form-group mb-3">
<input type="hidden" class="form-control" name="l_name" required value="<?php echo $data['Name'] ?>">
</div>

<div class="form-group">
<input type="text" class="form-control" name="subject" placeholder="Enter Subject of Your Case" required>
</div>

<div class="form-group mb-3">
<input type="date" class="form-control" name="date" placeholder="Desired appointment date" required>
</div>

<div class="form-group mb-3">
<input type="time" class="form-control" name="time" placeholder="Desired appointment time" required>
</div>

<div class="form-group mb-3">
    <input type="text" class="form-control" name="depart" value="<?php echo $depart_name ?>">
</div>

<div class="form-group mb-3">
<input type="text" class="form-control" name="meeting" placeholder="Enter Your Meeting Place" required>
</div>

<div class="form-group">
<textarea cols="30" rows="5" class="form-control" name="description" placeholder="Tell us a bit about what you'd like to discuss during your appointment" required></textarea>
</div>

<div class="form-group">
<button type="submit" class="form-control btn btn-info rounded submit px-3" name="book_appointment">Book a Slot</button>
</div>

</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<?php } } ?>            
</div>

<div class="row px-xl-5 mt-5">
    <div class="col">
        <div class="bg-light p-30">
            <div class="nav nav-tabs mb-4">
                <a class="nav-item nav-link text-dark active" data-toggle="tab" href="#tab-pane-1">Why choose me</a>
                <a class="nav-item nav-link text-dark" data-toggle="tab" href="#tab-pane-2">Information</a>
                <a class="nav-item nav-link text-dark" data-toggle="tab" href="#tab-pane-3">Reviews (0)</a>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="tab-pane-1">
                    <h4 class="mb-3">Why choose me</h4>
                    <p>Eos no lorem eirmod diam diam, eos elitr et gubergren diam sea. Consetetur vero aliquyam invidunt duo dolores et duo sit. Vero diam ea vero et dolore rebum, dolor rebum eirmod consetetur invidunt sed sed et, lorem duo et eos elitr, sadipscing kasd ipsum rebum diam. Dolore diam stet rebum sed tempor kasd eirmod. Takimata kasd ipsum accusam sadipscing, eos dolores sit no ut diam consetetur duo justo est, sit sanctus diam tempor aliquyam eirmod nonumy rebum dolor accusam, ipsum kasd eos consetetur at sit rebum, diam kasd invidunt tempor lorem, ipsum lorem elitr sanctus eirmod takimata dolor ea invidunt.</p>
                    <p>Dolore magna est eirmod sanctus dolor, amet diam et eirmod et ipsum. Amet dolore tempor consetetur sed lorem dolor sit lorem tempor. Gubergren amet amet labore sadipscing clita clita diam clita. Sea amet et sed ipsum lorem elitr et, amet et labore voluptua sit rebum. Ea erat sed et diam takimata sed justo. Magna takimata justo et amet magna et.</p>
                </div>
                <div class="tab-pane fade" id="tab-pane-2">
                    <h4 class="mb-3">Additional Information</h4>
                    <p>Eos no lorem eirmod diam diam, eos elitr et gubergren diam sea. Consetetur vero aliquyam invidunt duo dolores et duo sit. Vero diam ea vero et dolore rebum, dolor rebum eirmod consetetur invidunt sed sed et, lorem duo et eos elitr, sadipscing kasd ipsum rebum diam. Dolore diam stet rebum sed tempor kasd eirmod. Takimata kasd ipsum accusam sadipscing, eos dolores sit no ut diam consetetur duo justo est, sit sanctus diam tempor aliquyam eirmod nonumy rebum dolor accusam, ipsum kasd eos consetetur at sit rebum, diam kasd invidunt tempor lorem, ipsum lorem elitr sanctus eirmod takimata dolor ea invidunt.</p>
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item px-0">
                                    Sit erat duo lorem duo ea consetetur, et eirmod takimata.
                                </li>
                                <li class="list-group-item px-0">
                                    Amet kasd gubergren sit sanctus et lorem eos sadipscing at.
                                </li>
                                <li class="list-group-item px-0">
                                    Duo amet accusam eirmod nonumy stet et et stet eirmod.
                                </li>
                                <li class="list-group-item px-0">
                                    Takimata ea clita labore amet ipsum erat justo voluptua. Nonumy.
                                </li>
                              </ul> 
                        </div>
                        <div class="col-md-6">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item px-0">
                                    Sit erat duo lorem duo ea consetetur, et eirmod takimata.
                                </li>
                                <li class="list-group-item px-0">
                                    Amet kasd gubergren sit sanctus et lorem eos sadipscing at.
                                </li>
                                <li class="list-group-item px-0">
                                    Duo amet accusam eirmod nonumy stet et et stet eirmod.
                                </li>
                                <li class="list-group-item px-0">
                                    Takimata ea clita labore amet ipsum erat justo voluptua. Nonumy.
                                </li>
                              </ul> 
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="tab-pane-3">
                    <div class="row">

                        <div class="col-md-6">
                            <h4 class="mb-4">Leave a review</h4>
                            <small>Your email address will not be published. Required fields are marked *</small>
                            <div class="d-flex my-3">
                                <p class="mb-0 mr-2">Your Rating * :</p>
                                <div class="text-warning">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half"></i>
                                    </div>
                            </div>
                            <form>

                                <div class="form-group">
                                    <label for="name">Your Name *</label>
                                    <input type="text" class="form-control" id="name">
                                </div>
                                
                                <div class="form-group">
                                    <label for="email">Your Email *</label>
                                    <input type="email" class="form-control" id="email">
                                </div>
                                
                                <div class="form-group">
                                    <label for="message">Your Review *</label>
                                    <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
                                </div>

                                <div class="form-group mb-0">
                                    <input type="submit" value="Leave Your Review" class="btn btn-dark px-3">
                                </div>
                            </form>
                        </div>

                        <div class="col-md-6">
                            <h4 class="mb-4">1 review for "Lawyers"</h4>

                            <div class="media mb-4">
                                <img src="assets/images/team-04.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                                <div class="media-body">
                                    <h6>John Doe<small> - <i>01 Jan 2045</i></small></h6>
                                    <div class="text-warning mb-2">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half"></i>
                                    </div>
                                    <p>Diam amet duo labore stet elitr ea clita ipsum, tempor labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.</p>
                                </div>
                            </div>

                            <div class="media mb-4">
                                <img src="assets/images/team-01.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                                <div class="media-body">
                                    <h6>John Doe<small> - <i>01 Jan 2045</i></small></h6>
                                    <div class="text-warning mb-2">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half"></i>
                                    </div>
                                    <p>Diam amet duo labore stet elitr ea clita ipsum, tempor labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.</p>
                                </div>
                            </div>

                            <div class="media mb-4">
                                <img src="assets/images/team-05.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                                <div class="media-body">
                                    <h6>John Doe<small> - <i>01 Jan 2045</i></small></h6>
                                    <div class="text-warning mb-2">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half"></i>
                                    </div>
                                    <p>Diam amet duo labore stet elitr ea clita ipsum, tempor labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.</p>
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
<!-- Shop Detail End -->

<!-- Footer Start -->
<?php include "footer.php"; ?>
<!-- Footer End -->

<!-- Back to Top -->
<!-- <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a> -->


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

<script nonce="a2f17424-ec6c-4197-a2f9-af37daef04bb">(function(w,d){!function(di,dj,dk,dl){di[dk]=di[dk]||{};di[dk].executed=[];di.zaraz={deferred:[],listeners:[]};di.zaraz.q=[];di.zaraz._f=function(dm){return function(){var dn=Array.prototype.slice.call(arguments);di.zaraz.q.push({m:dm,a:dn})}};for(const dp of["track","set","debug"])di.zaraz[dp]=di.zaraz._f(dp);di.zaraz.init=()=>{var dq=dj.getElementsByTagName(dl)[0],dr=dj.createElement(dl),ds=dj.getElementsByTagName("title")[0];ds&&(di[dk].t=dj.getElementsByTagName("title")[0].text);di[dk].x=Math.random();di[dk].w=di.screen.width;di[dk].h=di.screen.height;di[dk].j=di.innerHeight;di[dk].e=di.innerWidth;di[dk].l=di.location.href;di[dk].r=dj.referrer;di[dk].k=di.screen.colorDepth;di[dk].n=dj.characterSet;di[dk].o=(new Date).getTimezoneOffset();if(di.dataLayer)for(const dw of Object.entries(Object.entries(dataLayer).reduce(((dx,dy)=>({...dx[1],...dy[1]})))))zaraz.set(dw[0],dw[1],{scope:"page"});di[dk].q=[];for(;di.zaraz.q.length;){const dz=di.zaraz.q.shift();di[dk].q.push(dz)}dr.defer=!0;for(const dA of[localStorage,sessionStorage])Object.keys(dA||{}).filter((dC=>dC.startsWith("_zaraz_"))).forEach((dB=>{try{di[dk]["z_"+dB.slice(7)]=JSON.parse(dA.getItem(dB))}catch{di[dk]["z_"+dB.slice(7)]=dA.getItem(dB)}}));dr.referrerPolicy="origin";dr.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(di[dk])));dq.parentNode.insertBefore(dr,dq)};["complete","interactive"].includes(dj.readyState)?zaraz.init():di.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);</script>

<script type="text/javascript" src="js/bootstrap/bootstrap-dropdown.js"></script>
<script>
     $(document).ready(function(){
        $('.dropdown-toggle').dropdown()
    });
</script>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/popper.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/main.js"></script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vb26e4fa9e5134444860be286fd8771851679335129114" integrity="sha512-M3hN/6cva/SjwrOtyXeUa5IuCT0sedyfT+jK/OV+s+D0RnzrTfwjwJHhd+wYfMm9HJSrZ1IKksOdddLuN6KOzw==" data-cf-beacon='{"rayId":"7af52bfd6a3f880d","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2023.3.0","si":100}' crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>