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
<a href="#">Dashboard</a>
</li>
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<i class="fas fa-fw fa-table"></i>
<span>Tables</span>
</a>
<div class="dropdown-menu" aria-labelledby="pagesDropdown">
<h6 class="dropdown-header">Tables:</h6>
<a class="dropdown-item" href="tblbooks.php">Books</a>
<a class="dropdown-item" href="tblpublisher.php">Publisher</a>
<a class="dropdown-item" href="tblstaff.php">Staff</a>
<a class="dropdown-item" href="tblstudent.php">Student</a>
<div class="dropdown-divider"></div>
</div>
</li>
</ol>

<p class="small text-center text-muted my-5">
<em>More table examples coming soon...</em>
</p>
</div>
<!-- /.container-fluid -->

<!-- Footer area -->
<?php
include('includes/footer.php');
?>