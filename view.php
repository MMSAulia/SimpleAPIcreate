include_once('connection.php');
$query = "SELECT * FROM employee";
$result = mysqli_query($connection,$query);
$array_data = array();
while($baris = mysqli_fetch_assoc($result))
{
  $array_data[]=$row;
}

echo json_encode($array_data);