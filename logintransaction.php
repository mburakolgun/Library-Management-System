<?php
require('includes/connection.php');
require('session.php');
if (isset($_POST['useraccount'])) {

$Username = trim($_POST['Username']);
$Password = trim($_POST['Password']);
$h_Password = MD5($Password);
if ($Password == ''){
?>    

<script type="text/javascript">
alert("Password is missing!");
window.location = "login.php";
</script>
<?php
}else{
//create some sql statement             
$sql = "SELECT * FROM  `useraccount` WHERE  `Username` =  '" . $Username . "' AND  `Password` =  '" . $h_Password . "'";
$result = $db->query($sql);

if ($result){
//get the number of results based n the sql statement
//check the number of result, if equal to one   
//IF theres a result
if ( $result->num_rows > 0) {
//store the result to a array and passed to variable found_user
$found_user  = mysqli_fetch_array($result);

//fill the result to session variable
$_SESSION['MEMBER_ID']  = $found_user['User_ID']; 
$_SESSION['Firstname'] = $found_user['Firstname']; 
$_SESSION['Lastname']  =  $found_user['Lastname']; 
?>    
<script type="text/javascript">
//then it will be redirected to index.php
window.location = "home.php";
</script>
<?php        
} else {
//IF theres no result
?>    
<script type="text/javascript">
alert("Username or Password Not Registered!");
window.location = "login.php";
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