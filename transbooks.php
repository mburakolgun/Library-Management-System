<?php
include('includes/connection.php');
include('includes/header.php');
?>

<body>

<div class="col-lg-12">
<?php
$Title = $_POST['Title'];
$Isbn_No = $_POST['Isbn_No'];
$Author = $_POST['Author'];
$Quantity = $_POST['Quantity'];
$Publisher = $_POST['Publisher'];
				
switch($_GET['action']){
case 'add':			
$query = "INSERT INTO books
(Book_ID, Title, Isbn_No, Author, Quantity, Pub_ID)
VALUES (NULL, '".$Title."','".$Isbn_No."','".$Author."','".$Quantity."','".$Publisher."')";
mysqli_query($db,$query)or die (mysqli_error($db));
							
break;
									
}
?>
<script type="text/javascript">
alert("Successfully added!");
window.location = "tblbooks.php";
</script>
</div>
</body>
</html>