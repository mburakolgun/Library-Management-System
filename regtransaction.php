<?php  
include('includes/connection.php');
?>

<?php
$Firstname = $_POST['Firstname'];
$Lastname = $_POST['Lastname'];
$Username = $_POST['Username'];
$Password = $_POST['Password'];
$ConfirmPassword = $_POST['ConfirmPassword'];

switch ($_GET['action']) {
	case 'add':
		$query = "INSERT INTO useraccount(User_ID,Firstname,Lastname,Username,Password)VALUES(NULL, '".$Firstname."', '".$Lastname."', '".$Username."', MD5('".$Password."'))";
		mysqli_query($db,$query)or die(mysqli_error($db));
		break;
	}
	?>
	<script type="text/javascript">
		alert("Registered Successfully!");
		window.location = "login.php";
	</script>
	?>