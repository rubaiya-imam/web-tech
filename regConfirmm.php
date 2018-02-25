<?php 
session_start();

if(isset($_POST['submit'])){

	$data['fname'] = $_POST['fname'];
    $data['username']  = $_POST['username'];
    $data['password']  = $_POST['password'];
    $data['email']  = $_POST['email'];
    $data['phone'] = $_POST['phone'];
    $_SESSION['info'][] = $data;

}
?>
<html>
    <head>
    	<title>Register Page</title>
    	<h1 align="center">Registration</h1>
    	<hr/>
    	<br/>
    </head>
    <body>

    	<table border="0" cellpadding="5" align="center">
              <form action="regConfirmm.php" method="post">
                
                    <tr>
                       <td>Username:</td>
                        <td><input type="text" name="username"  ></td>
                    </tr>

                    <tr>
                        <td>Password:</td>
                        <td><input type="password" name="password"  ></td>
                    </tr>

                    <tr>
                        <td>Re-Enter Password:</td>
                        <td><input type="password"  ></td>
                    </tr>

                    <tr>
                        <td>E-mail:</td>
                        <td><input type="email" name="email"  ></td>
                    </tr>

                    <tr>
                        <td>Phone:</td>
                        <td><input type="text" name="phone"  ></td>
                    </tr>

                    <tr>
                        <td>Full name:</td>
                        <td><input type="text" name="fname" ></td>
                    </tr>

                    <tr>
                        <td><input type="reset" value="Reset"></td>
                        <td align="right"><input type="submit" name="submit" value="Register"></td>
                    </tr>
                
              </form>


        </table>

        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // collect value of input field
                $name = $_POST['username'];
                $pass = $_POST['password'];
                if (empty($name)) {
                    echo "field is empty";
                } else {
                	$name=$_SESSION['username'];
                    header("location:hom.php");
                }
            }
         ?>



    </body>

  </html>
