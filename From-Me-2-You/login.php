<?php


include ("dbconfig.php"); 
date_default_timezone_set('America/New_York');



if(isset($_POST["login"]) && isset($_POST["password"])){
    $login = mysqli_real_escape_string($conn,$_POST["login"]);
    $pswd = mysqli_real_escape_string($conn,$_POST["password"]);
}


$sql = "SELECT * FROM 2022F_patpanka.Users WHERE email = '$login' "; 

$result = mysqli_query($conn,$sql); 
$numRows = mysqli_num_rows($result); 
$paswordRow = mysqli_fetch_array($result);


if($result)
{
   if($numRows > 0)
   {    
     if(strcmp($paswordRow["pass"], $pswd) == 0)
     {
      
        unset($_COOKIE['msg']);
        setcookie("msg",'', time() - (60*100), "/");
        setcookie("id", $paswordRow['userId'],time()+ (60*100), "/"); 
        setcookie("msg", "Welcome ". $paswordRow["fName"]. $paswordRow["lName"], time()+ (60*100), "/");
        header("location: index.html ");
        
     }
        else{
            setcookie("msg", "Incorrect Username/Password", time()+ (60*100), "/");
            header("location: loginForm.php ");
        }

   }
   else {
        setcookie("msg", "Incorrect Username/Password",time()+ (60*100), "/");
        header("location: loginForm.php ");
   }
}
else 
    echo "There is something wrong";


   
?>

