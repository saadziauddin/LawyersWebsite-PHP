
<div class="container-scroller">

<?php include "navbar.php"; ?>

<div class="container-fluid page-body-wrapper">

<?php include "sidenavbar.php"; ?>

<div class="main-panel">
<div class="content-wrapper">
<div class="page-header">
<h3 class="page-title">
Customer's Table
</h3>
<nav aria-label="breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="#">Tables</a></li>
<li class="breadcrumb-item active" aria-current="page">Customer's table</li>
</ol>
</nav>
</div>
<div class="card">
<div class="card-body">

<!-- <button type="submit" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#add_product">Add Product</button> -->


<div class="row mt-3">
<div class="col-12">
<div class="table-responsive">
<table id="order-listing" class="table">
<thead class="text-center">
  <tr>
      <th>S.no #</th>
      <th>Customer Name</th>
      <th>Email</th>
      <th>Password</th>
      <th>Contact</th>
      <th>Address</th>
      <th>City</th>
      <th>Country</th>
      <th>Date of Registration</th>
      <th>Actions</th>
  </tr>
</thead>

<?php
include "../connection.php";
$fetchcustomer = mysqli_query($connect, 'SELECT * FROM customer');

while ($data = mysqli_fetch_Assoc($fetchcustomer)) {
?>

<tbody class="text-center">
<tr>
<td><?php echo $data['ID']; ?></td>
<td><?php echo $data['Name']; ?></td>
<td><?php echo $data['Email']; ?></td>
<td><?php echo $data['Password']; ?></td>
<td><?php echo $data['Contact']; ?></td>
<td><?php echo $data['Address']; ?></td>
<td><?php echo $data['City']; ?></td>
<td><?php echo $data['Country']; ?></td>
<td><?php echo $data['Date']; ?></td>

<td>
<a class="btn btn-dark btn-sm" href="../coding.php?update_customer=<?php echo $data['ID']; ?>">Update</a>
<a class="btn btn-outline-danger btn-sm" href="../coding.php?delete_customer=<?php echo $data['ID']; ?>">Delete</a>
</td>

</tr>
</tbody>
<?php } ?>

</table>
</div>
</div>
</div>

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

<!-- Button trigger modal -->


<!-- Product Modal -->
<!-- <div class="modal fade" id="add_product" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
<form action="../coding.php" method="POST" enctype="multipart/form-data">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">Add New Product</h5>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>

<div class="modal-body">

<div class="input-group mb-3">
<input type="text" class="form-control" name="p_name" placeholder="Product Name" required>
</div>

<div class="input-group mb-3" required>
input type="text" class="form-control" name="p_category" placeholder="Product Category" required>
<select class="form-control" name="p_category">
<option value="">Select Category</option> -->

<?php 
// include "../connection.php";
// $fetchcategory = mysqli_query($connect,"SELECT DISTINCT C_Name FROM category");
// while($data = mysqli_fetch_assoc($fetchcategory)){
?>
<!-- <option value="<?php // echo $data['C_Name']; ?>"> <?php // echo $data['C_Name']; ?> </option> -->
<?php // } ?>

<!-- </select>
</div>

<div class="input-group mb-3">
<input type="text" class="form-control" name="p_qty" placeholder="Enter Quantity" required>
</div>

<div class="input-group mb-3">
<input type="text" class="form-control" name="p_price" placeholder="Enter Price" required>
</div>

<div class="input-group mb-3">
<input type="textarea" class="form-control" name="p_desc" placeholder="Enter Description" required>
</div>


<div class="">
<input class="form-control form-control-sm" id="formFileSm" type="file" name="upload">
</div>

</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
<button type="submit" class="btn btn-primary" name="add_product">Save changes</button>
</div>
</div>
</form>
</div>
</div> -->