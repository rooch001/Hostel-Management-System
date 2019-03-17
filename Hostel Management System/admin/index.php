<?php
    session_start();
    
    require('../include/db_connect.php');
    if(isset($_POST['submit']))
    {
        $u = $_POST['username_a'];
        $pass = $_POST['password_a'];
        $p = $pass;
        $_SESSION['user_ad']=$u;
        $_SESSION['pass_ad']=$p;
    $q = "SELECT * FROM admin WHERE username='$u' AND password='$p'";
    $cq = mysqli_query($conn,$q);
    $ret = mysqli_num_rows($cq);
    if($ret == true)
    {
        echo "<script>document.location='a_home.php'</script>";
    }
    else
    {
        echo"<script>document.location='logout.php'</script>";      
    }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title><?php ?></title>
</head>
<body>
    <div class="container">
        <fieldset>
            <legend><b>Admin Hostel Management System</b></legend>
            <form method="post">
                <table>
                    <tr>
                        <td>
                            <label for="username">Username</label>
                        </td>
                        <td>
                            <input type="text" name="username_a" id="user">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="password">Password</label>
                        </td>
                        <td>
                            <input type="password" name="password_a" id="pass">
                        </td>
                    </tr>
                    <tr style="text-align:center;">
                        <td colspan = "2">
                            <button style="font-size: 16px" name ="submit" type="submit">Submit</button>
                            <button style="font-size: 16px" type="reset">Reset</button>
                        </td>
                    </tr>
                </table>
            </form>
        </fieldset>
        
    </div>
</body>
</html>