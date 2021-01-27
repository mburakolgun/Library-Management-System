<?php  
include('includes/connection.php');
?>

<?php
$Student = $_POST['Student'];
$Username = $_POST['Username'];
$Password = $_POST['Password'];

switch ($_GET['action']) {
	case 'add':
		$query = "INSERT INTO studaccount(StudAcc_ID,Stud_ID,Username,Password)VALUES(NULL, '".$Student."', '".$Username."', MD5('".$Password."'))";
		mysqli_query($db,$query)or die(mysqli_error($db));
		break;
	}
	?>
	<script type="text/javascript">
		alert("Registered Successfully!");
		window.location = "login1.php";
	</script>
	?>