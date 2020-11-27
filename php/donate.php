<?php

	//donation form  By Aditya
	//if($_SERVER["REQUEST_METHOD"] == "POST"){
        require_once("database.php"); 
       
        $first_name = $_POST["first-name"];
        $last_name = $_POST["last-name"];
        $email = $_POST["email"];
        $mobile  = $_POST["mobile"];
        $pan = $_POST["pan"];    
        $country = $_POST["country"];
        $note = $_POST["add-note"];
        $don_type =$_POST["don-type"];
        $amount = $_POST["amount"];
        $org = $_POST["org_name"];
        echo "$first_name";
        echo "$last_name";
        echo "$email";
        echo $mobile;
        echo $pan;
        echo $country;
        echo $note;
        echo "$amount";
        echo $don_type;
        echo $org;
        echo "<br>";
        
        $sql1 = pg_query($conn,"select org_id from organization where org_name='$org'") or die("could");
            if($sql1){
                while($row = pg_fetch_assoc($sql1))
                {
                    $org_id = $row['org_id']; 
                }
            }

        echo $org_id;
        $sql2 = "INSERT INTO donation(first_name,last_name,email,mobile_no,pan,country,amount_status,amount,comment,org_id) values ('$first_name','$last_name','$email','$mobile','$pan','$country','$don_type','$amount','$note','$org_id')";
        $result = pg_query($conn,$sql2) or die("could");

        pg_close($conn);		 

   // }

?>