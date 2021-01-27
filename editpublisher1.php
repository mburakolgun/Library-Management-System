<?php
include('includes/connection.php');
include('includes/header.php');
?>

<body>
<?php
$zz = $_POST['Pub_ID']; 
$Name = $_POST['Name'];
$Address = $_POST['Address'];
$Contact = $_POST['Contact'];
$Email = $_POST['Email'];
		
$query = 'UPDATE Publisher set Name ="'.$Name.'",
Address ="'.$Address.'", Contact ="'.$Contact.'",
Email ="'.$Email.'" WHERE
Pub_ID ="'.$zz.'"';
$result = mysqli_query($db, $query) or die(mysqli_error($db));							
?>
<script type="text/javascript">
alert("Successfully Updated!");
window.location = "tblpublisher.php";
</script>
 </body>