<?php
    
try {
    include_once "../config/db.php";
 $name = mysqli_real_escape_string($conn, $_POST['name']);
 $email = mysqli_real_escape_string($conn, $_POST['email']);
 $message = mysqli_real_escape_string($conn, $_POST['message']);
 $date = date("l jS \of F Y h:i:s A");
//  echo $date;
    //code...
    if(!empty($name) && !empty($message) && !empty($email)){
        $sql = "INSERT INTO `contact_us`(`cname`, `cemail`, `cmessage`, `date_added`) 
        VALUES ('".$name."','".$email."','".$message."','".$date."')";
        $query = mysqli_query($conn, $sql);
    
        if($query){
            echo "We have recieved your messasge, We will get back to you as soon as possible!";
        } else {
            header("location:../error.php");
    
        }
    
     } else{
        echo "Please fill do not leave any input empty!";
     }

} catch (\Throwable $th) {
    //throw $th;
    header("location:../error.php");
}
 
 
?>