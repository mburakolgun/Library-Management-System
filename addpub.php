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
<a href="#">Publisher</a>
</li>
<li class="breadcrumb-item active">Adding of Publisher(s)</li>
</ol>

<body>
<div class="container">
<div class="card card-login mx-auto mt-5">
<div class="card-header">Add new Publisher</div>
<div class="card-body">
<form role="form" method="post" action="transpublisher.php?action=add">
                            
<div class="form-group">
<input class="form-control" placeholder="Name" name="Name">
</div>
<div class="form-group">
<input class="form-control" placeholder="Address" name="Address">
</div> 
<div class="form-group">
<input class="form-control" placeholder="Contact" name="Contact">
</div>
<div class="form-group">
<input class="form-control" placeholder="Email" name="Email">
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