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
<li class="breadcrumb-item active">Editing Student(s) Info</li>
</ol>

<?php 
$query = 'SELECT * FROM Student
WHERE
Stud_ID ='.$_GET['id'];
$result = mysqli_query($db, $query) or die(mysqli_error($db));
while($row = mysqli_fetch_array($result))
{   
$zz= $row['Stud_ID'];
$i= $row['First_Name'];
$a=$row['Last_Name'];
$b=$row['Course'];
$c=$row['Address'];
$d=$row['Contact'];
}               
$id = $_GET['id'];         
?>

<div class="container">
<div class="card card-register mx-auto mt-5">
<div class="card-header">Edit Student Records</div>
<div class="card-body">
<form role="form" method="post" action="editstudent1.php">
                            
<div class="form-group">
<div class="col-md-12">
<input type="hidden" name="Stud_ID" value="<?php echo $zz; ?>" />
</div>
</div>
<div class="form-group">
<div class="col-md-12">
<input class="form-control" placeholder="First Name" name="First_Name" value="<?php echo $i; ?>">
</div>
</div>
<div class="form-group">
<div class="col-md-12">
<input class="form-control" placeholder="Last Name" name="Last_Name" value="<?php echo $a; ?>">
</div> 
</div>
<div class="form-group">
<div class="col-md-12">
<input class="form-control" placeholder="Course" name="Course" value="<?php echo $b; ?>">
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