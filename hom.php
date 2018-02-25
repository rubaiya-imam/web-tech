<?php 
session_start();

if(isset($_SESSION['Uname'])){
	$name=$_SESSION['Uname'];
	header('location: hom.php');
}

?>

<!doctype html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
  <html lang="en-US">
  
     <head>
	     <title> Home_Page </title>
		 <h1 align="center"> HomePage </h1>
		 <hr/>
	 </head>
  
     <body>
	 
	     <br>
		 <form name="home" method="" action="">
		 <input type=button onclick="location.href='indx.php'" value="Logout"/>
		 <br><br>
		 
			<?php
		   // $name = $_SESSION['Uname'];
		  //  $name = $info[$key];
		    ?>
		 Hello! <?php echo $_SESSION['Uname'] ?>
		 <hr/>
		 
		 <input type=button onclick="location.href='userInfo.php'" value="User Info"/>
		 <br/><br>
		 <input type=button onclick="location.href='loginInfo.php'" value="User Login Info"/>
		 
		 </form>

		 
		 
		 
	 
	 </body>
  
  
  </html>