<?php
session_start();
  include("../include/db_connect.php");
if($_SESSION['user_ad'] == "") 
{
    header('location:index.php');
}
if(isset($_POST['submit']))
  {
    $name=$_POST['name'];
    $dob=$_POST['dob'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $city=$_POST['city'];
    $gender=$_POST['g'];
    $state=$_POST['state'];
    $username=$_POST['user'];
    $password=$_POST['pass'];
    $fee_status=$_POST['fee_status'];
    $valid_till=$_POST['valid_till'];
    $sql="INSERT INTO students_info (name,dob,email,phone,gender,city,state,username,password,fee_status,valid_till)
            VALUES ('".$name."','".$dob."','".$email."','".$phone."','".$gender."','".$city."','".$state."','".$username."','".$password."','".$fee_status."','".$valid_till."');
    ";
    if($conn->query($sql) === TRUE)
  {
        echo "<script>alert('Record created successfully');</script>";
  }
  else
  {
    echo "<script>alert('Error Creating Records');</script>";
    
}
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="../style_main.css">
  </head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
  <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#roonavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
      <a class="navbar-brand" href="a_home.php">WELCOME ADMIN</a>
    </div>
    <div class="collapse navbar-collapse" id="roonavbar">
    <ul class="nav navbar-nav">
      <li class="active"><a href="#"><span class="fa fa-home" ></span> Home</a></li>
      
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-stats"></span> Admin
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a data-toggle="modal" data-target="#log" href="#"><span class="glyphicon glyphicon-lock"></span> Change Password</a></li>
          <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
        </ul>
      </li>
      <li><a href="#"><span class="glyphicon glyphicon-exclamation-sign"></span> Contact Developer</a></li>
      
    </ul>
    </div>
  </div>
</nav>
<div class="container"><h2>Admin</h2></div>
<div id="exTab3" class="container">	
<ul  class="nav nav-pills">
			<li class="active">
        <a  href="#1" data-toggle="tab"><span class="glyphicon glyphicon-plus-sign"></span> ADD MEMBER</a>
			</li>
			<li><a href="#2" data-toggle="tab"><span class="glyphicon glyphicon-th"></span> DATABASE STUDENTS</a>
			</li>
			<li><a href="#3" data-toggle="tab"><span class="glyphicon glyphicon-inbox"></span> NEWS</a>
			</li>
  		<li><a href="#4" data-toggle="tab"><span class="glyphicon glyphicon-print"></span> FEE STRUCTURE</a>
			</li>
        </ul>
    <div style="padding-bottom:30px;" class="tab-content clearfix">
			  <div class="tab-pane active" id="1">
        <div class="container">
          <div class="row">
          <h3 style="text-align:center;"><span class="glyphicon glyphicon-user"></span> ADD STUDENT</h3>
            <div class="col-sm-offset-3">
            <p style="padding:10px;"></p>
            <form class="form-horizontal" method="post">
              
                                <div class="form-group">
                                <label class="control-label col-sm-2" for="name">Name:</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="name" required >
                                </div>
                                </div>
                                <div class="form-group">
                                <label class="control-label col-sm-2" for="dob">Date of Birth: </label>
                                <div class="col-sm-5">          
                                    <input type="date" class="form-control" name="dob" required>
                                </div>
                                </div>
                                <div class="form-group">
                                <label class="control-label col-sm-2" for="gender">Gender: </label>
                                <div class="col-sm-5"> 
                                <div class="radio-inline">
                                  <label class="radio-inline"><input type="radio" name="g" required> Male</label>  
                                  <label class="radio-inline"><input type="radio" name="g"  required> Female</label>
                                </div>
                                </div>
                                </div>
                                <div class="form-group">
                                <label class="control-label col-sm-2" for="email">Email: </label>
                                <div class="col-sm-5">          
                                    <input type="email" class="form-control" name="email" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="phone">Phone: </label>
                                <div class="col-sm-5">          
                                    <input type="number" class="form-control" name="phone"  required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="city">City: </label>
                                <div class="col-sm-5">          
                                    <input type="text" class="form-control" name="city"  required >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="status">State: </label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="state" required >
                                </div>
                                </div>
                                <div class="form-group">
                                <label class="control-label col-sm-2" for="fee_status">Fee status: </label>
                                <div class="col-sm-5">
                                    <select class="form-control" name="fee_status"  required>
                                      <option >paid</option>
                                      <option >pending</option>
                                    </select>
                                </div>
                                </div>
                                <div class="form-group">
                                <label class="control-label col-sm-2" for="dob">Valid till </label>
                                <div class="col-sm-5">          
                                    <input type="date" class="form-control" name="valid_till" required>
                                </div>
                                </div>
                                <div class="form-group">
                                <label class="control-label col-sm-2" for="user">Username: </label>
                                <div class="col-sm-5">          
                                    <input type="text" class="form-control" name="user" required >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="city">Password: </label>
                                <div class="col-sm-5">          
                                    <input type="text" class="form-control" name="pass"  required >
                                </div>
                            </div>
                                <button type="submit" name="submit" class="btn btn-default btn-lg col-sm-offset-3">Submit</button>
                                 <button type="reset" class="btn btn-default btn-lg">Reset</button>
                            </form> 
            </div>
          </div>
      </div>  
       
        
      </div>
        <div id="log" class="modal fade" role="dialog">
            <div class="modal-dialog modal-md"> 
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 style="color:black;" class="modal-title">Change Password</h4>
                    </div>
                    <div class="modal-body"> 
                  
                        <form class="form-inline" method="post">
                            <div class="form-group">
                                <label class="sr-only" for="email">Current Password</label>
                                <input type="text" name="username" class="form-control" id="email" placeholder="current password">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="Password">New Password</label>
                                <input type="password" name="password" class="form-control " id="pass" placeholder="new password">
                            </div>&nbsp;
                            
                            <button type="submit" name="submit" value="submit" class="btn btn-warning btn">Update Password</button>
                        </form>
                    </div>
                </div>
            </div>
        </div> 
				<div class="tab-pane" id="2">
        <div id='content' class="container-fluid">
          <div class="row">
          <h3 style="text-align:center;"><span class="glyphicon glyphicon-book"></span> DATABASE</h3>
          <p style="padding:10px;"></p>
          <p><b>NOTE: </b><br> * Date format : YYYY/MM/DD <br>  * Gender : m/f  <br>*  Fee_Status : Paid/Pending</p>
            <div class="col-sm-12">
            <p style="padding:10px;"></p>
         <?php
              echo "<div  class='table-responsive'>";
              $sql = "select stu_id,name,email,phone,city,dob,gender,state,fee_status,valid_till from students_info order by name";
              $result = $conn->query($sql);
              if($result->num_rows>0)
              {
                echo "<table id='editable_table' class='table'><tr><th>ID</th><th>Name</th><th>Date of Birth</th><th>Email</th><th>Phone</th><th>Gender</th>
                <th>City</th><th>State</th><th>Fee Status</th><th>Valid till</th></tr>";
                while($row = $result->fetch_assoc())
                {
                    echo "<tr><td>".$row["stu_id"]."</td><td>".$row["name"]."</td><td>".$row["dob"]."</td><td>"
                    .$row["email"]."</td><td>".$row["phone"]."</td><td>".$row["gender"]."</td><td>".$row["city"]."</td><td>"
                    .$row["state"]."</td><td>".$row["fee_status"]."</td><td>".$row["valid_till"]."</td><td>";
                }
                echo "</table></div>";
              }
              else{
                echo "Nothing in the database yet.";
              }
          ?>
          </div>
            </div>
            </div>
				</div>
        <div class="tab-pane" id="3">
              <div class="container-fluid">
                  <div class="row">
          <h3 style="text-align:center;"><span class="glyphicon glyphicon-th-list"></span> ADD TEXT TO MARQUEE</h3>
                      <h4>Current Marquee Text:</h4>
                      <?php 
                            $que = "select * from news";
                            $result=$conn->query($que);
                            if($result->num_rows >0)
                            {
                                while($row = $result->fetch_assoc())
                                {
                                    echo "<h5>".$row['news_marquee']."</h5>";
                                }
                            }
                            else
                            {
                                echo "No Content Available";
                            }
                      ?>
                      <p style="padding:10px;"></p>
        <textarea name="editor1"></textarea>
            </div>
            </div>
			</div>
  
  <div class="tab-pane" id="4">
              <div class="container-fluid">
                  <div class="row">
          <h3 style="text-align:center;"><span class="glyphicon glyphicon-print"></span> FEE STRUCTURE</h3>
          <div class="col-sm-12">
            <p style="padding:10px;"></p>
         <?php
              echo "<div  class='table-responsive'>";
              $sql = "select * from fee_structure ";
              $result = $conn->query($sql);
              if($result->num_rows>0)
              {
                echo "<table id='editable_table_2' class='table'><tr><th>Id</th><th>Hostel Fee</th><th>Amount </th><th>Payment terms</th></tr>";
                while($row = $result->fetch_assoc())
                {
                    echo "<tr><td>".$row["id"]."</td><td>".$row["hostel_fee"]."</td><td>".$row["amount"]."</td><td>".$row["payment_terms"]."</td></tr>";
                }
                echo "</table></div>";
              }
              else{
                echo "Nothing in the database yet.";
              }
          ?>
          </div>
             </div>
            </div>
            </div>
            </div>
            </div>
            <h1 style="padding-top:100px;"></h1>
        <div class="container-fluid">
          <div style="min-height:100px; background:#ff3b38; margin-top:20px; color:white; padding-top:40px; " class="row-   footer">
                <div class="col-sm-12 col-md-8">
                      &copy; Symbiosis University Of Applied Sciences 
                </div>
                <div  class="col-sm-12 col-md-4">
                      <a style="color:white;" href="Developers">Developers</a>
                </div>
          </div>
            
        </div>
        <script src="https://cdn.ckeditor.com/4.7.3/full/ckeditor.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <script src="../script/jquery.tabledit.js"></script>
    <script>
        $(document).ready(function(){  
            
     $('#editable_table').Tabledit({
      url:'action.php',
      columns:{
       identifier:[0, "stu_id"],
       editable:[[1, 'name'], [2, 'dob'],[3,'email'],[4,'phone'],[5,'gender'],[6,'city'],[7,'state'],[8,'fee_status'],[9,'valid_till']]
      },
      restoreButton:false,
      onSuccess:function(data, textStatus, jqXHR)
      {
       if(data.action == 'delete')
       {
        $('#'+data.stu_id).remove();
       }
      }
     });
        });
     $(document).ready(function(){  
            
     $('#editable_table_2').Tabledit({
      url:'action1.php',
      columns:{
       identifier:[0, "id"],
       editable:[[1, 'hostel_fee'], [2, 'amount'],[3,'payment_terms']]
      },
      restoreButton:false,
      onSuccess:function(data, textStatus, jqXHR)
      {
       if(data.action == 'delete')
       {
        $('#'+data.id).remove();
       }
      }
     });
});  

			CKEDITOR.replace( 'editor1' );
		

    </script>
</body>
</html>




