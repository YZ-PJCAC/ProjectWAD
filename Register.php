<?php

include 'connect.php';

if (isset ($_POST['Confirm'])) {  //forget to change button name "confirm"
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];
    $Password = md5($_POST['Password']); //encript password to decimal number
    

    $checkemail = "SELECT * FROM user_login where Email='$Email'";
    $result = $conn->query($checkemail);     //check email is it already register
    if ($result->num_rows > 0) {
        echo "Email Address already Exists.";   
}
else {
$insertQuery="INSERT INTO user_login(Email, Password)
 VALUES('$Email', '$Password')";

 if($conn->query($insertQuery)==TRUE){
    header("Location: Dashboard.php");
  exit();
 }
else{
    echo "Error:".$conn->error;
}
}
}
?>