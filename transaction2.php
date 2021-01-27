<?php
include('includes/connection.php');
include('includes1/header1.php');
?>

<body>

<div class="col-lg-12">
<?php
if (isset($_POST['save'])) {
	# code...
$Date_Borrowed = $_POST['Date_Borrowed'];
$Return_Date = $_POST['Return_Date'];
$Books = $_POST['books'];
$Student = $_POST['student'];
				
switch($_GET['action']){
case 'add':			
$query = "INSERT INTO transaction
(Trans_ID, Date_Borrowed, Return_Date, Book_ID, Stud_ID)
VALUES (NULL, '".$Date_Borrowed."','".$Return_Date."','".$Books."','".$Student."')";
mysqli_query($db,$query)or die (mysqli_error($db));
							
break;
									
}
}
?>
<script type="text/javascript">
alert("Successfully added!");
window.location = "transaction1.php";
</script>
</div>
</body>
</html>