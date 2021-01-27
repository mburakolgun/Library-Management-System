 <?php
include('includes/connection.php');
include('includes/header.php');
?>

<body>

<div class="col-lg-12">
<?php
$Name = $_POST['Name'];
$Address = $_POST['Address'];
$Contact = $_POST['Contact'];
$Email = $_POST['Email'];
	
switch($_GET['action']){
case 'add':			
$query = "INSERT INTO Publisher
(Pub_ID, Name, Address, Contact, Email)
VALUES (Null,'".$Name."','".$Address."','".$Contact."','".$Email."')";
mysqli_query($db,$query)or die ('Error in updating Database');
							
break;
									
}
?>
<script type="text/javascript">
alert("Successfully added!");
window.location = "tblpublisher.php";
</script>
</div>
</body>
</html>