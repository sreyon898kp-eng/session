
<?php
session_start();
if(isset($-SESSION['is_admin']) || $_SESSION['is_ admin']!=1){
    header ('location:../auth/login.php')
}
?>
<h1>WElcome to admin </h1>
