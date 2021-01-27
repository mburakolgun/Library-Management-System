<?php include('includes/connection.php'); ?>
<?php include('includes1/header1.php'); ?>

<?php
$query = "SELECT concat(Book_ID, \"-\" ,Title) FROM books";
$result = mysqli_query($db,$query);
?>

<body>
<div class="container">
<div class="card card-login mx-auto mt-5">
<div class="card-header">Please Fill up the Form for Borrowing Books!</div>
<div class="card-body">

<form role="form" method="post" action="transaction2.php?action=add">
                            
<div class="form-group">
<p>Date Borrowed:</p>
<input class="form-control" type="Date" placeholder="Date Borrowed" name="Date_Borrowed">
</div>
<div class="form-group">
<p>Return Date:</p>
<input class="form-control" type="Date" placeholder="Return Date" name="Return_Date">
</div> 
<div class="form-group">
<p>Book:</p>
<select class="form-control" name="books">
<?php while($row = mysqli_fetch_array($result)):; ?>
<option><?php echo $row[0]; ?></option>
<?php endwhile; ?>
</select>
</div>

<div class="form-group">
<input type="hidden" class="form-control" readonly value="<?php echo $_SESSION["studid"]?>" placeholder="Student" required name="student">
</div>
</div>

<button type="submit" name="save" class="btn btn-primary btn-block">Save Record</button>
<button type="reset" class="btn btn-primary btn-block">Clear Entry</button>

</form>  
</div>
</div>
</div>
<!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->
</body>
</html>


<?php
include('includes1/footer1.php');
?>