<?php 
session_start();
?>
<html>
     <head>
	     <title> User Login Info Page </title>
		 <h1 align="center">User Login Info </h1>
		 <hr/>
	 </head>
  
     <body>
	 
	     <br>
		 <form name="logininfo" method="" action="">
		 <input type=button onclick="location.href='logout.php'" value="Logout"/>
		 &nbsp &nbsp
		 <input type=button onclick="location.href='hom.php'" value="Home"/>
		 <br><br>
		 </form>
		 
		 <table align="center" border="1" width="70%">
		 <tr>
			     <th>Serial</th>
				 <th>UserName</th>
				 <th>Password</th>
		
	     </tr>
	     <?php  
		    $count = 1;
		    foreach ($_SESSION['info'] as $reg):
         ?>
		 <tr>
			     <td><?php echo $count++?></td>
				 <td><?php echo $reg['username']?></td>
				 <td><?php echo $reg['password']?></td>
			
	     </tr>
	     <?php endforeach;?>
		 </table>
	 </body>
</html>