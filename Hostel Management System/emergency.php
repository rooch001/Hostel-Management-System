<?php 
session_start();
require('include/db_connect.php');
if($_SESSION['user']=="")
{
    header('location:temp.php');
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
                    <li>
                        <a href="visitors.php"><span class="glyphicon glyphicon-user"></span> Visitor</a>
</li>    <li>
<a href="complaint.php"><span class="glyphicon glyphicon-list-alt"></span> Complaint </a>
</li><li>
                        <a href="request_leave"><span class="glyphicon glyphicon-check"></span> Request Leave </a>
</li><li>
                        <a href="feedback.php"><span class="glyphicon glyphicon-paperclip"></span> Feedback </a></li>
                        <li class="active">
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
                        <h1>Emergency Contact Information</h1>
                        <p style="padding:10px;"></p>
                        <p>Emergency Contacts</p>
                        <p style="padding:10px;"></p>
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