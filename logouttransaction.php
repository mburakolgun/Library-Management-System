<?php

session_start();

// 2. Unset all the session variables
unset($_SESSION['MEMBER_ID']);	
unset($_SESSION['Firstname']);
unset($_SESSION['Lastname']);
?>
<script type="text/javascript">
    alert("Successfully logout!");
    window.location = "index.php";
</script>