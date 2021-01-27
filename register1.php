<?php include('includes/connection.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<title>LMS Student - Library Management System</title>

<!-- Bootstrap core CSS-->
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom fonts for this template-->
<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<!-- Page level plugin CSS-->
<link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
<!-- Custom styles for this template-->
<link href="css/sb-admin.css" rel="stylesheet">

</head>
</html>

<?php
$query = "SELECT concat(Stud_ID, \"-\" ,First_Name,' ',Last_Name) FROM student";
$result = mysqli_query($db,$query);
?>

<body class="bg-dark">

<div class="container">
<div class="card card-register mx-auto mt-5">
<div class="card-header">Register an Account</div>
<div class="card-body">
<div class="text-center">
</div>
<form role="form" method="post" action="regtransaction1.php?action=add">
<div class="form-group">
<div class="form-row">
<div class="col-md-12">
<a>Student:</a>
<select class="form-control"name="Student">
<?php while($row = mysqli_fetch_array($result)):; ?>
<option><?php echo $row[0]; ?></option>
<?php endwhile; ?>
</select>
</div>
</div>
</div>
<div class="form-group">
<div class="form-row">
<div class="col-md-6">
<div class="form-label-group">
<input type="email" id="Username" name="Username" class="form-control" placeholder="Username">
<label for="Username">Username</label>
</div>
</div>
<div class="col-md-6">
<div class="form-label-group">
<input type="password" id="Password" name="Password" class="form-control" placeholder="Password">
<label for="Password">Password</label>
</div>
</div>
</div>
</div>
<button type="submit" class="btn btn-primary btn-block">Register</button>
</form>
<div class="text-center">
<a class="d-block small mt-3" href="login1.php">Login Page</a>
</div>
</div>
</div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>
</html>