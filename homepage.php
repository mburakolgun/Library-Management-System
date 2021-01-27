<?php
include('includes/connection.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<title> Funeral Services </title>

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

<body id="page-top">

<!-- Navbar area -->
<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

<a class="navbar-brand mr-1" href="home.php">HOME</a>
<button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
<i class="fas fa-bars"></i>
</button>

<!-- Navbar -->
<form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
<ul class="navbar-nav ml-auto ml-md-0">
<li class="nav-item dropdown no-arrow">
<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<i class="fas fa-user-circle fa-fw"></i>
</a>

<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
<h6 class="dropdown-header">Login as:</h6>
<a class="dropdown-item" href="login.php">ADMIN</a>
<a class="dropdown-item" href="logi.php">CLIENT</a>
</div>
</li>
</ul>
</form>

</nav>

<div id="wrapper">

<!-- Sidebar area -->
<ul class="sidebar navbar-nav">
<li class="nav-item active">
<a class="nav-link" href="home.php">
<i class="fas fa-fw fa-home"></i>
<span>Home</span>
</a>
</li>

<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<i class="fas fa-fw fa-folder"></i>
<span>Register Page</span>
</a>

<div class="dropdown-menu" aria-labelledby="pagesDropdown">
<h6 class="dropdown-header">CLIENT REGISTRATION:</h6>
<a class="dropdown-item" href="register1.php"></a>
</div>
</li>
</ul>

<div id="content-wrapper">
<div class="container-fluid">

<!-- Breadcrumbs-->
<ol class="breadcrumb">
<li class="breadcrumb-item">
<a href="#"></a>
</li>
<li class="breadcrumb-item active"></li>
</ol>

<div class="Lib_Logo">
<a href="#"><img src="img/123.png" alt="LIB"></a>
</div>

<!-- Footer area -->
<?php
include('includes/footer.php');
?>