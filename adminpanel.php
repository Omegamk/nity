
<?php include 'impo.php'?>
<?php




   function fetch_data()
   {
       
       $output = '';
       $conn = mysqli_connect("localhost", "root","", "newwebsite");
       $sql = "SELECT * FROM  mytable  ORDER BY id ASC";
       $result = mysqli_query($conn,$sql);
       
       
       while($row = mysqli_fetch_array($result))
           
       {
           
           $output .= '<tr>
            <td> '.$row["id"].'</td>
            <td> '.$row["Name"].'</td>
            <td> '.$row["Address"].'</td>
            <td> '.$row["Email"].'</td>
            <td> '.$row["Mobile"].'</td>
            <td> '.$row["people"].'</td>
          <td> '.$row["ask"].'</td>




           
           </tr>';
           
       }
       return $output;
   }



?>

<!DOCTYPE html>
    <html>
    <head>
                 <title>admin page</title>
   
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
    
    <br />
    <div class="container">
      <h4 align="center">The place where you can access every booking details</h4><br />
     <div class="table-responsive">
          <div class="col-md-12" align="right">
          <form method="post">
         <input type="submit" name="generate_pdf " class="btn btn-primary" value="Generate PDf"/>
        
         
    
    </form>
    
    </div>
    <div style="width:1200px; margin:0 auto;">
     <a href="logout.php"><button class="btn btn-success" style="possition:center;">Logout</button></a> 
   </div>
    <br />
    <br />
    <div class="w-50 m-auto">
       <div class="form-group">
           <table class="table table-bordered">
         <tr >
            <th width="5%">ID</th>
            <th width="30">Name</th>
            <th width="15">Address</th>
            <th width="50">Email</th>
            <th width="50">Mobile</th>
            <th width="50">people</th>
            <th width="50">ask</th>
            
            </tr>
    <?php 
    echo fetch_data();
?></table>
       </div>
        
    </div>
     
</div>
</div>
   
   
    </body>
</html>