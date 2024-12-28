<?php

$con=new mysqli('localhost','root','','pavan company');

if($con->connect_errno)
{
 echo $con->connect_errno;
 die();
}
else
{
    echo"database connected";
}
?>


<!DOCTYPE html>
<head>
<title> Pavan</title>
</head>

<body>
<h1>Pavan Company</h1>
<h3>Sale Order Creation</h3>
<form action="sale_order.php" method="post">
    <table>
        <tr><td> Select dealer</td> 
        <td>    <select id="name" name ="name">
                    <option value="d1">Smart Gallery</option>
                    <option value="d2">Best Shop</option>
                    <option Value="d3">Pothys</option>
                    </select>   </td>
         </tr>
         <tr> <td><input type="submit" name ="submit" value ="select"></td></tr>
   </table>
</form>

<?php

    if(isset ($_POST['submit']))
    {
        $name=$_POST['name'];
        $sql="INSERT INTO sales_order (dealer_id) VALUES ('$name')";

        if($con->query($sql))
        {
            echo "insert Success";
        }
        else{
                echo"failed";
        }
    }
    else
    {
        echo"select data";
    }
?>
