include_once('connection.php');



$npm = addslashes(htmlentities($_POST['id']));

$nama = addslashes(htmlentities($_POST['name']));

$prodi = addslashes(htmlentities($_POST['position']));

$fakultas = addslashes(htmlentities($_POST['department']));



$insert = "INSERT INTO employee(id,name,position,department) VALUES ('$id','$name','$position','$department')";



$exeinsert = mysqli_query($connection,$insert);



$response = array();



if($exeinsert)

{

  $response['code'] =1;

  $response['message'] = "Success! Data Inserted";

}else{

  $response['code'] =0;

  $response['message'] = "Failed! Data Not Inserted";

}



echo json_encode($response);