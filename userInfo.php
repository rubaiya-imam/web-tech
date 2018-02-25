<?php
session_start();
?>

<!doctype html>
<html>
    <head>
        <title>User Info Page</title>
        <center><h1> User Info</h1></center>
        <hr/>
    </head>
    <body>

        <form action="">
            <input type=button onclick="location.href='indx.php'" value="Logout"/>
             &nbsp &nbsp
             <input type=button onclick="location.href='hom.php'" value="Home"/>
             <br><br>
            <table align="center" border="1" width="70%">
                
				<tr>
                    <th>SL:</th>
                    <th>Full name</th>
                    <th>Phone</th>
                    <th>Email</th>
                </tr>
                <?php
                $count = 1;
                foreach ($_SESSION['info'] as $reg):
				?>

                <tr>
                    <td><?php echo $count++?></td>
                    <td><?php echo $reg['fname']?></td>
                    <td><?php echo $reg['phone']?></td>
                    <td><?php echo $reg['email']?></td>
                </tr>
                <?php endforeach;?>
                
            </table>
            
        </form>

    </body>
</html>
