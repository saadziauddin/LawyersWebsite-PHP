<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Lawyers - Admin Panel</title>
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

<!-- Register - Login Code -->

<!-- Register Customers -->
<?php
include "connection.php";
if (isset($_POST['register'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $repeatpassword = $_POST['repeatpassword'];
  $contact = $_POST['contact'];
  $address = $_POST['address'];
  $city = $_POST['city'];
  $country = $_POST['country'];

  if ($password == $repeatpassword) {

    mysqli_query($connect, "INSERT INTO customer (Name,Email,Password,Contact,Address,City,Country) VALUES('$name','$email','$password','$contact','$address','$city','$country')"); 
    
     echo "<script>
            alert('Account Created Successfully');
            location.assign('RegisterLogin/login.php');
          </script>";
  }else{
    echo "<script>
            alert('Password and Repeat Password Must Match');
            location.assign('RegisterLogin/register.php')
          </script>";
 }
}
?>

<!-- Lawyers Registration Form -->
<?php
if (isset($_POST['lawyers_register'])) {

  $law_img = $_FILES['l_img']['name'];
  $law_size = $_FILES['l_img']['size'];
  $tmp_name = $_FILES['l_img']['tmp_name'];
  $extention = pathinfo($law_img,PATHINFO_EXTENSION);
  $destination = "AdminPanel/LawyersImages/".$law_img;

  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $repeatpassword = $_POST['repeatpassword'];
  $depart = $_POST['dept'];
  $contact = $_POST['contact'];
  $address = $_POST['address'];
  $city = $_POST['city'];
  $country = $_POST['country'];

  if ($password == $repeatpassword) {
   
    if ($law_size <= 3000000) {

    if ($extention == "jpg" OR $extention == "png" OR $extention == "jpeg") {

      if (move_uploaded_file($tmp_name,$destination)) {


       mysqli_query($connect, "INSERT INTO lawyer (Name,Email,Password,Department,Contact,Address,City,Country,Image) VALUES('$name','$email','$password','$depart','$contact','$address','$city','$country','$law_img')");

        echo "<script>
                alert('Lawyer Registered Successfully');
                location.assign('RegisterLogin/login.php');
        </script>";
        
      }else{
        echo "<script>
                alert('Picture Not Uploaded');
                location.assign('RegisterLogin/lawyersregister.php');
        </script>";
      }
    }else{
        echo "<script>
                alert('Picture Must Be in jpg, jpeg or png');
                location.assign('RegisterLogin/lawyersregister.php');
        </script>";
      }
  }else{
        echo "<script>
                alert('Picture Size Must Be Lass Than 3MB');
                location.assign('RegisterLogin/lawyersregister.php');
        </script>";
      }
  }else{
    echo "<script>
            alert('Password and Repeat Password Must Match');
            location.assign('RegisterLogin/lawyerregister.php')
          </script>";
    }
}
?>

<!-- Login Code -->
<?php
if (isset($_POST['login'])) {
  include "connection.php";
  $email = $_POST['email'];
  $password = $_POST['password'];

  $fetchCustomerData = mysqli_query($connect, "SELECT * FROM customer WHERE Email = '$email' AND Password = '$password' ");
  $fetchLawyerData = mysqli_query($connect, "SELECT * FROM lawyer WHERE Email = '$email' AND Password = '$password' ");
  $fetchAdminData = mysqli_query($connect, "SELECT * FROM admin WHERE email = '$email' AND password = '$password' ");


    // Lawyer Portion
  if ($isdataexist = mysqli_num_rows($fetchLawyerData) > 0) {
    while ($data = mysqli_fetch_Assoc($fetchLawyerData)) {
          session_start();
          $_SESSION['id'] = $data['ID'];
          $_SESSION['name'] = $data['Name'];
          $_SESSION['img'] = $data['Image'];
          header('location:LawyerPanel/index.php');
    }
  }

    // Admin Portion
  else if($isdataexist = mysqli_num_rows($fetchAdminData) > 0) {
      while ($data = mysqli_fetch_Assoc($fetchAdminData)) {
          session_start();
          $_SESSION['name'] = $data['name'];
          header('location:AdminPanel/validatepage.php?index');
    }
  }
    // Customer Portion
    else if($isdataexist = mysqli_num_rows($fetchCustomerData) > 0) {

        while ($data = mysqli_fetch_Assoc($fetchCustomerData)) {
            session_start();
            $_SESSION['id'] = $data['ID'];
            $_SESSION['name'] = $data['Name'];
            header('location:index.php');
      }
}else{
    echo "<script>
            alert('Account Not Exist!');
            location.assign('RegisterLogin/login.php')
          </script>";      
    } 
}
?>

<!-- Customer Deleting Code -->
<?php 
if(isset($_GET['delete_customer'])){
  include "connection.php";
  $deletecustomer = $_GET['delete_customer'];
  mysqli_query($connect, "DELETE FROM customer WHERE ID = '$deletecustomer'");
  echo "<script>
        alert ('Customer Deleted Successfully')
        </script>";
  header('location:AdminPanel/validatepage.php?customer');
}

// Customer Updating Code
if (isset($_GET['update_customer'])) {
  include "connection.php";
  $c_update = $_GET['update_customer'];
  $updatecustomer = mysqli_query($connect, "SELECT * FROM customer WHERE ID = '$c_update' ");
  $customerdata = mysqli_fetch_assoc($updatecustomer);
?>

<div class="container mt-5" style="width: 35%; ">
<form method="POST">
<h2 class="text-center mt-5 mb-4 text-uppercase">Update Customer</h2>

<div class="form-outline mb-3">
  <input type="hidden" id="form4Example1" class="form-control" name="id" value="<?php echo $customerdata['ID']; ?>" />
</div>

<div class="form-outline mb-3">
  <input type="text" id="form4Example1" class="form-control" name="c_name" value="<?php echo $customerdata['Name']; ?>" />
</div>

<div class="form-outline mb-3">
  <input type="email" id="form4Example1" class="form-control" name="c_email" value="<?php echo $customerdata['Email']; ?>" />
</div>

<div class="form-outline mb-3">
  <input type="password" id="form4Example1" class="form-control" name="password" value="<?php echo $customerdata['Password']; ?>" />
</div>

<div class="form-outline mb-3">
  <input type="number" id="form4Example1" class="form-control" name="contact" value="<?php echo $customerdata['Contact']; ?>" />
</div>

<div class="form-outline mb-3">
  <input type="text" id="form4Example1" class="form-control" name="address" value="<?php echo $customerdata['Address']; ?>" />
</div>

<div class="form-outline mb-3">
  <input type="text" id="form4Example1" class="form-control" name="city" value="<?php echo $customerdata['City']; ?>" />
</div>

<div class="form-outline mb-3">
  <input type="text" id="form4Example1" class="form-control" name="country" value="<?php echo $customerdata['Country']; ?>" />
</div>

<button type="submit" class="form-control btn btn-dark btn-block" name="update_customer">Save & Back</button>
</form>
</div>

<?php } 
if (isset($_POST['update_customer'])) {
  include "connection.php"; 
  $id = $_POST['id'];
  $c_name = $_POST['c_name'];
  $c_email = $_POST['c_email'];
  $password = $_POST['password'];
  $contact = $_POST['contact'];
  $address = $_POST['address'];
  $city = $_POST['city'];
  $country = $_POST['country'];

  mysqli_query($connect, " UPDATE customer SET Name='$c_name', Email='$c_email', Password='$password', Contact='$contact', Address='$address', City='$city', Country='$country' WHERE ID='$id' ");

  echo "<script>
          alert('Customer Updated Successfully');
            location.assign('AdminPanel/validatepage.php?customer');
        </script>";
}
?>

<!-- Lawyer Deleting Code -->
<?php
if(isset($_GET['delete_lawyer'])){
  include "connection.php";
  $deletelawyer = $_GET['delete_lawyer'];
  mysqli_query($connect, "DELETE FROM lawyer WHERE ID = '$deletelawyer'");
  echo "<script>
        alert ('Lawyer Deleted Successfully')
        </script>";
  header('location:AdminPanel/validatePage.php?lawyer');
}

// Lawyer Updating Code
if (isset($_GET['update_lawyer'])) {
  include "connection.php";
  $update = $_GET['update_lawyer'];
  $updatelawyer = mysqli_query($connect, "SELECT * FROM lawyer WHERE ID = '$update' ");
  $lawyerdata = mysqli_fetch_assoc($updatelawyer);
?>

<div class="container mt-5" style="width: 35%; ">
<form method="POST" enctype="multipart/form-data">
<h2 class="text-center mt-5 mb-4 text-uppercase">Update Lawyer</h2>

<div class="form-outline mb-3">
  <input type="number" id="form4Example1" class="form-control" name="id" value="<?php echo $lawyerdata['ID']; ?>" />
</div>

<div class="form-outline mb-3">
  <input type="text" id="form4Example1" class="form-control" name="l_name" value="<?php echo $lawyerdata['Name']; ?>" />
</div>

<div class="form-outline mb-3">
  <input type="text" id="form4Example1" class="form-control" name="l_email" value="<?php echo $lawyerdata['Email']; ?>" />
</div>

<div class="form-outline mb-3">
  <input type="text" id="form4Example1" class="form-control" name="l_password" value="<?php echo $lawyerdata['Password']; ?>" />
</div>

<div class="form-outline mb-3">
<select class="form-control" name="depart">
<option value="<?php echo $lawyerdata['Department']; ?>"><?php echo $lawyerdata['Department']; ?></option>

<?php 
  include "connection.php";
  $fetchdepart = mysqli_query($connect,"SELECT * FROM department");
  while($depart = mysqli_fetch_assoc($fetchdepart)){
?>

<option class="form-control" value="<?php echo $depart['D_Name'];?>"><?php echo $depart['D_Name'];?></option>

<?php } ?>
</select>
</div>

<div class="form-outline mb-3">
  <input type="text" id="form4Example1" class="form-control" name="contact" value="<?php echo $lawyerdata['Contact']; ?>" />
</div>

<div class="form-outline mb-3">
  <input type="text" id="form4Example1" class="form-control" name="address" value="<?php echo $lawyerdata['Address']; ?>" />
</div>

<div class="form-outline mb-3">
  <input type="text" id="form4Example1" class="form-control" name="city" value="<?php echo $lawyerdata['City']; ?>" />
</div>

<div class="form-outline mb-3">
  <input type="text" id="form4Example1" class="form-control" name="country" value="<?php echo $lawyerdata['Country']; ?>" />
</div>

<div>
  <input class="form-control form-control-sm mb-3" id="formFileSm" type="file" name="l_update" value="<?php echo $lawyerdata['Image'] ?>">
</div>

<button type="submit" class="form-control btn btn-dark btn-block" name="update_lawyer">Save & Back</button>
</form>
</div>

<?php } 

if (isset($_POST['update_lawyer'])) {
  include "connection.php";


  $l_img = $_FILES['l_update']['name'];
  $l_size = $_FILES['l_update']['size'];
  $tmp_name = $_FILES['l_update']['tmp_name'];
  $extention = pathinfo($l_img,PATHINFO_EXTENSION);
  $destination = "AdminPanel/LawyersImages/".$l_img;

  $id = $_POST['id'];
  $l_name = $_POST['l_name'];
  $l_email = $_POST['l_email'];
  $l_password = $_POST['l_password'];
  $depart = $_POST['depart'];
  $contact = $_POST['contact'];
  $address = $_POST['address'];
  $city = $_POST['city'];
  $country = $_POST['country'];

  if ($l_size <= 3000000) {

  if ($extention == "jpg" OR $extention == "png" OR $extention == "jpeg") {

  if (move_uploaded_file($tmp_name,$destination)) {

  mysqli_query($connect, " UPDATE lawyer SET Name='$l_name', Email='$l_email', Password='$l_password', Department='$depart',Contact='$contact', Address='$address', City='$city', Country='$country', Image='$l_img' WHERE ID='$id' ");

  echo "<script>
          alert('Lawyer Updated Successfully');
          location.assign('AdminPanel/validatepage.php?lawyer');
        </script>";

  }else{
  echo "<script>
          alert('Picture Not Uploaded');
  </script>";
  }
  }else{
  echo "<script>
          alert('Picture Must Be in jpg, jpeg or png');
  </script>";
  }
  }else{
  echo "<script>
          alert('Picture Size Must Be Lass Than 3MB');
  </script>";
  }
}
?>

<!-- Department Modal Uploading Code -->
<?php
if (isset($_POST['add_depart'])) {
  include "connection.php";
  $d_img = $_FILES['upload_depart']['name'];
  $d_size = $_FILES['upload_depart']['size'];
  $tmp_name = $_FILES['upload_depart']['tmp_name'];

  $extention = pathinfo($d_img,PATHINFO_EXTENSION);
  $destination = "AdminPanel/LawyersImages/DepartImages/".$d_img;

  if ($d_size <= 3000000) {
    if ($extention == "jpg" OR $extention == "png" OR $extention == "jpeg") {
      if (move_uploaded_file($tmp_name,$destination)) {
        $d_name = $_POST['depart'];
        
        $insertdepart = mysqli_query($connect, "INSERT INTO department (D_Name, D_Image) 
        VALUES('$d_name','$d_img') ");

        echo "<script>
                alert('Department Uploaded Successfully');
                location.assign('AdminPanel/validatepage.php?depart');
        </script>";
      }else{
        echo "<script>
                alert('Department Not Uploaded');
                location.assign('AdminPanel/validatepage.php?depart');
        </script>";
      }
    }else{
        echo "<script>
                alert('File Must Be in jpg, jpeg or png');
                location.assign('AdminPanel/validatepage.php?depart');
        </script>";
      }
  }else{
        echo "<script>
                alert('File Size Must Be Lass Than 3MB');
                location.assign('AdminPanel/validatepage.php?depart');
        </script>";
      }
}

// Department Deleting Code
if(isset($_GET['delete_depart'])){
  include "connection.php";
  $deletedepart = $_GET['delete_depart'];
  mysqli_query($connect, "DELETE FROM department WHERE ID = '$deletedepart'");

  echo "<script>
        alert ('Department Deleted Successfully')
        </script>";

  header('location:AdminPanel/validatePage.php?depart');
}

// Department Updating Code
if (isset($_GET['update_depart'])) {
  include "connection.php";
  $update = $_GET['update_depart'];
  $updatedepart = mysqli_query($connect, "SELECT * FROM department WHERE ID = '$update' ");
  $data = mysqli_fetch_assoc($updatedepart);
?>

<div class="container mt-5 d-flex justify-content-center align-items-center" style="width: 35%; ">
<form method="POST" enctype="multipart/form-data">
<h2 class="text-center mt-5 mb-4 text-uppercase">Update Department</h2>

<div class="form-outline mb-3">
  <input type="number" id="form4Example1" class="form-control form-control-sm" name="id" value="<?php echo $data['ID']; ?>" />
</div>

<div class="form-outline mb-3">
  <input type="text" id="form4Example1" class="form-control form-control-sm" name="d_name" value="<?php echo $data['D_Name']; ?>" />
</div>

<div>
  <input class="form-control form-control-sm mb-3" id="formFileSm" type="file" name="d_update" value="<?php echo $data['D_Image'] ?>">
</div>

<button type="submit" class="form-control btn btn-dark btn-block btn-sm" name="update_depart">Save & Back</button>
</form>
</div>

<?php } 

if (isset($_POST['update_depart'])) {
  include "connection.php";
  $d_img = $_FILES['d_update']['name'];
  $d_size = $_FILES['d_update']['size'];
  $tmp_name = $_FILES['d_update']['tmp_name'];
  $extention = pathinfo($d_img,PATHINFO_EXTENSION);
  $destination = "AdminPanel/LawyersImages/DepartImages/".$d_img;

  $id = $_POST['id'];
  $d_name = $_POST['d_name'];

  if ($d_size <= 3000000) {

  if ($extention == "jpg" OR $extention == "png" OR $extention == "jpeg") {

  if (move_uploaded_file($tmp_name,$destination)) {

  mysqli_query($connect, " UPDATE department SET D_Name='$d_name', D_Image='$d_img' WHERE ID='$id' ");

  echo "<script>
          alert('Department Updated Successfully');
          location.assign('AdminPanel/validatepage.php?depart');
        </script>";

  }else{
  echo "<script>
          alert('Picture Not Uploaded');
  </script>";
  }
  }else{
  echo "<script>
          alert('Picture Must Be in jpg, jpeg or png');
  </script>";
  }
  }else{
  echo "<script>
          alert('Picture Size Must Be Lass Than 3MB');
  </script>";
  }
}
?>

<!-- Appointment Booking Code -->
<?php
if (isset($_POST['book_appointment'])) {
  include "connection.php";
  $name = $_POST['name'];
  $email = $_POST['email'];
  $contact = $_POST['contact'];
  $l_id = $_POST['l_id'];
  $l_name = $_POST['l_name'];
  $subject = $_POST['subject'];
  $date = $_POST['date'];
  $time = $_POST['time'];
  $depart = $_POST['depart'];
  $meeting = $_POST['meeting'];
  $description = $_POST['description'];

  mysqli_query($connect, "INSERT INTO appointment (C_Name,C_Email,C_Contact,Law_ID,Law_Name,Case_Subject,App_Date,App_Time,Lawyer_Department,Meeting_Place,Description)
    VALUES ('$name','$email','$contact','$l_id','$l_name','$subject','$date','$time','$depart','$meeting','$description')");

  echo "<script>
        alert ('Dear Customer Your Booked Successfully');
            location.assign('lawyers.php');
        </script>";
}

// Appointment Deleting Code
if(isset($_GET['delete_appointment'])){
  include "connection.php";
  $deleteappointment = $_GET['delete_appointment'];
  mysqli_query($connect, "DELETE FROM appointment WHERE ID = '$deleteappointment'");
  header('location:AdminPanel/validatePage.php?appointment');
}

// Appointment Updating Code
if (isset($_GET['update_appointment'])) {
  include "connection.php";
  $update = $_GET['update_appointment'];
  $updateappointment = mysqli_query($connect, "SELECT * FROM appointment WHERE ID = '$update' ");
  $data = mysqli_fetch_assoc($updateappointment);
?>

<div class="container mt-5" style="width: 35%; ">
<form method="POST" enctype="multipart/form-data">
<h2 class="text-center mt-5 mb-4 text-uppercase">Update Appointment</h2>

<div class="form-outline mb-3">
  <input type="number" id="form4Example1" class="form-control" name="id" value="<?php echo $data['ID']; ?>" />
</div>

<div class="form-outline mb-3">
  <input type="text" id="form4Example1" class="form-control" name="name" value="<?php echo $data['C_Name']; ?>" />
</div>

<div class="form-outline mb-3">
  <input type="text" id="form4Example1" class="form-control" name="email" value="<?php echo $data['C_Email']; ?>" />
</div>

<div class="form-outline mb-3">
  <input type="text" id="form4Example1" class="form-control" name="contact" value="<?php echo $data['C_Contact']; ?>" />
</div>


<div class="form-outline mb-3">
  <input type="text" id="form4Example1" class="form-control" name="l_id" value="<?php echo $data['Law_ID']; ?>" />
</div>

<div class="form-outline mb-3">
  <input type="text" id="form4Example1" class="form-control" name="l_name" value="<?php echo $data['Law_Name']; ?>" />
</div>

<div class="form-outline mb-3">
  <input type="text" id="form4Example1" class="form-control" name="subject" value="<?php echo $data['Case_Subject']; ?>" />
</div>

<div class="form-outline mb-3">
  <input type="date" id="form4Example1" class="form-control" name="date" value="<?php echo $data['App_Date']; ?>" />
</div>

<div class="form-outline mb-3">
  <input type="time" id="form4Example1" class="form-control" name="time" value="<?php echo $data['App_Time']; ?>" />
</div>

<div class="form-outline mb-3">
<select class="form-control" name="depart">
<option value="<?php echo $data['Lawyer_Department']; ?>"><?php echo $data['Lawyer_Department']; ?></option>
<?php 
  include "connection.php";
  $fetchdepart = mysqli_query($connect,"SELECT * FROM department");
  while($depart = mysqli_fetch_assoc($fetchdepart)){
?>
<option class="form-control" value="<?php echo $depart['D_Name'];?>"><?php echo $depart['D_Name'];?></option>
<?php } ?>
</select>
</div>

<div class="form-outline mb-3">
  <input type="text" id="form4Example1" class="form-control" name="meetingplace" value="<?php echo $data['Meeting_Place']; ?>" />
</div>

<div class="form-outline mb-3">
  <input type="text" id="form4Example1" class="form-control" name="description" value="<?php echo $data['Description']; ?>" />
</div>

<button type="submit" class="form-control btn btn-dark btn-block" name="update_app">Save & Back</button>
</form>
</div>

<?php } 

if (isset($_POST['update_app'])) {
  include "connection.php";
  $id = $_POST['id'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $contact = $_POST['contact'];
  $l_id = $_POST['l_id'];
  $l_name = $_POST['l_name'];
  $subject = $_POST['subject'];
  $date = $_POST['date'];
  $time = $_POST['time'];
  $depart = $_POST['depart'];
  $meetingplace = $_POST['meetingplace'];
  $description = $_POST['description'];

  mysqli_query($connect, " UPDATE appointment SET C_Name='$name', C_Email='$email',C_Contact='$contact',Law_ID='$l_id',Law_Name='$l_name' , Case_Subject='$subject', App_Date='$date', App_Time='$time', Lawyer_Department='$depart', Meeting_Place='$meetingplace', Description='$description' WHERE ID='$id'");

  echo "<script>
          alert('Appoitment Updated Successfully');
          location.assign('AdminPanel/validatepage.php?appointment')
        </script>";

  }

?>

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