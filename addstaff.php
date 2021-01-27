<?php
include('includes/connection.php');
include('includes/header.php'); 
?>

<body id="page-top">

<!-- Navbar area -->
<?php
include('includes/navbar.php');
?>

<div id="wrapper">

<!-- Sidebar area -->
<?php
include('includes/sidebar.php');
?>

<div id="content-wrapper">
<div class="container-fluid">

<!-- Breadcrumbs-->
<ol class="breadcrumb">
<li class="breadcrumb-item">
<a href="#">Staff</a>
</li>
<li class="breadcrumb-item active">Adding of Staff(s)</li>
</ol>

<body>
<div class="container">
<div class="card card-login mx-auto mt-5">
<div class="card-header">Add new Staff</div>
<div class="card-body">
<form role="form" method="post" action="transstaff.php?action=add">
                            
<div class="form-group">
<input class="form-control" placeholder="Name" name="Name">
</div>
<div class="form-group">
<input class="form-control" placeholder="Job Title" name="Job_Title">
</div> 
<div class="form-group">
<a>Birthdate:</a>
<input class="form-control" type="date" placeholder="Birthdate" name="Birthdate">
</div>
<div class="form-group">
<input class="form-control" placeholder="Address" name="Address">
</div>
<div class="form-group">
<input class="form-control" placeholder="Contact" name="Contact">
</div>
<div class="form-group">
<a>Hired Date:</a>
<input class="form-control" type="date" placeholder="Hired_date" name="Hired_date">
</div> 
<button type="submit" class="btn btn-primary btn-block">Save Record</button>
<button type="reset" class="btn btn-primary btn-block">Clear Entry</button>


</form>  
</div>
</div>
</div>
<br>

<!-- Footer area -->
<?php
include('includes/footer.php');
?>