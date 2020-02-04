<?php

if(isset($_POST['submit'])){
$name = $_POST['fname'];
$name  = $_POST['lname'];
$mobile1 = $_POST['mobile'];
 $email1 = $_POST['email'];

$to = 'hmrigank@gmail.com';
$subject ='form submission';
$message="name : ".$name."\n "."phone: ".$mobile1. "\n". "wrote the following: "."\n\n".$email1;
$headers= "from:  ".$email1;
if(mail($to, $subject , $message, $headers) ){
    echo "sent succesfull";
}else{
    echo "spmething rong";
}
}


?>