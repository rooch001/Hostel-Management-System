<?php 
session_start();
require('include/db_connect.php');
if($_SESSION['user']=="")
{
    header('location:temp.php');
}
$u = $_SESSION['user'];  
?>
<?php
$_SESSION['msg']="";
    if(isset($_POST['pass_change']))
    {
        $old = $_POST['cpass'];
        $new = $_POST['npass'];
        $sql1="SELECT password FROM students_info where username='$u'";
        $result1=mysqli_query($conn,$sql1);
        $row = mysqli_fetch_array($result1);
        $row = $row[0];
        if($old == $row)
        {
            $sql2="UPDATE students_info set password ='$new' where username='$u'";
            $result2=mysqli_query($conn,$sql2);
            $_SESSION['msg']="<div class='alert alert-success'>Password Updated Successfully</div>";
        }
        else
        {   
            $_SESSION['msg']="<div class='alert alert-danger'>Invalid current password</div>";
            
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="style/style_hms.css">
    </head>
    <body>
        <div class="wrapper">   
            <nav id="sidebar">
                <div class="sidebar-header">
                <img src="images/logo1.png" alt="logo" width="100%" >
                </div>

                <ul class="list-unstyled components">
                    <p style="font-size:25px;">Menu options</p>
                    <li class="active">
                          <!-- <a href="#menu" data-toggle="collapse" aria-expanded="false"><span class="glyphicon glyphicon-home"></span> Home</a>
                      <ul class="collapse list-unstyled" id="menu">
                            <li><a href="#">Home 1</a></li>
                            <li><a href="#">Home 2</a></li>
                            <li><a href="#">Home 3</a></li>
                        </ul> -->
                    </li>
                    <li>
                        <a  href="home.php"><span class="glyphicon glyphicon-hourglass"></span> Home</a>
                          <!-- <a href="#pagemenu" data-toggle="collapse" aria-expanded="false"><span class="glyphicon glyphicon-duplicate"></span> Pages</a>
                       <ul class="collapse list-unstyled" id="pagemenu">
                            <li><a href="#">Page 1</a></li>
                            <li><a href="#">Page 2</a></li>
                            <li><a href="#">Page 3</a></li>
                        </ul> -->
                    </li>
                    <li>
                        <a href="fee_structure.php"><span class="glyphicon glyphicon-log-in"></span> Fee Status</a>
                    </li>
                    <li >
                        <a href="visitors.php"><span class="glyphicon glyphicon-user"></span> Visitor</a>
</li>    <li>
<a href="complaint.php"><span class="glyphicon glyphicon-list-alt"></span> Complaint </a>
</li><li>
                        <a href="request_leave.php"><span class="glyphicon glyphicon-check"></span> Request Leave </a>
</li><li>
                        <a href="feedback.php"><span class="glyphicon glyphicon-paperclip"></span> Feedback </a></li>
                        <li>
                        <a href="emergency.php"><span class="glyphicon glyphicon-scale"></span> Emergency </a></li>
                        <li class="active">
                        <a href="change_request.php"><span class="glyphicon glyphicon-log-out"></span> Change Password </a>          
                    </li>
                        <li>
                        <a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout </a>          
                    </li>
                </ul>
            </nav>
            <div id="content">

                <nav class="navbar navbar-default">
                    <div class="container-fluid">

                        <div class="navbar-header">
                            <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                                <i id="sidebarCollapse" class="glyphicon glyphicon-menu-hamburger"></i>
                                <span>Symbiosis University of Applied Sciences</span>
                            </button>
                        </div>
                </nav>
                </div> 
                <div style="padding-top:120px;" class="col-md-12 col-sm-12 ">
                        <h1>Change Password</h1>
                        <p style="padding:10px;"></p>
                        <p>Password must contain a Capital, Digit  and  Special character</p>
                        <p style="padding:10px;"></p>
                        <?php echo $_SESSION['msg'] ?>
                <form class = "form-horizontal" method="post">
                                   
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="cpass">Current Password:</label>
                                        <div class="col-sm-5">
                                            <input type="password" class="form-control" name="cpass" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="npass">New Password:</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" name="npass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
                                        </div>
                                    </div>
                                    <input class="col-sm-offset-2" type="submit"  name="pass_change" value="Update Password">
                                   
                              </form>    
                </div>
               
                
                <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
         <!-- Bootstrap Js CDN -->
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

         <script type="text/javascript">
             $(document).ready(function () {
                 $('#sidebarCollapse').on('click', function () {
                     $('#sidebar').toggleClass('active');
                 });
             });
             
         </script>
    </body>
</html>