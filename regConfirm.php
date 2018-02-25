<!doctype php>

<?php  
    
    $myname = "rubu";
    $mypass = "123";
    $expr = time()+60*60*7;

   if(isset($_POST['login']))
   {
	  $name=$_POST['Uname'];
      $pass=$_POST['Upass'];
      if($name == $myname and $pass == $mypass)
	  {
      	setcookie('name',$name,$expr);
      	header("locaton: home.php");
	  }
     
   }
   else
	{
		echo "Username or Password is empty!!";
		header("location: indx.php");
	}

?>