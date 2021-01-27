 <?php
include('includes/connection.php');
include('includes/header.php');
?>

<body>

<div class="col-lg-12">
<?php
$Course = $_POST['Course'];

switch($_GET['action']){
case 'add':			
$query = "INSERT INTO course
(Course_ID, Course)
VALUES (Null,'".$Course."')";
mysqli_query($db,$query)or die ('Error in updating Database');
							
break;
									
}
?>
<script type="text/javascript">
alert("Successfully added!");
window.location = "course.php";
</script>
</div>
</body>
</html>