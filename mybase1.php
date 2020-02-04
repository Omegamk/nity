<?php
   $con = mysqli_connect('localhost','root');

if($con){
    echo "connection successful";
    
}else{
    echo "error be";
}

mysqli_select_db($con, 'mybase1');


$name = $_POST['fname'];
$name  = $_POST['lname'];
$mobile1 = $_POST['mobile'];
 $email1 = $_POST['email'];

$query = "insert into mybase1 (fname, lname, mobile, email)  values ('$name', '$name', '$mobile1', '$email1')";

    
echo "$query";

mysqli_query($con, $query);
?>