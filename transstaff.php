<?php
include('includes/connection.php');
include('includes/header.php');
?>

<body>

<div class="col-lg-12">
<?php
$Name = $_POST['Name'];
$Job_Title = $_POST['Job_Title'];
$Birthdate = $_POST['Birthdate'];
$Address = $_POST['Address'];
$Contact = $_POST['Contact'];
$Hired_date = $_POST['Hired_date'];
				
switch($_GET['action']){
case 'add':			
$query = "INSERT INTO Staff
(Staff_ID, Name, Job_Title, Birthdate, Address, Contact, Hired_date)
VALUES (NULL, '".$Name."','".$Job_Title."','".$Birthdate."','".$Address."', '".$Contact."', '".$Hired_date."')";
mysqli_query($db,$query)or die (mysqli_error($db));
							
break;
									
}
?>
<script type="text/javascript">
alert("Successfully added!");
window.location = "tblstaff.php";
</script>
</div>
</body>
</html>