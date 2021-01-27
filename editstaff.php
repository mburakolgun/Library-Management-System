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
<li class="breadcrumb-item active">Editing Staff(s) Info</li>
</ol>

<?php 
$query = 'SELECT * FROM Staff
WHERE
Staff_ID ='.$_GET['id'];
$result = mysqli_query($db, $query) or die(mysqli_error($db));
while($row = mysqli_fetch_array($result))
{   
$zz= $row['Staff_ID'];
$i= $row['Name'];
$a=$row['Job_Title'];
$b=$row['Birthdate'];
$c=$row['Address'];
$d=$row['Contact'];
$e=$row['Hired_date'];
}               
$id = $_GET['id'];         
?>

<div class="container">
<div class="card card-register mx-auto mt-5">
<div class="card-header">Edit Staff Records</div>
<div class="card-body">
<form role="form" method="post" action="editstaff1.php">
                            
<div class="form-group">
<div class="col-md-12">
<input type="hidden" name="Staff_ID" value="<?php echo $zz; ?>" />
</div>
</div>
<div class="form-group">
<div class="col-md-12">
<input class="form-control" placeholder="Name" name="Name" value="<?php echo $i; ?>">
</div>
</div>
<div class="form-group">
<div class="col-md-12">
<input class="form-control" placeholder="Job Title" name="Job_Title" value="<?php echo $a; ?>">
</div> 
</div>
<div class="form-group">
<div class="col-md-12">
<input class="form-control" placeholder="Birthdate" name="Birthdate" value="<?php echo $b; ?>">
</div> 
</div>
<div class="form-group">
<div class="col-md-12">
<input class="form-control" placeholder="Address" name="Address" value="<?php echo $c; ?>">
</div>
</div> 
<div class="form-group">
<div class="col-md-12">
<input class="form-control" placeholder="Contact" name="Contact" value="<?php echo $d; ?>">
</div>
</div> 
<div class="form-group">
<div class="col-md-12">
<input class="form-control" placeholder="Hired Date" name="Hired_date" value="<?php echo $e; ?>">
</div>
</div> 
<button type="submit" class="btn btn-primary btn-block">Update Record</button>                         
</form>  
</div>
</div>                
</div>
<!-- /.container-fluid -->
</body>
<br>

<!-- Footer area -->
<?php
include('includes/footer.php');
?>