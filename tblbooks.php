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
<li class="breadcrumb-item active">List of Book(s)</li>
</ol>

<!-- DataTables Example -->
<div class="card mb-3">
<div class="card-header">
<i class="fas fa-table"></i>
Book(s) Info <a href="addbooks.php" action="add" type="button" class="btn btn-xs btn-info fas fa-plus"></a> </div>
<div class="card-body">
<div class="table-responsive">
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
<thead>
<tr>
<th>Book ID</th>	
<th>Title</th>
<th>Isbn Number</th>
<th>Author</th>
<th>Quantity</th>
<th>Publisher</th>
<th>Options</th>
</tr>
</thead>
<tbody>

<?php                  
$query = 'SELECT a.`Book_ID`, a.`Title`, a.`Isbn_No`,a.`Author`, a.`Quantity`,b.`Name` FROM `books`a,`publisher`b WHERE a.`Pub_ID` = b.`Pub_ID`';
$result = mysqli_query($db, $query) or die (mysqli_error($db));
                  
while ($row = mysqli_fetch_assoc($result)) {
                                             
echo '<tr>';
echo '<td>'. $row['Book_ID'].'</td>';
echo '<td>'. $row['Title'].'</td>';
echo '<td>'. $row['Isbn_No'].'</td>';
echo '<td>'. $row['Author'].'</td>';
echo '<td>'. $row['Quantity'].'</td>';
echo '<td>'. $row['Name'].'</td>';
echo '<td>';
echo ' <a  type="button" class="btn btn-lg btn-warning fas fa-edit" href="editbooks.php?action=edit & id='.$row['Book_ID'] . '"></a> ';
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