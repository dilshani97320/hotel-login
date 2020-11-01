<?php include'inc/connection.php';?>
<!DOCTYPE html>
<html>
<head>
	<title>login/regstration</title>
	<link rel="stylesheet" href="style2.css">
    
    <script src="https://kit.fontawesome.com/e9ec357a27.js" crossorigin="anonymous"></script> 

</head>
<body>



<?php

if(isset($_POST['submit'])){

$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$hashed_password=sha1($password);
echo "$username $email $password";
$query="INSERT into user (username,email,password,status) VALUES('$username','$email','$hashed_password',1)";
  $result=mysqli_query($connection,$query);
  if($result)
    echo "record is added";
  else {
    echo "record is not added";
  }

}



?>









<div class="form-box">
	   
<div class="button-box">
		<div id ="btn"></div>
			<button type="button" class="toggle-button" onclick="register()">Register</button>
			<button type="button" class="toggle-button" onclick="login()">Login</button>
		
	</div>

   <div class="input-box" id="register">

	<form  action="process.php" method="POST">
    <div class="control">
    <label>Username</label>
    <input type="text" name="username" placeholder="Enter Username" id="username">
    <i class="fas fa-check-circle"></i>
    <i class="fas fa-exclamation-circle"></i>
    <small>Error message</small>
</div>
<div class="control">
    <label>Email</label>
    <input type="email" name="email" placeholder="Enter email" id="email">
    <i class="fas fa-check-circle"></i>
    <i class="fas fa-exclamation-circle"></i>
    <small>Error message</small>
</div>
<div class="control">
    <label>Password</label>
    <input type="password" name="password" placeholder="Enter password" id="password">
    <i class="fas fa-check-circle"></i>
    <i class="fas fa-exclamation-circle"></i>
    <small>Error message</small>
</div>
<div class="control">
    <label>Check Password</label>
    <input type="password" name="checkpassword" placeholder="Re-enter Password" id="checkpassword">
    <i class="fas fa-check-circle"></i>
    <i class="fas fa-exclamation-circle"></i>
    <small>Error message</small>
</div>

<button type="submit" name="submit" id="btn2">Submit</button>
</form>
</div><!--input-box-->









<?php
   //check for form submission
   if(isset($_POST['login'])){

     $errors = array();
   
   //Check if the username and password has ben entered
   if(!isset($_POST['username'])||strlen(trim($_POST['username']))<1){
     $errors[]= 'Username is Missing/Invalid';
   }
   if(!isset($_POST['password'])|| strlen(trim($_POST['password']))<1){ 
     $errors[]= 'Password is Missing/Invalid';
   }

   //check if there are any errors in the form
   if(empty($errors)){
    //save username and password into variables
    $username =mysqli_real_escape_string($connection,$_POST['username']);
    $password=mysqli_real_escape_string($connection,$_POST['password']);
    $hashed_password =sha1($password);


    //prepare database query
    $query="SELECT * FROM user
            WHERE username= {'$username'}
            AND password= {'$hashed_password'}
            LIMIT 1";

    $result_set =mysqli_query($connection,$query);
    
    if($result_set){
      //query successful
      if(mysqli_num_rows($result_set) == 1){
        //valid user found
        //redirect to user.php
        header('Location:users.php');}
      else{
        //user name and password invalid
        $errors[]='Invalid Username / Password';
      }

    }
    else{
      $errors[]='Database query failed';
    }
   }
}

?>


<div class="input-box" id="login">
	<?php
      if(isset($errors) && !empty($errors)){
        echo '<p> Invalid username or password </p>'; 
      }
    ?>
<form action="users.php" method="POST">
    <div class="control">
    <label>Username</label>
    <input type="text" name="username" placeholder="Enter Username" id="username">
    <i class="fas fa-check-circle"></i>
    <i class="fas fa-exclamation-circle"></i>
    <small>Error message</small>
</div>
<!--<div class="control" id="emailinput">
    <label>Email</label>
    <input type="email" name="email" placeholder="Enter email" id="email">
    <i class="fas fa-check-circle"></i>
    <i class="fas fa-exclamation-circle"></i>
    <small>Error message</small>
</div>-->

<div class="control">
    <label>Password</label>
    <input type="password" name="password" placeholder="Enter password" id="password">
    <i class="fas fa-check-circle"></i>
    <i class="fas fa-exclamation-circle"></i>
    <small>Error message</small>
</div>


<button type="submit" name="login" id="btn2">Login</button>
</form>

</div><!--input-box-->

</div><!--form-box-->


<script>
	
	var x=document.getElementById("register");
  var y=document.getElementById("login");
  var z=document.getElementById("btn");

  function login()
  {
x.style.left="400px";
y.style.left="50px";
z.style.left="110px";

  }

   function register()
  {
x.style.left="50px";
y.style.left="450px";
z.style.left="0px";

  }

</script>
<!--<script src="script2.js"></script>-->

</body>
</html>

<?php mysqli_close($connection); ?> 


