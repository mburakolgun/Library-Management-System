<body>
		
<div class="fh5co-loader"></div>
	
<div id="page">
<nav class="fh5co-nav" role="navigation">
<div class="top-menu">
<div class="container-fluid">
<div class="row">
<div class="col-xs-2">
<div id="fh5co-logo"><a href="home.php"><span>Fiction</span> Category</a></div>
</div>
<div class="col-xs-10 text-right menu-1">
<ul>
<li class="active"><a href="home1.php">Home</a></li>
<li><a href="books1.php">Books</a></li>
<li><a href="transaction1.php">Transaction</a></li>
<?php echo  $_SESSION['First_Name']. ' '.$_SESSION['Last_Name'] ;?>
<a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>

</ul>
</div>
</div>
	</div>	
	</div>
	</nav>
	</div>
	</body>