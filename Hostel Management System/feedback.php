<?php 
session_start();
require('include/db_connect.php');
if($_SESSION['user']=="")
{
    header('location:index.php');
}
$u = $_SESSION['user'];

?>
<?php
   
    $query_name = "select name from students_info where username = '$u'";
    $result_name = $conn->query($query_name);
    $query_email = "select email from students_info where username = '$u'";
    $result_email = $conn->query($query_email);
    $query_phone = "select phone from students_info where username = '$u'";
    $result_phone = $conn->query($query_phone);
    if($result_name->num_rows > 0)
    {
        while($row = $result_name->fetch_assoc())
        {
            $student_name = $row["name"];       
         }
    }
    if($result_email->num_rows > 0)
    {
        while($row = $result_email->fetch_assoc())
        {
            $student_email = $row["email"];       
         }
    }
    if($result_phone->num_rows > 0)
    {
        while($row = $result_phone->fetch_assoc())
        {
            $student_phone = $row["phone"];       
         }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>feedback</title>
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
                         
                    </li>
                    <li>
                        <a  href="home.php"><span class="glyphicon glyphicon-hourglass"></span> Home</a>
                         
                    </li>
                    <li>
                        <a href="fee_structure.php"><span class="glyphicon glyphicon-log-in"></span> Fee Status</a>
                    </li>
                    <li>
                        <a href="visitors.php"><span class="glyphicon glyphicon-user"></span> Visitor</a>
</li>    <li>
<a href="complaint.php"><span class="glyphicon glyphicon-list-alt"></span> Complaint </a>
</li><li>
                        <a href="request_leave.php"><span class="glyphicon glyphicon-check"></span> Request Leave </a>
</li><li class="active">
                        <a href="feedback.php"><span class="glyphicon glyphicon-paperclip"></span> Feedback </a></li>
                        <li>
                        <a href="emergency.php"><span class="glyphicon glyphicon-scale"></span> Emergency </a></li>
                        <li>
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
                        <h1>Feedback</h1>
                        <p style="padding:10px;"></p>
                        <p>We would love to here from you</p>
                        <p style="padding:10px;"></p>

                         <form class="form-horizontal">
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="npass">Name</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" value="<?php echo $student_name ; ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="npass">Phone</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" value="<?php echo $student_phone ; ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="npass">Email</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" value="<?php echo $student_email ; ?>" disabled>
                                        </div>
                                    </div>
                             <div class="form-group">
                                        <label class="control-label col-sm-2" for="course">Course</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" disabled>
                                        </div>
                                    </div>
                                    <div class = "form-group">
                                    <label class="control-label col-sm-2" for = "reason">Feedback</label>
                                    <div class="col-sm-5">
                                    <textarea class = "form-control" rows = "8" style="resize:none;"></textarea>
                                    </div>
                                 </div>
                                 <button type="submit" class="btn btn-info btn-lg col-sm-offset-3">Submit</button>
                                 <button type="reset" class="btn btn-info btn-lg">Reset</button>
                                    </form>
                                    </div>
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