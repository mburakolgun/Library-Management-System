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
<a href="#">Course</a>
</li>
<li class="breadcrumb-item active">Adding of Course(s)</li>
</ol>

<body>
<div class="container">
<div class="card card-login mx-auto mt-5">
<div class="card-header">Add new Course</div>
<div class="card-body">
<form role="form" method="post" action="transcourse.php?action=add">
                            
<div class="form-group">
<input class="form-control" placeholder="Course" name="Course">
</div>
<button type="submit" class="btn btn-primary btn-block">Save Record</button>
<button type="reset" class="btn btn-primary btn-block">Clear Entry</button>

</form>  
</div>
</div>
</div>

<!-- Footer area -->
<?php
include('includes/footer.php');
?>