<?php
session_start();
session_destroy();//delete the session variables
echo "<script>
window.location.href='login.php'; 
</script>";//redirect to login page
?>