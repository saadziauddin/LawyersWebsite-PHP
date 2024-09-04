
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

<header>

<div class="top_nav bg-dark">
<div class="container">
<div class="row">

<div class="col-6">
<div class="_ne_ol_vd">
<ol>
  <li class="_no_lo_hg">+92 123456789</li>
  <li>info@lawyers.com.pk</li>
</ol>
</div>
</div>

<div class="col-6">
<div class="_ne_ol_vw">

<div class="input-group">
<form action="lawyers.php" method="POST">
  <div class="input-group">
      <input type="text" name="searchlawyer" class="form-control" placeholder="Search your lawyer" />
        <button class="input-group-append input-group-text bg-transparent text-light" type="submit" name="searchdata">
              <i class="fa fa-search"></i>
        </button>
  </div>
</form>
</div>

</div>
</div>

</div>
</div>
</div>


<div class="header-wrapper" >
<div class="container" shadow p-3 mb-5 bg-body rounded>
<div class="row">

<nav>

<div class="logo navbar-brand brand-logo">
    <h1><a href="index.php"> Lawyers </a></h1>
</div>

<div class="menu-toggle"></div>
<div class="my-nav">
<div class="menu">

  <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="services.php">Services</a></li>
    <li><a href="lawyers.php">Lawyers</a></li>
    <li><a href="contact.php">Contact Us</a></li>
    
<?php 
if(isset($_SESSION['name'])){
?>

<a href="RegisterLogin/logout.php" class="btn btn-dark dropdown-toggle" role="button" id="dropdownMenuLink" aria-haspopup="true" aria-expanded="false">
<?php echo $_SESSION['name']; ?>
</a>

<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">

<a class="dropdown-item" href="edit.php?customer_id=<?php echo $_SESSION['id']; ?>">Edit Profile</a>

<a class="dropdown-item" href="app_form.php">My Appointments</a>

<a class="dropdown-item" href="RegisterLogin/logout.php">Logout</a>

</div>

<?php
}else{
?>

<a class="btn btn-dark dropdown-toggle" href="" role="button" id="dropdownMenuLink" aria-haspopup="true" aria-expanded="false">
Join Here!</a>

<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">

<a class="dropdown-item text-dark" href="RegisterLogin/login.php">Login Here!</a>

<a class="dropdown-item" href="RegisterLogin/register.php">Customer Register</a>

<a class="dropdown-item" href="RegisterLogin/lawyersregister.php">Lawyer Register</a>

</div>

<?php } ?>

</ul>
</div>
</div>
</nav>

</div>
</div>
</div>
</header>