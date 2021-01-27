<?php

session_start();

// 2. Unset all the session variables
unset($_SESSION['MEMBER_ID1']);	
unset($_SESSION['First_Name']);
unset($_SESSION['Last_Name']);
?>
<script type="text/javascript">
    alert("Successfully logout!");
    window.location = "index.php";
</script>