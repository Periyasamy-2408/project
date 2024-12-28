<?php
$con = new mysqli('localhost', 'root', '', 'kg school');
?>

<!DOCTYPE html>

<head>
    <title> ABC School</title>
</head>

<body>
    <center>
        <h1>ABC International School</h1>
        <h3>Bright Student | Bright Nation</h3>
    </center>
    <hr>


    <form action="student_creation_form.php" method="post">
        <table>
            <tr>
                <td>Student Name </td>
                <td> <input type="text" name="name"> </td>
            </tr>
            <tr>
                <td>Class</td>
                <td><input type="text" name="class"></td>
            </tr>
            <tr>
                <td>DOB </td>
                <td><input type="date" name="dob"></td>
            </tr>
            <tr>
                <td>Address </td>
                <td><input type="text" name="address"></td>
            </tr>
            <tr>
                <td>Addional activity</td>
                <td><input type="checkbox" name="activity" value="cricket"> Cricket
                    <input type="checkbox" name="activity" value="football"> Footbaal
                    <input type="checkbox" name="activity" value="chess"> Chess
                    <input type="checkbox" name="activity" value="swimming"> swimming
                </td>
            <tr>
                <td>Area</td>
                <td><input type="text" name="area"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit"></td>
            </tr>

        </table>

    </form>

</body>

<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $class = $_POST['class'];
    $dob = $_POST['dob'];
    $address = $_POST['address'];
    $activity = $_POST['activity'];
    $area = $_POST['area'];

    $sql = "INSERT INTO student_register(name,class,dob,address,activity,area)VALUES('$name','$class','$dob','$address','$activity','$area')";

    if ($con->query($sql)) {
        echo '<script>location.replace ("student_regn_form.php")</script>';
    } else {
        echo "failed";
    }
}
?>