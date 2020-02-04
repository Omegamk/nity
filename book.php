<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">
    <title>Best Guest house</title>
    
    
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/starter-template/">

    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

   
    <link href="css/style.css" rel="stylesheet" type="text/css">

</head>

<body>

<?php  include 'menu.php' ?>
    <main role="main" class="container">

        <div class="text-center mt-5 pt-5">
            <h1>Book You room here</h1>
            <p class="lead">Type Your data here and submit you booking . We will notify you as soon as we recieve Your data , </p>
        </div>
 
         <div class="w-50 m-auto">  
    <form name="RegForm" action="registration.php" onsubmit="return mFunction()" method="post">  
     <div class="form-group">
      
    <p>Name: <input type="text" class="form-control" size=65 name="Name"> </p><br>        
    <p> Address: <input type="text" class="form-control" size=65 name="Address">  </p><br> 
    <p>E-mail Address: <input type="text" class="form-control" size=65 name="Email">  </p><br> 
     <p>Mobile: <input type="text" class="form-control" size=65 name="Mobile"> </p><br> 
     
           
    <p>SELECT HOW MANY PEOPLE   
        <input type="text" size=20 class="form-control" name="people"></p><br>
    <p>Ask Any question:  <textarea cols="55" class="form-control" name="ask">  </textarea></p> 
    <p><input type="submit"  value="send" name="Submit">      
        <input type="reset"  value="Reset" name="Reset">   
    </p>  
          </div> 
  
</form>
  
    </div>  
    </main><!-- /.container -->
<div >
    <br/>
    <br/>
    <br/>
</div>

<footer class="page-footer font-small indigo">

  <!-- Footer Links -->
  <div class="container">

    <!-- Grid row-->
    <div class="row text-center d-flex justify-content-center pt-5 mb-3">

      <!-- Grid column -->
      <div class="col-md-2 mb-3">
        <h6 class="text-uppercase font-weight-bold">
          <a href="index.php">HOME</a>
        </h6>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 mb-3">
        <h6 class="text-uppercase font-weight-bold">
          <a href="gallery.php">GALLERY</a>
        </h6>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 mb-3">
        <h6 class="text-uppercase font-weight-bold">
          <a href="book.php">BOOK</a>
        </h6>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 mb-3">
        <h6 class="text-uppercase font-weight-bold">
          <a href="connection.php">ADMIN</a>
        </h6>
      </div>
      
    </div>
    <!-- Grid row-->
    <hr class="rgba-white-light" style="margin: 0 15%;">

    <!-- Grid row-->
    <div class="row d-flex text-center justify-content-center mb-md-0 mb-4">

      <!-- Grid column -->
      <div class="col-md-8 col-12 mt-5">
        <p style="line-height: 1.7rem">
            One Of The Best Guest House Ever.</p>
            <h5 class="font-weight-bold text-uppercase mb-4">Address</h5>

        <ul class="list-unstyled">
          <li>
            <p>
              <i class="fas fa-home mr-3"></i>  Lumshyiap, Golf Links, Shillong, Meghalaya 793001 </p>
          </li>
          <li>
            <p>
              <i class="fas fa-envelope mr-3"></i> amenityguesthouse@gmail.com</p>
          </li>
          <li>
            <p>
              <i class="fas fa-phone mr-3"></i> 0364-2592068 , 0364-7960734</p>
          </li>
          <li>
            <p>
              <i class="fas fa-mobile mr-3"></i>6009888505, 6009859600</p>
          </li>
        </ul>

        
      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row-->
    <hr class="clearfix d-md-none rgba-white-light" style="margin: 10% 15% 5%;">

    <!-- Grid row-->
    <div class="row pb-3">

      <!-- Grid column -->
      <div class="col-md-12">

        <div class="mb-5 flex-center">

          <!-- Facebook -->
          <a href ="https://mdbootstrap.com/docs/jquery/navigation/footer/#!"class="fb-ic">
            <i class="fab fa-facebook-f fa-lg white-text mr-4"> </i>
          </a>
          <!-- Twitter -->
          <a class="tw-ic">
            <i class="fab fa-twitter fa-lg white-text mr-4"> </i>
          </a>
          <!--Instagram-->
          <a class="ins-ic">
            <i class="fab fa-instagram fa-lg white-text mr-4"> </i>
          </a>
          <!--Pinterest-->
          <a class="pin-ic">
            <i class="fab fa-pinterest fa-lg white-text"> </i>
          </a>

        </div>

      </div>
      

    </div>
    

  </div>
  

</footer>
        <h5 style="text-align: center ; text-underline-position: alphabetic;">&copy;Amenity</h5>
        
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
<script>
    </script>
<script> 
    
function mFunction()								 
{ 
	var name = document.forms["RegForm"]["Name"];			 
	var address = document.forms["RegForm"]["Address"]; 
	var email = document.forms["RegForm"]["Email"]; 
	var mobile = document.forms["RegForm"]["Mobile"]; 
	var ask = document.forms["RegForm"]["ask"]; 
	var people = document.forms["RegForm"]["people"]; 

	if (name.value == "")								 
	{ 
		window.alert("Please enter your name."); 
		name.focus(); 
		return false; 
	} 

	if (address.value == "")							 
	{ 
		window.alert("Please enter your address."); 
		address.focus(); 
		return false; 
	} 
	
	if (email.value == "")								 
	{ 
		window.alert("Please enter a valid e-mail address."); 
		email.focus(); 
		return false; 
	} 

	if (mobile.value == "")						 
	{ 
		window.alert("Please enter your telephone number."); 
		phone.focus(); 
		return false; 
	} 

	if (Ask.value == "")					 
	{ 
		window.alert("Ask Any question"); 
		password.focus(); 
		return false; 
	} 
    if (people.value == "")					 
	{ 
		window.alert("Please enter amount of people"); 
		password.focus(); 
		return false; 
	} 
	if (what.selectedIndex < 1)				 
	{ 
		alert("Please enter your course."); 
		what.focus(); 
		return false; 
	} 

	return true; 
}</script> 

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min/js"></script>
  
  <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>