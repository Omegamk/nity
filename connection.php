<?php
  

?>
<form autocomplete=“off” action="adminpanel.php" method="post">
   Username<input type="text" name="username" value="" autocomplete=“nope”/><br><br>
      Password<input type="password" name="password" value="" autocomplete=“nope”/><br><br>
      <input type="submit" name="submit" value="login">
       
    
</form>


<?php 

 session_start();

$con = mysqli_connect('localhost', 'root','', 'newwebsite');
if($con){
    echo "You are connected";
    
}else{
    echo "You are not connected ";
}


if(isset($_POST['submit']))
{
    $user = $_POST['username'];
    $pwd  = $_POST['password'];
    $query = "SELECT * FROM mytable WHERE username='$user' && password='$pwd'";
    $data = mysqli_query($con,$query);
    $total = mysqli_num_rows($data);
    if($total==1){
        $_SESSION['user_name']=$user;
        header('location:adminpanel.php');
    }else{
        echo "Wrong username or password";
    }
    
}

?>
