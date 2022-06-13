<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../../assets/create/style.css">
</head>
<body>
<title>Helpdesk Ticketing</title>
<div class="container">	
	<div class="col-md-6">                    
		<div class="panel panel-info">
			<div class="panel-heading">
				<div class="panel-title">HELPDESK <span class="panel-span">TICKETING</span></div>
                <div class="panel-user">
                    <h1 class="title">
                   
                    </h1>
                    <img class="user-photo" src="../../assets/create/assets/images/avatar.png">
                    <img class="user-down" src="../../assets/create/assets/images/ic_down.png">
                </div>                        
			</div>

			<!-- Panel Body -->
			<div class="panel-body" >
        
				<!-- Panel Body untuk bagian filter -->
                <div class="panel-create">Create <span class="panel-create-p">New Ticket</span></div>
                <div class="panel-body-filter">
                  
                        <form action="create_ticket.php" method="post">
                        <div class="row">
                          <div class="col-25">
                            <label for="title">Title</label>
                          </div>
                          <div class="col-75">
                            <input type="text" id="title" name="title">
                          </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                              <label for="application">Application</label>
                            </div>
                            <div class="col-75">
                              <select id="application" name="application">
                                <option value="">Please Choose</option>
                                <?php
                                  include "../../setting/config.php";
                                  $sql = "select * from project";
                                  $hasil = mysqli_query($mysqli, $sql);
                                  $no=0;
                                  while($project = mysqli_fetch_array($hasil)) {
                                    $no++;
                                    ?>
                                    <option value="<?php echo $project['id_project'];?>"><?php echo $project['nama_application'];?></option>
                                  <?php
                                  }
                                ?>
                              </select>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-25">
                              <label for="category">Category</label>
                            </div>
                            <div class="col-75">
                              <select id="category" name="category">
                                <option value="">Please Choose</option>
                                <?php
                                  $sql = "select * from category";
                                  $hasil = mysqli_query($mysqli, $sql);
                                  $no=0;
                                  while($category = mysqli_fetch_array($hasil)) {
                                    $no++;
                                    ?>
                                    <option value="<?php echo $category['id_category'];?>"><?php echo $category['name_category'];?></option>
                                  <?php
                                  }
                                ?>
                              </select>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-25">
                              <label for="problem">Problem Detail</label>
                            </div>
                            <div class="col-75">
                              <textarea  name="problem" rows="10" cols="30" placeholder=""></textarea>
                            </div>
                          </div>
                        <div class="row">
                          <div class="col-25">
                            <label for="assigned">Assigned To</label>
                          </div>
                          <div class="col-75">
                            <input type="text" id="lname" name="assigned" placeholder="">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-25">
                            <label for="source">Source</label>
                          </div>
                          <div class="col-75">
                          <select id="source" name="source">
                                <option value="">Please Choose</option>
                                <?php
                                  $sql = "select * from source";
                                  $hasil = mysqli_query($mysqli, $sql);
                                  $no=0;
                                  while($source = mysqli_fetch_array($hasil)) {
                                    $no++;
                                    ?>
                                    <option value="<?php echo $source['id_source'];?>"><?php echo $source['name_source'];?></option>
                                  <?php
                                  }
                                ?>
                              </select>
                          </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                              <label for="status">Ticket Status</label>
                            </div>
                            <div class="col-75">
                            <select id="status" name="status">
                                <option value="">Please Choose</option>
                                <?php
                                  $sql = "select * from ticket_status";
                                  $hasil = mysqli_query($mysqli, $sql);
                                  $no=0;
                                  while($status = mysqli_fetch_array($hasil)) {
                                    $no++;
                                    ?>
                                    <option value="<?php echo $status['id_status'];?>"><?php echo $status['name_status'];?></option>
                                  <?php
                                  }
                                ?>
                              </select>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-25">
                              <label for="subdate">Submission Date</label>
                            </div>
                            <div class="col-75">
                              <input type="text" id="subdate" name="submited-date" placeholder="">
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-25">
                              <label for="finish">Finish Date</label>
                            </div>
                            <div class="col-75">
                              <input type="text" id="finish" name="finish" placeholder="">
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-25">
                              <label for="due">Due Date</label>
                            </div>
                            <div class="col-75">
                              <input type="text" id="due" name="due-date" placeholder="">
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-25">
                              <label for="attach">Attachment</label>
                            </div>
                            <div class="col-75">
                              <input type="file" id="attach" name="attach" placeholder="">
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-25">
                              <label for="reported">Reported By</label>
                            </div>
                            <div class="col-75">
                              <input type="text" id="reported" name="reported" placeholder="">
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-25">
                              <label for="remarks">Remarks</label>
                            </div>
                            <div class="col-75">
                              <textarea  name="remarks" rows="10" cols="30" placeholder=""></textarea>
                            </div>
                          </div>
                        <br>
                        <div class="row">
                          <input type="submit" name="Submit" value="Create">
                        </div>
                        </form>
    
                      </div>
                       
                </div>
                
                <!-- Button Login -->

                <!-- Panel body untuk bagian List ticket -->
                

                <!-- <div class="logo"><img src="assets/images/ic_laptop.png"></div>  
				<div class="text-logo">Helpdesk Login</div>
				<div class="text-logo-p">Enter your active credential</div>

				<div class="form__group field">
					<input type="input" class="form__field" placeholder="Name" name="name" id='name' required />
					<label for="name" class="form__label">Username</label>
				  </div>
				<div class="form__group field">
					<input type="input" class="form__field" placeholder="Password" name="name" id='name' required />
					<label for="name" class="form__label">Password</label>
				  </div> -->
				
				  <!-- Button -->
				  
			
			</div>
					<!-- <div class="form-group">                               
						<div class="col-sm-12 controls">
						  <input type="submit" name="login" value="Login" class="btn btn-success">						  
						</div>						
					</div>	 -->
					</div>	
			</div>                     
		</div>  
	</div>
</div>
<?php

// include database connection file
include_once("../../setting/config.php");

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
