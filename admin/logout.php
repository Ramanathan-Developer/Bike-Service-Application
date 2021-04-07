<?php
session_start();//session start 
session_destroy();//session variables destroy
echo "<script>
window.location.href='adminlogin.php';
</script>";//redirect
?>