
<?php
session_start();
if($_SESSION['role'] == '') {
    header("location:../index.php");
}
// Create database connection using config file
include_once("../setting/config.php");
 
// Fetch all users data from database
$sql = "SELECT * FROM ticket a 
inner join ticket_status b on a.id_status=b.id_status
inner join project c on a.id_project=c.id_project";
$result = mysqli_query($mysqli, $sql) or die (mysqli_error($mysqli));
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../assets/dashboard/style.css">
</head>
<body>
<title>Helpdesk Ticketing</title>
<div class="container">	
	<div class="col-md-6">                    
		<div class="panel panel-info">
			<div class="panel-heading">
				<div class="panel-title">HELPDESK <span class="panel-span">TICKETING</span></div>
                <div class="panel-user">
                    <h1 class="title"><?php echo $_SESSION['username']; ?></h1>
                    <img class="user-photo" src="../assets/dashboard/assets/images/avatar.png">
                        <img class="user-down" src="../assets/dashboard/assets/images/ic_down.png">
                        <div class="dropdown-content">
                        <a href="#">Link 1</a>
                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a>
                        </div>
                        </div>
                    
                </div>                        
			</div>

			<!-- Panel Body -->
			<div class="panel-body" >
				<!-- Panel Body untuk bagian filter -->
                <div class="panel-body-filter">
                        <form action="/action_page.php">
                        <div class="row">
                          <div class="col-25">
                            <label for="fname">Ticket Number</label>
                          </div>
                          <div class="col-75">
                            <input type="text" id="fname" name="firstname" placeholder="Your name..">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-25">
                            <label for="lname">Ticket Title</label>
                          </div>
                          <div class="col-75">
                            <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-25">
                            <label for="country">Project</label>
                          </div>
                          <div class="col-75">
                          <select id="project" name="project">
                                <option value="">Please Choose</option>
                                <?php
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
                              <label for="country">Ticket Status</label>
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
                        <br>
                        <div class="row">
                          <input type="submit" value="Search">
                        </div>
                        <div class="btn-filter">
                            <a class="filter" href="show_filter.html">Show Filter</a>
                          </div>
                        </form>
                      </div>
                       
                </div>
                
                <!-- Button Login -->
                <div class="btn"><a class="login" href="create/create_ticket.php">Create</a></div> 

                <!-- Panel body untuk bagian List ticket -->
                <div class="panel-body-list">
                    <table class="customers">
                      <thead>
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
        echo "<td>".$user_data['nama_application']."</td>";
        echo "<td>".$user_data['problem_detail']."</td>";
        echo "<td>".$user_data['name_status']."</td>";   
        echo "<td>".$user_data['assigned_to']."</td>";
        echo "<td>".$user_data['submission_date']."</td>";
        echo "<td>".$user_data['finish_date']."</td>";
        echo "<td>".$user_data['due_date']."</td>";
        echo "<td>".$user_data['remarks']."</td>"; 
    }
    ?>
                    </tbody>
                      </table>
                </div>

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


</body>
</html>
