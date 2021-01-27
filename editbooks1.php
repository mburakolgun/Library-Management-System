<?php
include('includes/connection.php');
include('includes/header.php');
?>

<body>
<?php
$zz = $_POST['Book_ID']; 
$Title = $_POST['Title'];
$Isbn_No = $_POST['Isbn_No'];
$Author = $_POST['Author'];
$Quantity = $_POST['Quantity'];
$Publisher = $_POST['Publisher'];
		
$query = 'UPDATE Books set Title ="'.$Title.'",
Isbn_No ="'.$Isbn_No.'", Author ="'.$Author.'",
Quantity ="'.$Quantity.'",
Pub_ID ="'.$Publisher.'" WHERE
Book_ID ="'.$zz.'", Pub_ID = "'.$Publisher.'"';
$result = mysqli_query($db, $query) or die(mysqli_error($db));							
?>	
<script type="text/javascript">
alert("Successfully Updated!");
window.location = "tblbooks.php";
</script>
</body>