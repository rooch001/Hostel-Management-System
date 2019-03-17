<?php  
include("../include/db_connect.php");

$input = filter_input_array(INPUT_POST);

$fee = mysqli_real_escape_string($conn, $input["hostel_fee"]);
$amount= mysqli_real_escape_string($conn, $input["amount"]);
$terms = mysqli_real_escape_string($conn, $input["payment_terms"]);


if($input["action"] === 'edit')
{
 $query = "
 UPDATE fee_structure
 SET hostel_fee = '".$fee."', 
 amount = '".$amount."' ,
 payment_terms = '".$terms."' 
 WHERE id = '".$input["id"]."'
 ";

 mysqli_query($conn, $query);

}
if($input["action"] === 'delete')
{
 $query = "
 DELETE FROM fee_structure
 WHERE id = '".$input["id"]."'
 ";
 mysqli_query($conn, $query);
}

echo json_encode($input);

?>