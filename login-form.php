<?php
$link = mysqli_connect("localhost", "root", "","polih");
 
// Check connection
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
 
// Print host information
    echo "Connect Successfully. Host info: " . mysqli_get_host_info($link);

    $sql = "INSERT INTO angajator (nume, dateContact, Email, pasword) VALUES (?, ?, ?,?)";

   if($stmt = mysqli_prepare($link, $sql)){
        mysqli_stmt_bind_param($stmt, "ssss", $company_name,$phone,$email,$password);
        $company_name=$_POST["first"];
        $email=$_POST["email"];
        $password=$_POST["pass"];
        $phone=$_POST["phone"];
        mysqli_stmt_execute($stmt);
   } else{
         echo "ERROR: Could not prepare query: $sql. " . mysqli_error($link);
   }
   


?>