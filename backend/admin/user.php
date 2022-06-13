<?php
session_start();
if($_SESSION['role'] == '') {
    header("location:../index.php");
}
// Create database connection using config file
include_once("../setting/config.php");
 
// Fetch all users data from database
$sql = "SELECT * FROM tbl_login a 
inner join groups b on a.id_group=b.id_group";

$result = mysqli_query($mysqli, $sql) or die (mysqli_error($mysqli));
?>
 
<html>
<head>    
    <title>Homepage</title>
</head>
 
<body>
<a href="../users/register.php" target="_self">Add New User</a><br/><br/>
 
    <table width='80%' border=1>
 
    <tr>
        <th>Username</th> 
        <th>Password</th> 
        <th>Role</th> 
        <th>Group</th> 
    
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['username']."</td>";
        echo "<td>".$user_data['password']."</td>";
        echo "<td>".$user_data['role']."</td>";
        echo "<td>".$user_data['name_group']."</td>";   
        echo "<td><a href='pages/edit.php?id=$user_data[id]'>Edit</a> | <a href='pages/delete.php?id=$user_data[id]'>Delete</a></td></tr>";          
    }
    ?>
    </table>
</body>
</html>