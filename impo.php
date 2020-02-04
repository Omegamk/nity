
<?php 

include("connection.php");

$user = $_SESSION['user_name'];

if($user == true){
    
}else{
  header('location:index.php');
}
 $query = "SELECT * FROM mytable WHERE username='$user'";
    $data = mysqli_query($con,$query);
    $result = mysqli_fetch_assoc($data);
    

?>