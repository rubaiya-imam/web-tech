<?php 
	session_start();

	function search_in_array($session, $username,$password)
	{
		foreach ($session as $key=>$data)
		{
		 if($data['Uname'] == $username)
		 {
			 if($data['Upass'] ==  $password){
			  return $key;
		 }
		}
		}
	}

	if(isset($_POST['submit']))
	{
		$username  = $_POST['Uname'];
		$password  = $_POST['Upass'];
		$key = search_in_array($_SESSION['info'],$username,$password);
		$_SESSION['key'] = $key;
		header('location: hom.php');
	}

?>

     <head>

     	<title>Login Page</title>
     	<h1 align="center">LOGIN</h1>
     <hr/>

     </head>

     <body>
     	<form name="login" method="post" action="indx.php">

     		<input type=button onClick="location.href='regConfirmm.php'" value='Register' ><br/>

		        <table border="0" cellpadding="5" align="center">
		           <tr>
		           	 <td>Username:</td>
		           	 <td><input type="text" name="Uname" size="50"/></td>
		           </tr>
		           <tr>
		           	 <td>Password:</td>
		           	 <td><input type="password" name="Upass" size="50"/></td>
		           </tr>
		           <tr>
		           	<td colspan="2" align="right"><input type="submit" value="Submit"/></td>
		           </tr>

		        </table>
	    </form>
	    <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // collect value of input field
                $name = $_POST['Uname'];
                $pass = $_POST['Upass'];
                if (empty($name)) {
                    echo "Field is empty";
                } else 
				{
                	$name=$_SESSION['Uname'];
                    header("location:hom.php");
                }
            }
         ?>
	    </body>

  </html>
