<?php 
    session_start();
    if(!isset($_SESSION['name'])){
        header('location:logout.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Lawyers - Lawyer Panel</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/iconfonts/font-awesome/css/all.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/law-logo-white" />

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>

<?php include "navbar.php"; ?>

<!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="fas fa-fill-drip"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close fa fa-times"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles primary"></div>
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
      <!-- partial -->

<?php include "sidenavbar.php"; ?>

<div class="main-panel">
<div class="content-wrapper">
<div class="page-header">
<h3 class="page-title">
  My Appointment's
</h3>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Tables</a></li>
    <li class="breadcrumb-item active" aria-current="page">Appointment's table</li>
  </ol>
</nav>
</div>
<div class="card">
<div class="card-body">

<div class="row mt-3">
<div class="col-12">
<div class="table-responsive">
<table id="order-listing" class="table">
<thead class="text-center">
  <tr>
      <th>S.no #</th>
      <th>Name</th>
      <th>Email</th>
      <th>Contact No.</th>
      <th>Case Subject</th>
      <th>Date</th>
      <th>Time</th>
      <th>Meeting Place</th>
      <th>Description</th>
      <th>Status</th>
      <th>Booking Date & Time</th>
      <th>Actions</th>
  </tr>
</thead>

<?php
include "../connection.php";
$l_id = $_SESSION['id'];
$fetchappointment = mysqli_query($connect, "SELECT * FROM appointment WHERE Law_ID = '$l_id'");

while ($data = mysqli_fetch_Assoc($fetchappointment)) {
?>

<tbody class="text-center">
<tr>
<td><?php echo $data['ID']; ?></td>
<td><?php echo $data['C_Name']; ?></td>
<td><?php echo $data['C_Email']; ?></td>
<td><?php echo $data['C_Contact']; ?></td>
<td><?php echo $data['Case_Subject']; ?></td>
<td><?php echo $data['App_Date']; ?></td>
<td><?php echo $data['App_Time']; ?></td>
<td><?php echo $data['Meeting_Place']; ?></td>
<td><?php echo $data['Description']; ?></td>
<td><?php echo $data['Status']; ?></td>
<td><?php echo $data['App_Booking_Date']; ?></td>

<td>
<a class="btn btn-success btn-sm" href="?approve_app=<?php echo $data['ID']; ?>">Approve</a><br><br>
<a class="btn btn-outline-danger btn-sm" href="?reject_app=<?php echo $data['ID']; ?>">Reject</a>
</td>
</tr>
</tbody>
<?php } ?>

</table>
</div>
</div>
</div>

<?php 
if(isset($_GET['approve_app'])) {
  include "../connection.php";
   $id = $_GET['approve_app'];

  mysqli_query($connect, " UPDATE appointment SET Status ='Approved' WHERE ID='$id' ");

  echo "<script>
          alert('Appointment Approved Successfully!');
          location.assign('index.php');
        </script>";
}

if (isset($_GET['reject_app'])) {
  include "connection.php";
  $id = $_GET['reject_app'];
  mysqli_query($connect, " UPDATE appointment SET Status ='Rejected' WHERE ID='$id' ");

  echo "<script>
          alert('Appointment Rejected Successfully!');
          location.assign('index.php');
        </script>";
}
?>

</div>
</div>
</div>
<!-- content-wrapper ends -->

<?php include "footer.php"; ?>

</div>
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->

<!-- plugins:js -->
<script src="vendors/js/vendor.bundle.base.js"></script>
<script src="vendors/js/vendor.bundle.addons.js"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="js/off-canvas.js"></script>
<script src="js/hoverable-collapse.js"></script>
<script src="js/misc.js"></script>
<script src="js/settings.js"></script>
<script src="js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="js/dashboard.js"></script>
<!-- End custom js for this page-->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>