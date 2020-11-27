<?php
     //contact by Aditya
     //if($_SERVER["REQUEST_METHOD"] == "POST"){
     require_once("database.php");

     $fname = $_POST["first-name"];
     $lname = $_POST["last-name"];
     $email = $_POST["email"];
     $mobile_no = $_POST["mobile"];
     $msg = $_POST["cmsg"];

    print_r ($_POST);

    echo $email;

    $sql1 = "INSERT INTO contact(contact_id,first_name,last_name,email,mobile_no,msg) values(default,'$fname','$lname','$email','$mobile_no','$msg')";
    $result = pg_query($conn,$sql1); 
        
    pg_close($conn);		
  //}
?>