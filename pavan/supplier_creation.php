<?php

$con = new mysqli('localhost','root','','pavan company');

if($con->connect_errno)
{
echo $con->connect_error;
die();
}

else
{
    echo "database connected";
}

?>
<head>
<title>pavan</title>
</head>

<body>
    <h1>Pavan Company</h1> <br> <br>
    <h4> Supplier Creation </h4>
    <form action="supplier_creation.php" method="post" >
        <table>
            <tr> <td>Supplier Name :</td><td><input type="text" name = "name"></td> </tr>
            <tr> <td>Area :</td><td><input type="text" name= "area"></td> </tr>
            <tr> <td>Address :</td> <td><input type="text" name="address"></td> </tr>
            <tr> <td>Contact number :</td> <td><input type="number" name = "contactno"></td> </tr>
            <tr> <td><input type="submit" name ="submit" value ="add"></td></tr>
        </table>
    </form>
 </body>

 <?php
    if(isset ($_POST['submit']))
    {
        $name=$_POST['name'];
        $area=$_POST['area'];
        $contactno=$_POST['contactno'];
        $address=$_POST['address'];
        $sql="INSERT INTO supplier_creation (supplier_name,contact_person_name,address,contact_no)VALUES('$name','$area','$address',$contactno)";
        if($con->query($sql))
        {
            echo "data added";

        }
        else
        {
            echo"enter all fields";
        }
    }
    else
    {
        echo "enter all the datas";

    }








?>