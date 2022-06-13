<?php
session_start();
if($_SESSION['role'] == '') {
    header("location:../index.php");
}
// Create database connection using config file
include_once("../setting/config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM ticket ORDER BY id DESC");
?>
 
<html>
<head>    
    <title>Homepage</title>
</head>
 
<body>
<h1>Hello <?php echo $_SESSION['username']; ?>Anda telah login sebagai <span style="color:red;" ><?php echo $_SESSION['role']; ?></span></h1>
 
    <table width='80%' border=1>
 
    <tr>
        <th>Ticket No.</th> 
        <th>Projects</th> 
        <th>Ticket Title</th> 
        <th>Status</th> 
        <th>Assigned To</th> 
        <th>Submission Date</th>
        <th>Finish Date</th>
        <th>Due Date</th>
        <th>Remarks</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['id']."</td>";
        echo "<td>".$user_data['application']."</td>";
        echo "<td>".$user_data['problem_detail']."</td>";
        echo "<td>".$user_data['ticket_status']."</td>";   
        echo "<td>".$user_data['assigned_to']."</td>";
        echo "<td>".$user_data['submission_date']."</td>";
        echo "<td>".$user_data['finish_date']."</td>";
        echo "<td>".$user_data['due_date']."</td>";
        echo "<td>".$user_data['remarks']."</td>"; 
    }
    ?>
    </table>
    <a href="../users/logout.php">Logout</a><br/><br/>
</body>
</html>