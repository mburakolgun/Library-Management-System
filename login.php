<?php require('session.php');?>

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<title>Log In</title>

<!-- Bootstrap core CSS-->
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom fonts for this template-->
<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<!-- Page level plugin CSS-->
<link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
<!-- Custom styles for this template-->
<link href="css/sb-admin.css" rel="stylesheet">
</head>

<?php if(logged_in()){ ?>
<script type="text/javascript">
window.location = "home.php";
</script>
<?php
} ?>

<body class="bg-dark">
<div class="container">
<div class="card card-login mx-auto mt-5">
<div class="card-header">Login</div>
<div class="card-body">
<form role="form" action="logintransaction.php" method="post">
<fieldset>
<div class="form-group">
<input class="form-control" placeholder="Username" name="Username" type="text" autofocus>
</div>
<div class="form-group">
<input class="form-control" placeholder="Password" name="Password" type="password" value="">
</div>
<div class="checkbox">
<label>
<input name="remember" type="checkbox" value="Remember Me">Remember Me
</label>
</div>
<!-- Change this to a button or input when using this as a form -->
<button class="btn btn-lg btn-success btn-block" type="submit" name="useraccount">Login</button> 
</fieldset>
</form>
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