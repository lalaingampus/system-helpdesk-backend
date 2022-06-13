<?php

include_once('../setting/config.php');

$select = mysqli_query($conn, "SELECT * FROM tbl_login WHERE username = '".$_POST['username']."'");
if(mysqli_num_rows($select)) {
    header("location:./change_password.php");
}
?>