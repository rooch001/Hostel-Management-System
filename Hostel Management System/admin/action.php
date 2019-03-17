<?php  
include("../include/db_connect.php");

$input = filter_input_array(INPUT_POST);

$name = mysqli_real_escape_string($conn, $input["name"]);
$email= mysqli_real_escape_string($conn, $input["email"]);
$dob = mysqli_real_escape_string($conn, $input["dob"]);
$phone= mysqli_real_escape_string($conn, $input["phone"]);
$city = mysqli_real_escape_string($conn, $input["city"]);
$state= mysqli_real_escape_string($conn, $input["state"]);
$fee_status = mysqli_real_escape_string($conn, $input["fee_status"]);
$valid_till= mysqli_real_escape_string($conn, $input["valid_till"]);
$gender = mysqli_real_escape_string($conn, $input["gender"]);

if($input["action"] === 'edit')
{
 $query = "
 UPDATE students_info 
 SET name = '".$name."', 
 email = '".$email."' ,
 phone = '".$phone."' ,
 dob = '".$dob."' ,
 city = '".$city."' ,
 state = '".$state."' ,
 gender = '".$gender."' ,
 fee_status = '".$fee_status."' ,
 valid_till = '".$valid_till."' 
 WHERE stu_id = '".$input["stu_id"]."'
 ";

 mysqli_query($conn, $query);

}
if($input["action"] === 'delete')
{
 $query = "
 DELETE FROM students_info
 WHERE stu_id = '".$input["stu_id"]."'
 ";
 mysqli_query($conn, $query);
}

echo json_encode($input);

?>



