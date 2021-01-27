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
<li class="breadcrumb-item active">List of Student(s)</li>
</ol>

<?php 
$query = 'SELECT * FROM student
              WHERE
              Stud_ID ='.$_GET['id'];
            $result = mysqli_query($db, $query) or die(mysqli_error($db));
              while($row = mysqli_fetch_array($result))
              {   
                $zz= $row['Stud_ID'];
                $i= $row['First_Name'];
                $a=$row['Last_Name'];
                $b=$row['Course'];
                $c=$row['Address'];
                $d=$row['Contact'];
              }

              $id = $_GET['id'];        
?>
<div class="coloumn">
<div class="row">
             <div class="col-lg-8">
                  <h2>Student(s) Record</h2>
                      <div class="col-lg-6">

                        <form role="form" method="post" action="tblstudent.php">
                            
                            <div class="form-group">
                              <input class="form-control" placeholder="First Name" name="First_Name" value="<?php echo $i; ?>">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Last Name" name="Last_Name" value="<?php echo $a; ?>">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Course" name="Course" value="<?php echo $b; ?>">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Address" name="Address" value="<?php echo $c; ?>">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Contact" name="Contact" value="<?php echo $d; ?>">
                            </div> 
       
                            <button type="submit" class="btn btn-default">Return to main menu</button>
                         


                      </form>  
                    </div>
                </div>
                
            </div>
</br></br>
<!-- DataTables Example -->
<div class="card mb-3">
<div class="card-header">
<i class="fas fa-table"></i>
History of Borrowed Book(s)</div>
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
$query = 'SELECT a.`Trans_ID`, a.`Date_Borrowed`, a.`Return_Date`, b.`Title`,c.`First_Name`,c.`Last_Name` FROM `transaction`a,`books`b,`student`c WHERE a.`Book_ID` = b.`Book_ID`and a.`Stud_ID` = c.`Stud_ID` and c.`Stud_ID` ='.$_GET['id'];
$result = mysqli_query($db, $query) or die (mysqli_error($db));
                  
while ($row = mysqli_fetch_assoc($result)) {
                                             
echo '<tr>';
echo '<td>'. $row['Trans_ID'].'</td>';
echo '<td>'. $row['Date_Borrowed'].'</td>';
echo '<td>'. $row['Return_Date'].'</td>';
echo '<td>'. $row['Title'].'</td>';
echo '<td>'. $row['First_Name'],' ', $row['Last_Name'].'</td>';
echo '</tr>';
}
?>
</tbody>
<tfoot>
</tfoot>
</table>
</div>
</div>
</div>

       </div>
    </div>
  </div>
</div>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>

