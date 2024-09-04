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
    <link href="assets/css/edit.css" rel="stylesheet">
    <title>Lawyers</title>
   
</head>
<body>

<div class="container">
<div class="row gutters">
<?php
include "connection.php";
if (isset($_GET['customer_id'])) {
	$customer = $_GET['customer_id'];
	$edit = mysqli_query($connect, "SELECT * FROM customer WHERE ID = '$customer' ");
	while ($data = mysqli_fetch_assoc($edit)) {
?>
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
<div class="card h-100">
	<div class="card-body">
		<div class="account-settings">
			<div class="user-profile">
				<div class="user-avatar text-center">
					<img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Maxwell Admin">
				</div>
				<h5 class="user-name mb-3 text-center"><?php echo $data['Name']; ?></h5>
				<h6 class="user-email mb-1 text-center"><b>Email:&nbsp;&nbsp;</b><?php echo $data['Email']; ?></h6>
				<h6 class="user-email mb-1 text-center"><b>Contact:&nbsp;&nbsp;</b><?php echo $data['Contact']; ?></h6>
				<h6 class="user-email mb-3 text-center"><b>Password:&nbsp;&nbsp;</b><?php echo $data['Password']; ?></h6>
				<h6 class="text-center"><b>Address:&nbsp;&nbsp;</b><?php echo $data['Address']; ?> <br> <b>Location:</b>&nbsp;&nbsp;<?php echo $data['City']; ?>, <?php echo $data['Country']; ?></h6>
			</div>
			<div class="about">
				<h5>About</h5>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
				<a href="?edit_customer=<?php echo $data['ID'] ?>" name="submit" class="btn btn-dark btn-sm">Edit Profile</a>
			</div>
		</div>
	</div>
</div>
</div>
<?php } } ?>
</div>
</div>

<?php 
	include "connection.php";
	if (isset($_GET['edit_customer'])) {
		$update = $_GET['edit_customer'];
		$editcustomer = mysqli_query($connect, "SELECT * FROM customer WHERE ID = '$update' ");
		$editdata = mysqli_fetch_assoc($editcustomer);
?>
<div class="container">
<form method="POST">
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
<div class="card h-100">
	<div class="card-body">
		<div class="row gutters">

			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<h5 class="mb-4 text-dark text-center">Edit Personal Details</h5>
			</div>
			
			<input type="hidden" class="form-control" name="id" value="<?php echo $editdata['ID']; ?>">

			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label>Full Name</label>
					<input type="text" class="form-control" name="name" value="<?php echo $editdata['Name']; ?>" required>
				</div>
			</div>

			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label>Email</label>
					<input type="email" class="form-control" name="email" value="<?php echo $editdata['Email']; ?>" required>
				</div>
			</div>

			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label>Phone</label>
					<input type="number" class="form-control" name="contact" value="<?php echo $editdata['Contact']; ?>" required>
				</div>
			</div>

			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label>Address</label>
					<input type="text" class="form-control" name="address" value="<?php echo $editdata['Address']; ?>" required>
				</div>
			</div>
		</div>

		<div class="row gutters">

			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label>City</label>
					<input type="text" class="form-control" name="city" value="<?php echo $editdata['City']; ?>" required>
				</div>
			</div>

			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label>Country</label>
					<input type="text" class="form-control" name="country" value="<?php echo $editdata['Country']; ?>" required>
				</div>
			</div>

			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label>Password</label>
					<input type="password" class="form-control" name="password" placeholder="Enter New Password" required>
				</div>
			</div>

			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label>Confirm Password</label>
					<input type="password" class="form-control" name="c_password" placeholder="Confirm New Password" required>
				</div>
			</div>
		</div>

		<div class="row gutters">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="text-right">
					<a href="index.php" type="button" id="submit" name="submit" class="btn btn-secondary">Cancel</a>
					<button type="submit" name="edit_profile" class="btn btn-dark">Update & Revert</button>
				</div>
			</div>
		</div>

	</div>
</div>
</div>
</form>
<?php } 

if (isset($_POST['edit_profile'])) {
  include "connection.php";
  $id = $_POST['id'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $contact = $_POST['contact'];
  $address = $_POST['address'];
  $city = $_POST['city'];
  $country = $_POST['country'];
  $password = $_POST['password'];
  $c_password = $_POST['c_password'];

  if ($password == $c_password) {

		mysqli_query($connect, " UPDATE customer SET Name='$name', Email='$email', Contact='$contact', Address='$address', City='$city', Country='$country', Password='$password' WHERE ID='$id' ");

		echo "<script>
		        alert('Profile Updated Successfully!');
		        location.assign('index.php');
		      </script>";
  }else{
		echo "<script>
		        alert('Password & Confirm Password Must Match!');
		      </script>";  	
  }


}
?>
</div>

</body>
</html>