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
          <h2>Lawyers</h2>
          <ol>
            <li>Home</li>
            <li>Lawyers</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
</section>

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
if(isset($_POST['searchdata'])){
$searchlawyer = $_POST['searchlawyer'];

$fetchLawyers = mysqli_query($connect,"SELECT * FROM lawyer WHERE Name LIKE '%$searchlawyer%' OR Department LIKE '%$searchlawyer%' OR City LIKE '%$searchlawyer%' OR Country LIKE '%$searchlawyer%'");

while($dataS = mysqli_fetch_assoc($fetchLawyers)){

?>

<div class="team-setup">
<div class="team-items">
<div class="team-user">
    <img class="text-center" style="height: 250px; width: 250px;" src="AdminPanel/LawyersImages/<?php echo $dataS['Image'] ?>">
</div>
<div class="team-user-social">
<a href="detail.php?depart_name=<?php echo $dataS['Department'] ?>" class="btn btn-dark btn-sm">View</a>
</div>
<div class="team-name">
  <h2><?php echo $dataS['Name'] ?></h2>
  <b><?php echo $dataS['Department'] ?> Lawyer</b>
  <h6><?php echo $dataS['City'] ?>, <?php echo $dataS['Country'] ?></h6>
</div>
</div>
</div>

<?php } }

else{
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
</div>
<div class="team-name">
  <h2><?php echo $data['Name'] ?></h2>
  <b><?php echo $data['Department'] ?> Lawyer</b>
  <h6><?php echo $data['City'] ?>, <?php echo $data['Country'] ?></h6>
</div>
</div>
</div>

<?php } } ?>

</div>

</div>
</div>
</section>


<!-- ====================================FOOTER>>>STARTED==================================== -->
<?php include "footer.php"; ?>
<!-- ====================================FOOTER>>>END==================================== -->