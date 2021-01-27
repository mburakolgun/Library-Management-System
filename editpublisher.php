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
<li class="breadcrumb-item active">Editing Publisher(s) Info</li>
</ol>

<?php 
$query = 'SELECT * FROM Publisher
WHERE
Pub_ID ='.$_GET['id'];
$result = mysqli_query($db, $query) or die(mysqli_error($db));
while($row = mysqli_fetch_array($result))
{   
$zz= $row['Pub_ID'];
$i= $row['Name'];
$a=$row['Address'];
$b=$row['Contact'];
$c=$row['Email'];
} 
$id = $_GET['id'];         
?>

<div class="container">
<div class="card card-register mx-auto mt-5">
<div class="card-header">Edit Publisher Records</div>
<div class="card-body">
<form role="form" method="post" action="editpublisher1.php">
                            
<div class="form-group">
<div class="col-md-12">
<input type="hidden" name="Pub_ID" value="<?php echo $zz; ?>" />
</div>
</div>
<div class="form-group">
<div class="col-md-12">
<input class="form-control" placeholder="Name" name="Name" value="<?php echo $i; ?>">
</div>
</div>
<div class="form-group">
<div class="col-md-12">
<input class="form-control" placeholder="Address" name="Address" value="<?php echo $a; ?>">
</div> 
</div>
<div class="form-group">
<div class="col-md-12">
<input class="form-control" placeholder="Contact" name="Contact" value="<?php echo $b; ?>">
</div> 
</div>
<div class="form-group">
<div class="col-md-12">
<input class="form-control" placeholder="Email" name="Email" value="<?php echo $c; ?>">
</div>
</div> 
<button type="submit" class="btn btn-primary btn-block">Update Record</button>                         
</form>  
</div>
</div>
</div>
<!-- /.container-fluid -->
</body>

<!-- Footer area -->
<?php
include('includes/footer.php');
?>