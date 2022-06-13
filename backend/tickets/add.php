<html>
<head>
	<title>Add Tickets</title>
</head>
 
<body>
	<a href="../admin/dashboard.php">Go to Home</a>
	<br/><br/>
 
	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>Application</td>
				<td>
				<select name="application">
					<option>HMSI</option>
					<option>Taspen Life</option>
				</select>
				</td>
			</tr>
			<tr> 
				<td>Category</td>
				<td>
				<select name="category">
					<option>Bugs</option>
					<option>Change Request</option>
					<option>Inquiry</option>
				</select>
				</td>
			</tr>
            <tr> 
				<td>Problem Detail</td>
				<td>
					<textarea rows="5" name="problem_detail"></textarea>
				</td>
			</tr>
			<tr> 
				<td>Assigned To</td>
				<td><input type="text" name="assigned_to"></td>
			</tr>
			<tr> 
				<td>Source</td>
				<td>
				<select name="source">
					<option>Email</option>
					<option>Chat</option>
					<option>Phone</option>
					<option>Helpdesk Portal</option>
				</select>
				</td>
			</tr>
			<tr> 
				<td>Ticket Status</td>
				<td>
					<select type="number" name="ticket_status">
						<option>Open</option>
						<option>On Progress</option>
						<option>Waiting Customer</option>
						<option>Problem Third Party</option>
						<option>Problem With Customer</option>
						<option>Pending</option>
						<option>Done - Waiting User Confirmation</option>
						<option>Cancelled</option>
						<option>Done - Resolved</option>
						<option>Re - Open</option>
						<option>On Hold - Ready to Deploy</option>
						<option>On Hold - Ready to QC</option>
						<option>Submitted</option>
					</select>
				</td>
			</tr>
			<tr> 
				<td>Submission Date</td>
				<td><input type="text" name="submission_date"></td>
			</tr>
			<tr> 
				<td>Finish Date</td>
				<td><input type="text" name="finish_date"></td>
			</tr>
			<tr> 
				<td>Due Date</td>
				<td><input type="text" name="due_date"></td>
			</tr>
			<tr> 
				<td>Attachment</td>
				<td><input type="text" name="attachment"></td>
			</tr>
			<tr> 
				<td>Reported By</td>
				<td><input type="text" name="reported_by"></td>
			</tr>
			<tr> 
				<td>Remarks</td>
				<td><textarea rows="5" name="remarks"></textarea></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Create"></td>
			</tr>
		</table>
	</form>
	
	<?php

	// include database connection file
	include_once("../setting/config.php");
 
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$application = $_POST['application'];
		$category = $_POST['category'];
        $problem_detail = $_POST['problem_detail'];
		$assigned_to = $_POST['assigned_to'];
		$source = $_POST['source'];
		$ticket_status = $_POST['ticket_status'];
		$submission_date = $_POST['submission_date'];
		$finish_date = $_POST['finish_date'];
		$due_date = $_POST['due_date'];
		$attachment = $_POST['attachment'];
		$reported_by = $_POST['reported_by'];
		$remarks = $_POST['remarks'];

				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO ticket(application,category,problem_detail,assigned_to,source,ticket_status,submission_date,finsih_date,due_date,attachment,reported_by,remarks) VALUES('$application','$category','$problem_detail','$assigned_to','$source','$ticket_status','$submission_date','$finish_date','$due_date','$attachment','$reported_by','$remarks')");
		
		// Show message when user added
		if ( $result ) {
			header('Location: ../dashboard.php?status=berhasil');
	
		} else {
			header('Location: ../dashboard.php?status=gagal');
			
		}
	}
	?>
</body>
</html>