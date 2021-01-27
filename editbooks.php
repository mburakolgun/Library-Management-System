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
<a href="#">Books</a>
</li>
<li class="breadcrumb-item active">Editing Book(s) Info</li>
</ol>

<?php 
$query = 'SELECT * FROM Books
WHERE
Book_ID ='.$_GET['id'];
$result = mysqli_query($db, $query) or die(mysqli_error($db));
while($row = mysqli_fetch_array($result))
{   
$zz= $row['Book_ID'];
$i= $row['Title'];
$a=$row['Isbn_No'];
$b=$row['Author'];
$c=$row['Quantity'];
$d=$row['Pub_ID'];
} 
$id = $_GET['id'];         
?>

<div class="container">
<div class="card card-register mx-auto mt-5">
<div class="card-header">Edit Book Records</div>
<div class="card-body">
<form role="form" method="post" action="editbooks1.php">
                            
<div class="form-group">
<div class="col-md-12">
<input type="hidden" name="Book_ID" value="<?php echo $zz; ?>" />
</div>
</div>
<div class="form-group">
<div class="col-md-12">
<input class="form-control" placeholder="Title" name="Title" value="<?php echo $i; ?>">
</div>
</div>
<div class="form-group">
<div class="col-md-12">
<input class="form-control" placeholder="Isbn Number" name="Isbn_No" value="<?php echo $a; ?>">
</div> 
</div>
<div class="form-group">
<div class="col-md-12">
<input class="form-control" placeholder="Author" name="Author" value="<?php echo $b; ?>">
</div> 
</div>
<div class="form-group">
<div class="col-md-12">
<input class="form-control" placeholder="Quantity" name="Quantity" value="<?php echo $c; ?>">
</div>
</div> 
<?php
$query = "SELECT concat(Pub_ID, \"-\" ,Name) FROM publisher";
$result = mysqli_query($db,$query);
?>
<div class="form-group">
<a>Publisher:</a>
<select class="form-control"name="Publisher">
<?php while($row = mysqli_fetch_array($result)):; ?>
<option><?php echo $row[0]; ?></option>
<?php endwhile; ?>
</select>
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