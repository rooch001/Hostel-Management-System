<?php
    define('DB_SERVER','localhost');
    define('DB_USER','root');
    define('DB_PASSWORD','');
    define('DB_NAME','suas_hms');
    $conn = mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_NAME);
    if($conn === false)
    {
        die("Error: Could not connect to database ".mysqli_connect_error());
    }
    
?> 