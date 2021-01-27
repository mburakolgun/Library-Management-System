<?php include('includes/connection.php'); ?>
<html>
<?php include('includes/header.php'); ?>

<body class="bg-dark">

<div class="container">
<div class="card card-register mx-auto mt-5">
<div class="card-header">Register an Account</div>
<div class="card-body">
<div class="text-center">
</div>
<form role="form" method="post" action="regtransaction.php?action=add">
<div class="form-group">
<div class="form-row">
<div class="col-md-6">
<div class="form-label-group">
<input type="text" id="Firstname" name="Firstname" class="form-control" placeholder="Firstname"autofocus="autofocus">
<label for="Firstname">Firstname</label>
</div>
</div>
<div class="col-md-6">
<div class="form-label-group">
<input type="text" id="Lastname" name="Lastname" class="form-control" placeholder="Lastname"autofocus="autofocus">
<label for="Lastname">Lastname</label>
</div>
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
<a class="d-block small mt-3" href="login.php">Login Page</a>
<a class="d-block small" href="forgot-password.php">Forgot Password?</a>
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