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
<a href="#">Student</a>
</li>
<li class="breadcrumb-item active">Adding of Student(s)</li>
</ol>

<body>
<div class="container">
<div class="card card-login mx-auto mt-5">
<div class="card-header">Add new Student</div>
<div class="card-body">
<form role="form" method="post" action="transstud.php?action=add">
                            
<div class="form-group">
<input class="form-control" placeholder="First Name" name="First_Name">
</div>
<div class="form-group">
<input class="form-control" placeholder="Last Name" name="Last_Name">
</div> 

<?php
$query = "SELECT concat(Course_ID, \"-\" ,Course) FROM course";
$result = mysqli_query($db,$query);
?>
<div class="form-group">
<a>Course:</a>
<select class="form-control"name="Course">
<?php while($row = mysqli_fetch_array($result)):; ?>
<option><?php echo $row[0]; ?></option>
<?php endwhile; ?>
</select>
</div>

<div class="form-group">
<input class="form-control" placeholder="Address" name="Address">
</div> 
<div class="form-group">
<input class="form-control" placeholder="Contact" name="Contact">
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