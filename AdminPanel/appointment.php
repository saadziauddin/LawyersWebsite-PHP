
<div class="container-scroller">

<?php include "navbar.php"; ?>

<div class="container-fluid page-body-wrapper">

<?php include "sidenavbar.php"; ?>

      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              Appointment's Table
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
                            <th>Customer Name</th>
                            <th>Customer Email</th>
                            <th>Customer Contact</th>
                            <th>Lawyer ID</th>
                            <th>Lawyer Name</th>
                            <th>Case Subject</th>
                            <th>Appointment Date</th>
                            <th>Appointment Time</th>
                            <th>Lawyer Department</th>
                            <th>Meeting Place</th>
                            <th>Case Description</th>
                            <th>Status</th>
                            <th>Booking Date & Time</th>
                            <th>Actions</th>
                        </tr>
                      </thead>

<?php
include "../connection.php";
$fetchappointment = mysqli_query($connect, 'SELECT * FROM appointment');

while ($data = mysqli_fetch_Assoc($fetchappointment)) {
?>

<tbody class="text-center">
<tr>
<td><?php echo $data['ID']; ?></td>
<td><?php echo $data['C_Name']; ?></td>
<td><?php echo $data['C_Email']; ?></td>
<td><?php echo $data['C_Contact']; ?></td>
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
<td>
<a class="btn btn-dark btn-sm" href="../coding.php?update_appointment=<?php echo $data['ID']; ?>">Update</a><br><br>
<a class="btn btn-outline-danger btn-sm" href="../coding.php?delete_appointment=<?php echo $data['ID']; ?>">Delete</a>
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