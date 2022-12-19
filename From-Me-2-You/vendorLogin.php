<?php


include ("dbconfig.php"); 
date_default_timezone_set('America/New_York');



if(isset($_POST["login"]) && isset($_POST["password"])){
    $login = mysqli_real_escape_string($conn,$_POST["login"]);
    $pswd = mysqli_real_escape_string($conn,$_POST["password"]);
}


$sql = "SELECT * FROM 2022F_patpanka.VendorLogin WHERE login = '$login' "; 

$result = mysqli_query($conn,$sql); 
$numRows = mysqli_num_rows($result); 
$paswordRow = mysqli_fetch_array($result);


if($result)
{
   if($numRows > 0)
   {    
     if(strcmp($paswordRow["pass"], $pswd) == 0)
     {
      

        setcookie("vendorid", $paswordRow['vendor_id'],time()+ (60*100), "/"); 

        header("location: vendorHomePage.html ");
        
     }
        else{
            setcookie("msg", "Incorrect Username/Password", time()+ (60*100), "/");
            header("location: vendorLogin.html ");
        }

   }
   else {
        setcookie("msg", "Incorrect Username/Password",time()+ (60*100), "/");
        header("location: vendorLogin.php ");
   }
}
else 
    echo "There is something wrong";


   
?>

