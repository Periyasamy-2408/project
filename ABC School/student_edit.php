<?php

$con=new mysqli('localhost','root','','kg school');


$id = $_GET['edit'];

$sql = "SELECT * from `student_register` where studuent_id = '$id'";

$run = mysqli_query($con, $sql);

while ($row = mysqli_fetch_array($run)) {

    $name = $row['name'];
    $class = $row['class'];
    $dob = $row['dob'];
    $address = $row['address'];
    $activity = $row['activity'];
    $area = $row['area'];
}



if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $class = $_POST['class'];
    $dob = $_POST['dob'];
    $address = $_POST['address'];
    $activity = $_POST['activity'];
    $area = $_POST['area'];

    $sql= "UPDATE `student_register` set studuent_id=$id, name='$name', class='$class',
            dob='$dob',address='$address',activity='$activity',area='$area' where studuent_id=$id";

    $run = mysqli_query($con, $sql);

    
    if ($run) {
        echo '<script>location.replace ("student_regn_form.php")</script>';
    } else {
        echo "failed";
    }
} else {
    echo "Add all datas";
}



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


    <form method="post">
        <table>
            <tr>
                <td>Student Name </td>
                <td> <input type="text" name="name"value="<?php echo $name; ?>"> </td>
            </tr>
            <tr>
                <td>Class</td>
                <td><input type="text" name="class"value="<?php echo $class; ?>"></td>
            </tr>
            <tr>
                <td>DOB </td>
                <td><input type="date" name="dob"value="<?php echo $dob; ?>"></td>
            </tr>
            <tr>
                <td>Address </td>
                <td><input type="text" name="address"value="<?php echo $address; ?>"></td>
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
                <td><input type="text" name="area"value="<?php echo $area; ?>"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit"></td>
            </tr>

        </table>

    </form>

</body>



