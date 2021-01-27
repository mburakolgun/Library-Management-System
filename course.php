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
<a href="#">Tables</a>
</li>
<li class="breadcrumb-item active">List of Course(s)</li>
</ol>

<!-- DataTables Example -->
<div class="card mb-3">
<div class="card-header">
<i class="fas fa-table"></i>
Course(s) Info <a href="addcourse.php" action="add" type="button" class="btn btn-xs btn-info fas fa-plus"></a> </div>
<div class="card-body">
<div class="table-responsive">
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
<thead>
<tr>
<th>Course ID</th>	
<th>Course</th>
</tr>
</thead>
<tbody>

<?php                  
$query = 'SELECT * FROM course';
$result = mysqli_query($db, $query) or die (mysqli_error($db));
                  
while ($row = mysqli_fetch_assoc($result)) {
                                             
echo '<tr>';
echo '<td>'. $row['Course_ID'].'</td>';
echo '<td>'. $row['Course'].'</td>';
echo '</tr> ';
}
?> 
</tbody>
<tfoot>
</tfoot>
</table>
</div>
</div>
<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>

<!-- Footer area -->
<?php
include('includes/footer.php');
?>