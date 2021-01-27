<?php include('includes/connection.php'); ?>
<?php include('includes/header.php'); ?>

<?php
$query = "SELECT concat(Book_ID, \"-\" ,Title) FROM books";
$result = mysqli_query($db,$query);
?>

<body>
<div class="container">
<div class="card card-login mx-auto mt-5">
<div class="card-header">Please Fill up the Form for Borrowing Books!</div>
<div class="card-body">
<form role="form" method="post" action="transadd1.php?action=add">
                            
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

<?php
$query = "SELECT concat(Stud_ID, \"-\" ,First_Name,' ',Last_Name) FROM student";
$result = mysqli_query($db,$query);
?>
<div class="form-group">
<p>Student:</p>
<select class="form-control" name="student">
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
<!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->
</body>
</html>


<?php
include('includes1/footer1.php');
?>