 <?php

$loginid= $_POST['login_id'];
$passwd1= $_POST['passwd1'];
$passwd2= $_POST['passwd2'];
$first_name= $_POST['first_name'];
$last_name= $_POST['last_name'];
$tel= $_POST['tel'];
$address= $_POST['address'];
$city= $_POST['city'];
$zipcode= $_POST['zipcode'];
$State= $_POST['State'];
$Email= $_POST['Email'];



include "dbconfig.php";

$conn = mysqli_connect($server,$login,$password,$dbname);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// if ($passwd1!== $passwd2 || empty($_POST['pword1'])) {
//     echo 'Your passwords do not match Or you did not enter a password. Please enter again';
//     mysqli_close($conn);
// }
else{
$sql = "INSERT INTO 2022F_patpanka.Users (userId,pass,fName,lName,tel,address,city,zipcode, state,email)
VALUES ('$loginid','$passwd1','$first_name','$last_name','$tel','$address','$city','$zipcode','$State','$Email')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}



?> 

