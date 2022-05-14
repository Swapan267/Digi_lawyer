<?php
     $fname = $_POST['fname'];
     $emailid = $_POST['emailid'];
     $phno = $_POST['phno'];
     $date_picker = $_POST['date_picker'];
     $lawyer_name = $_POST['lawyer_name'];
     $message = $_POST['message'];
     
     //datebase connection
     $conn = new mysqli('localhost','root','','appointment');
     if($conn->connect_error){
         die('connection Failed : '.$conn->connect_error);
     }
     else{
         $stmt = $conn->prepare("insert into appointment_detail(fname, emailid, phno, date_picker, lawyer_name, message)
         values(?, ?, ?, ?, ?, ?)");
         $stmt->bind_param("ssiiss",$fname, $emailid, $phno, $date_picker, $lawyer_name, $message);
         $stmt->execute();
         echo "resgistration Successfully!!!";
         $stmt->close();
         $conn->close();
     }
?>