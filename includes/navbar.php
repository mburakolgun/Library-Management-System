<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

<a class="navbar-brand mr-1" href="home.php">Menu</a>
<button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
<i class="fas fa-bars"></i>
</button>

<!-- Navbar -->
<form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
<ul class="navbar-nav ml-auto ml-md-0">
<li class="nav-item dropdown no-arrow">
<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<i class="fas fa-user-circle fa-fw"></i>
<?php echo  $_SESSION['Firstname']. ' '.$_SESSION['Lastname'],' ';?>
<i class="fas fa-sign-out-alt fa-fw" href="#" data-toggle="modal" data-target="#logoutModal" style="color: red">logout</i>
</a>
</div>
</li>
</ul>
</form>

</nav>