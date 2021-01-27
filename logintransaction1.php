<?php
require('includes/connection.php');
require('session1.php');
if (isset($_POST['studaccount'])) {

$Username = trim($_POST['Username']);
$Password = trim($_POST['Password']);
$h_Password = MD5($Password);
if ($Password == ''){
?>    

<script type="text/javascript">
alert("Password is missing!");
window.location = "login1.php";
</script>
<?php
}else{
//create some sql statement             
$sql = "SELECT ss.`StudAcc_ID`,ss.`Stud_ID`, s.`First_Name`, s.`Last_Name`, ss.`Username`, ss.`Password` FROM  `studaccount`ss, `student` s WHERE ss.`Stud_ID` = s.`Stud_ID` and `Username` =  '" . $Username . "' AND  `Password` =  '" . $h_Password . "'";
$result = $db->query($sql);

if ($result){
//get the number of results based n the sql statement
//check the number of result, if equal to one   
//IF theres a result
if ( $result->num_rows > 0) {
//store the result to a array and passed to variable found_user
$found_user  = mysqli_fetch_array($result);

//fill the result to session variable
$_SESSION['MEMBER_ID1']  = $found_user['StudAcc_ID']; 
$_SESSION['First_Name'] = $found_user['First_Name']; 
$_SESSION['Last_Name']  =  $found_user['Last_Name'];  
$_SESSION['studid']  =  $found_user['Stud_ID'];  
?>    
<script type="text/javascript">
//then it will be redirected to index.php
window.location = "home1.php";
</script>
<?php        
} else {
//IF theres no result
?>    
<script type="text/javascript">
alert("Username or Password Not Registered!");
window.location = "login1.php";
</script>
<?php
}
} else {
# code...
echo "Error: " . $sql . "<br>" . $db->error;
}   
}       
} 
$db->close();
?>