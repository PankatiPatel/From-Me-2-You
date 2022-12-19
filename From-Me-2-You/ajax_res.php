

<?php 

$host = "imc.kean.edu";
$username = "patpanka";
$password = "1129006";
$dbname = "2022F_patpanka";


$conn = mysqli_connect($host, $username, $password, $dbname)
or die ("<br> Connection error". mysqli_connect_error());


if(isset($_POST['action']) && $_POST['action'] == "search_zip")
{
 
  global $conn;
  $zip = $_POST['zip_code'];
  $query="select zipcode , name, address , tel ,longitude ,  latitude , vendorId from Vendor where zipcode = '$zip'";
$result = mysqli_query($conn,$query);

//$zip_data = array();
$html = "";
$count=0;
$lat_lon = array();
while($row = mysqli_fetch_assoc($result)) {
$html .='<div class="vendor_details"><p><b>Name: </b>'.$row['name'].'</p> <p><b>Address: </b>'.$row['address'].'</p> <p><b>Zip Code: </b>'.$row['zipcode'].'</p><p> <p><b>Phone: </b>'.$row['tel'].'</p><p><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></p>
<form action = "products.php" method = "get">
<input type = "hidden" name = "vendor_id" value = "'. $row["vendorId"].'">
<input type = "submit" value = "Select Vendor">
</form></div>';

$lat_lon[$count]['name'] = $row["name"];
$lat_lon[$count]['lat'] = $row["latitude"];
$lat_lon[$count]['lng'] = $row["longitude"];

// $lat_lon = array(
//     $count => array($row["longitude"],$row["latitude"])
// );

$count++;

}

$js_array = json_encode($lat_lon);
  echo json_encode(['html'=>$html , 'js_array' => $js_array]);
}