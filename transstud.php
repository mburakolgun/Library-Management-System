<?php
include('includes/connection.php');
include('includes/header.php');
?>

<body>

<div class="col-lg-12">
<?php
$First_Name = $_POST['First_Name'];
$Last_Name = $_POST['Last_Name'];
$Course = $_POST['Course'];
$Address = $_POST['Address'];
$Contact = $_POST['Contact'];
				
switch($_GET['action']){
case 'add':			
$query = "INSERT INTO Student
(Stud_ID, First_Name, Last_Name, Course, Address, Contact)
VALUES (NULL, '".$First_Name."','".$Last_Name."','".$Course."','".$Address."', '".$Contact."')";
mysqli_query($db,$query)or die (mysqli_error($db));
							
break;
									
}
?>
<script type="text/javascript">
alert("Successfully added!");
window.location = "tblstudent.php";
</script>
</div>
</body>
</html>