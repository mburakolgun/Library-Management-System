<?php
include('includes/connection.php');
include('includes/header.php');
?>

<body>
<?php
$zz = $_POST['Stud_ID']; 
$First_Name = $_POST['First_Name'];
$Last_Name = $_POST['Last_Name'];
$Course = $_POST['Course'];
$Address = $_POST['Address'];
$Contact = $_POST['Contact'];
		
$query = 'UPDATE Student set First_Name ="'.$First_Name.'",
Last_Name ="'.$Last_Name.'", Course ="'.$Course.'",
Address ="'.$Address.'", Contact ="'.$Contact.'" WHERE
Stud_ID ="'.$zz.'"';
$result = mysqli_query($db, $query) or die(mysqli_error($db));							
?>	
<script type="text/javascript">
alert("Successfully Updated!");
window.location = "tblstudent.php";
</script>
</body>