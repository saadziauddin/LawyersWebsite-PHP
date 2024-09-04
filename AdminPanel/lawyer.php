
<div class="container-scroller">

<?php include "navbar.php"; ?>

<div class="container-fluid page-body-wrapper">

<?php include "sidenavbar.php"; ?>

      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              Lawyer's Table
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Tables</a></li>
                <li class="breadcrumb-item active" aria-current="page">Lawyer's table</li>
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
                            <th>Lawyer Name</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Department</th>
                            <th>Contact</th>
                            <th>Address</th>
                            <th>City</th>
                            <th>Country</th>
                            <th>Image</th>
                            <th>Date of Registration</th>
                            <th>Actions</th>
                        </tr>
                      </thead>

<?php
include "../connection.php";
$fetchlawyer = mysqli_query($connect, 'SELECT * FROM lawyer');

while ($data = mysqli_fetch_Assoc($fetchlawyer)) {
?>

<tbody class="text-center">
<tr>
<td><?php echo $data['ID']; ?></td>
<td><?php echo $data['Name']; ?></td>
<td><?php echo $data['Email']; ?></td>
<td><?php echo $data['Password']; ?></td>
<td><?php echo $data['Department']; ?></td>
<td><?php echo $data['Contact']; ?></td>
<td><?php echo $data['Address']; ?></td>
<td><?php echo $data['City']; ?></td>
<td><?php echo $data['Country']; ?></td>
<td><?php echo $data['Image']; ?></td>
<td><?php echo $data['Date']; ?></td>

<td>
<a class="btn btn-dark btn-sm" href="../coding.php?update_lawyer=<?php echo $data['ID']; ?>">Update</a><br><br>
<a class="btn btn-outline-danger btn-sm" href="../coding.php?delete_lawyer=<?php echo $data['ID']; ?>">Delete</a>
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