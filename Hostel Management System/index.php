<?php
session_start();

require('include/db_connect.php');
if(isset($_POST['submit']))
{
	$u = $_POST['username'];
	$pass = $_POST['password'];
	$p = $pass;
	$_SESSION['user']=$u;
	$_SESSION['pass']=$p;
$q = "SELECT * FROM students_info WHERE username='$u' AND password='$p'";
$cq = mysqli_query($conn,$q);
$ret = mysqli_num_rows($cq);
if($ret == true)
{
	echo "<script>document.location='home.php'</script>";
}
else
{
    echo "<script>document.location='logout.php'</script>";
    
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="style/style.css" rel="stylesheet" type="text/css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  </head>
  <body id="roopage" data-spy="scroll" data-target=".navbar" data-offset="60">
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#roonavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
          <a class="navbar-brand" href="#roopage">Logo</a>
        </div>
        <div class="collapse navbar-collapse" id="roonavbar">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#Home">Home</a></li>
            <li><a href="#fee">Fee Structure</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact us</a></li>
            <li><a data-toggle="modal" data-target="#log">Login</a></li>
          </ul>
        </div>
      </div>
    </nav>
    
    <div class="jumbotron text-center">
        <p style="padding:30px"></p>
      <h1>Symbisis University of Applied Sciences</h1> 
      <p style="padding:30px"></p>
      <p>somehtbedfvjdakbv avbdkauj aeabjuk aseagnj</p> 
    </div>
    <div id="log" class="modal fade" role="dialog">
            <div class="modal-dialog modal-md"> 
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Login</h4>
                    </div>
                    <div class="modal-body"> 
                  
                        <form class="form-inline" method="post">
                            <div class="form-group">
                                <label class="sr-only" for="email">Username</label>
                                <input type="text" name="username" class="form-control input-sm" id="email" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="Password">Password</label>
                                <input type="password" name="password" class="form-control input-sm" id="pass" placeholder="Password">
                            </div>&nbsp;
                            <div class="checkbox">
                                <label><input type="checkbox">Remember me</label>
                            </div>&nbsp;
                            <button type="submit" name="submit" value="submit" class="btn btn-info btn">Log in</button>
                        </form>
                    </div>
                </div>
            </div>
        </div> 
    <div class="container-fluid">
    <div class="row row-content">

    </div>
</div>
<div class="container-fluid">
        <div class="row row-content">
    
        </div>
    </div>
    <div class="footer">

    </div>
</body>
</html>    