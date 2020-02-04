<?php
  session_start();

$con = mysqli_connect('localhost', 'root');
if($con){
    echo "<h1 ><strong>We have recieved Your information, We will soon notify you with Your booking details .<br>
    Thank You from Amenity</strong></h1>";
    
}else{
    echo "error ";
}

mysqli_select_db($con,'newwebsite');
 
$name = $_POST['Name'];
$address = $_POST['Address'];
$email = $_POST['Email'];
$mobile = $_POST['Mobile'];
$people = $_POST['people'];
$ask = $_POST['ask'];



$query = "insert into mytable (Name, Address, Email, Mobile,people,ask)  values ('$name', '$address', '$email', '$mobile','$people', '$ask')";

mysqli_query($con, $query);

header('refresh:4; url=index.php');
?>