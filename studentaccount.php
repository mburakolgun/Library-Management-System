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
<li class="breadcrumb-item active">List of Student(s) Account</li>
</ol>

<!-- DataTables Example -->
<div class="card mb-3">
<div class="card-header">
<i class="fas fa-table"></i>
Student(s) Account Info
</div>
<div class="card-body">
<div class="table-responsive">
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
<thead>
                    <tr>
                      <th>StudAcc ID</th>
                      <th>Student</th>
                      <th>Username</th>
                      <th>Password</th>
                    </tr>
                  </thead>
                <tbody>
<?php                  
$query = 'SELECT a.`StudAcc_ID`, a.`Username`, a.`Password`, b.`First_Name`,b.`Last_Name` FROM `studaccount`a,`student`b WHERE a.`Stud_ID` = b.`Stud_ID`';
$result = mysqli_query($db, $query) or die (mysqli_error($db));
                  
while ($row = mysqli_fetch_assoc($result)) {
                                             
echo '<tr>';
echo '<td>'. $row['StudAcc_ID'].'</td>';
echo '<td>'. $row['First_Name'],' ', $row['Last_Name'].'</td>';
echo '<td>'. $row['Username'].'</td>';
echo '<td>'. $row['Password'].'</td>';
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