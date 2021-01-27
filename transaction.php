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
<li class="breadcrumb-item active">List of Transaction(s)</li>
</ol>

<!-- DataTables Example -->
<div class="card mb-3">
<div class="card-header">
<i class="fas fa-table"></i>
Transaction(s) Info  <a href="transadd.php" action="add" type="button" class="btn btn-xs btn-info fas fa-plus"></a> </div>
<div class="card-body">
<div class="table-responsive">
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
<thead>
<tr>
<th>Transaction ID</th>	
<th>Date Borrowed</th>
<th>Return Date</th>
<th>Book</th>
<th>Student</th>
</tr>
</thead>
<tbody>

<?php                  
$query = 'SELECT a.`Trans_ID`, a.`Date_Borrowed`, a.`Return_Date`, b.`Title`,c.`First_Name`,c.`Last_Name` FROM `transaction`a,`books`b,`student`c WHERE a.`Book_ID` = b.`Book_ID`and a.`Stud_ID` = c.`Stud_ID`';
$result = mysqli_query($db, $query) or die (mysqli_error($db));
                  
while ($row = mysqli_fetch_assoc($result)) {
                                             
echo '<tr>';
echo '<td>'. $row['Trans_ID'].'</td>';
echo '<td>'. $row['Date_Borrowed'].'</td>';
echo '<td>'. $row['Return_Date'].'</td>';
echo '<td>'. $row['Title'].'</td>';
echo '<td>'. $row['First_Name'],' ', $row['Last_Name'].'</td>';
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