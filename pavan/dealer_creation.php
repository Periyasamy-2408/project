<?php

$con=new mysqli('localhost','root','','pavan company');

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


<!DOCTYPE html>
<head>
<title>pavan</title>
</head>

<body>
    <h1>Pavan Company</h1> <br> <br>
    <h4> Dealer Creation </h4>
    <form action="dealer_creation.php" method="post">
        <table>
            <tr> <td>Name</td><td><input type="text" name="name"></td> </tr>
            <tr> <td> area</td><td><input type="text" name= "area"></td> </tr>
            <tr> <td> contact number</td><td><input type="number" name= "contactno"></td> </tr>
            <tr> <td> address </td><td><input type="text" name="address"> </td>
            <tr> <td><input type="submit" name="submit" value="save"></td></tr>
        </table>
    </form>
<?php
   if(isset($_POST['submit']))
    {
        $name=$_POST['name'];
        $area=$_POST['area'];
        $contactno=$_POST['contactno'];
        $address=$_POST['address'];
        $sql="INSERT INTO dealer_creation (dealer_name,area,contact_no,address)VALUES ('$name','$area',$contactno,'$address')";
        if($con->query($sql))
        {
            echo "insert sucess ";

        }
        else
        {
            echo "insert failed";
        }
        
    }
    else
    {
        echo"plese enter all fields";

    }




?>

</body></html>


