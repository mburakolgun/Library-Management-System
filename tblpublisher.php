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
<li class="breadcrumb-item active">List of Publisher(s)</li>
</ol>

<!-- DataTables Example -->
<div class="card mb-3">
<div class="card-header">
<i class="fas fa-table"></i>
Publisher(s) Info <a href="addpub.php" action="add" type="button" class="btn btn-xs btn-info fas fa-plus"></a> </div>
<div class="card-body">
<div class="table-responsive">
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
<thead>
<tr>
<th>Publisher ID</th>	
<th>Name</th>
<th>Address</th>
<th>Contact</th>
<th>Email</th>
<th>Options</th>
</tr>
</thead>
<tbody>
<?php                  
$query = 'SELECT * FROM publisher';
$result = mysqli_query($db, $query) or die (mysqli_error($db));
                  
while ($row = mysqli_fetch_assoc($result)) {
                                             
echo '<tr>';
echo '<td>'. $row['Pub_ID'].'</td>';
echo '<td>'. $row['Name'].'</td>';
echo '<td>'. $row['Address'].'</td>';
echo '<td>'. $row['Contact'].'</td>';
echo '<td>'. $row['Email'].'</td>';
echo '<td>';
echo ' <a  type="button" class="btn btn-lg btn-warning fas fa-edit" href="editpublisher.php?action=edit & id='.$row['Pub_ID'] . '"></a> ';
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