
<div class="container-scroller">

<?php include "navbar.php"; ?>

<div class="container-fluid page-body-wrapper">

<?php include "sidenavbar.php"; ?>

<div class="main-panel">
<div class="content-wrapper">
<div class="page-header">
<h3 class="page-title">
  Department table
</h3>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Tables</a></li>
    <li class="breadcrumb-item active" aria-current="page">Data table</li>
  </ol>
</nav>
</div>
<div class="card">
<div class="card-body">

<button type="submit" class="btn btn-dark mb-3" data-bs-toggle="modal" data-bs-target="#add_category">Add New Department</button>

<div class="row">
<div class="col-12">
<div class="table-responsive">
<table id="order-listing" class="table">
<thead class="text-center">
  <tr>
      <th>ID #</th>
      <th>Department</th>
      <th>Department Image</th>
      <th>Uploaded Date</th>
      <th>Actions</th>
  </tr>
</thead>

<?php
include "../connection.php";
$fetchdepart = mysqli_query($connect, 'SELECT * FROM department');

while ($data = mysqli_fetch_Assoc($fetchdepart)) {
?>
<tbody class="text-center">
<tr>
  <td><?php echo $data['ID']; ?></td>
  <td><?php echo $data['D_Name']; ?></td>
  <td><?php echo $data['D_Image']; ?></td>
  <td><?php echo $data['Uploaded_Date']; ?></td>
  <td>
    <a class="btn btn-dark btn-sm" href="../coding.php?update_depart=<?php echo $data['ID']; ?>">Update</a>
    <a class="btn btn-outline-danger btn-sm" href="../coding.php?delete_depart=<?php echo $data['ID']; ?>">Delete</a>
  </td>
</tr>
</tbody>

<?php } ?>

</table>
</div>
</div>
</div>

<?php
if (isset($_GET['update_depart'])) {
  include "../connection.php";
  $update = $_GET['update_depart'];
  $fetchalldeparts = mysqli_query($connect, "SELECT * FROM department WHERE ID = '$update' ");
  $data = mysqli_fetch_assoc($fetchalldeparts);
?>

<div class="container" style="width: 35%; ">
<form method="POST">
  <h2 class="text-center mt-3 mb-3">Update Department</h2>


  <div class="form-outline mb-3">
    <input type="hidden" id="form4Example1" class="form-control" name="id"> value="<?php echo $data['ID']; ?>" />
  </div>

  <div class="form-outline mb-3">
    <input type="text" id="form4Example1" class="form-control" placeholder="Department Name" name="d_name"> value="<?php echo $data['D_Name']; ?>" />
  </div>

  <div>
    <input class="form-control form-control-sm mb-3" id="formFileSm" type="file" name="upload">
  </div>

  <button type="submit" class="btn btn-primary btn-block" name="updatedepart">Update</button>
</form>
</div>
<?php  } 

if (isset($_POST['updatedepart'])) {
  include "../connection.php"; 
  $id = $_POST['id'];
  $d_name = $_POST['d_name'];

  mysqli_query($connect, " UPDATE department SET D_Name='$d_name' WHERE ID='$id' ");

  header('location:AdminPanel/validatepage.php?depart');
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
</div>
<!-- container-scroller -->

<!-- Department Modal -->
<div class="modal fade" id="add_category" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
<form action="../coding.php" method="POST" enctype="multipart/form-data">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">Add New Department</h5>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>

<div class="modal-body">

<div class="input-group mb-3">
<input type="text" class="form-control" name="depart" placeholder="Department Name" required>
</div>

<div class="">
<input class="form-control form-control-sm" id="formFileSm" type="file" name="upload_depart">
</div>

</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
<button type="submit" class="btn btn-dark" name="add_depart">Save changes</button>
</div>
</div>
</form>
</div>
</div>