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
<li class="breadcrumb-item active">Adding of Book(s)</li>
</ol>

<?php
$query = "SELECT concat(Pub_ID, \"-\" ,Name) FROM publisher";
$result = mysqli_query($db,$query);
?>

<body>
<div class="container">
<div class="card card-login mx-auto mt-5">
<div class="card-header">Add new Book</div>
<div class="card-body">
<form role="form" method="post" action="transbooks.php?action=add">
                            
<div class="form-group">
<input class="form-control" placeholder="Title" name="Title">
</div>
<div class="form-group">
<input class="form-control" placeholder="Isbn Number" name="Isbn_No">
</div> 
<div class="form-group">
<input class="form-control" placeholder="Author" name="Author">
</div>
<div class="form-group">
<input class="form-control" placeholder="Quantity" name="Quantity">
</div> 

<div class="form-group">
<a>Publisher:</a>
<select class="form-control"name="Publisher">
<?php while($row = mysqli_fetch_array($result)):; ?>
<option><?php echo $row[0]; ?></option>
<?php endwhile; ?>
</select>
</div>

<button type="submit" class="btn btn-primary btn-block">Save Record</button>
<button type="reset" class="btn btn-primary btn-block">Clear Entry</button>

</form>  
</div>
</div>
</div>
<!-- /.container-fluid -->
</div>
<!-- /#wrapper -->
<br>

<!-- Footer area -->
<?php
include('includes/footer.php');
?>