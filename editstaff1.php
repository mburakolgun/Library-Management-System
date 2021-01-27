<?php
include('includes/connection.php');
include('includes/header.php');
?>

<body>
<?php
$zz = $_POST['Staff_ID']; 
$Name = $_POST['Name'];
$Job_Title = $_POST['Job_Title'];
$Birthdate = $_POST['Birthdate'];
$Address = $_POST['Address'];
$Contact = $_POST['Contact'];
$Hired_date = $_POST['Hired_date'];
		
$query = 'UPDATE Staff set Name ="'.$Name.'",
Job_Title ="'.$Job_Title.'", Birthdate ="'.$Birthdate.'",
Address ="'.$Address.'", Contact ="'.$Contact.'", Hired_date ="'.$Hired_date.'" WHERE
Staff_ID ="'.$zz.'"';
$result = mysqli_query($db, $query) or die(mysqli_error($db));							
?>	
<script type="text/javascript">
alert("Successfully Updated!");
window.location = "tblstaff.php";
</script>
</body>