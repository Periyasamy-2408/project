<?php
$con = new mysqli('localhost', 'root', '', 'kg school');

$id = $_GET['edit'];
$sql = "select * from empolyee_creation where emp_id = '$id'";

$run = mysqli_query($con, $sql);

while ($row = mysqli_fetch_array($run)) {

    $emp_name = $row['emp_name'];
    $gender = $row['gender'];
    $dob = $row['dob'];
    $address = $row['address'];
    $experience = $row['experience'];
    $degree = $row['qualification'];
    $aboutyou = $row['aboutyou'];
}


if (isset($_POST['submit'])) {
    $emp_name = $_POST['name'];
    $gender = $_POST['gender'];
    $dob = $_POST['date'];
    $address = $_POST['address'];
    $experience = $_POST['experience'];
    $degree = $_POST['degree'];
    $aboutyou = $_POST['aboutyou'];

    $sql = "UPDATE `empolyee_creation` set emp_id=$id,emp_name='$emp_name',gender='$gender',
            dob='$dob',address='$address',experience='$experience',qualification='$degree',aboutyou='$aboutyou' where emp_id=$id";
    $run = mysqli_query($con, $sql);

    if ($run) {
        echo '<script> location.replace("staff_regn_from.php")</script>';
    } else {
        echo "Error";
    }
} else {
    echo "Enter All fields";
}
?>

<?php
$con = new mysqli('localhost', 'root', '', 'kg school');
?>
<!DOCTYPE html>

<head>
    <title> ABC School </title>
</head>

<body>
    <center>
        <h1> ABC International School </h1>
        <h3> Bright Student | Bright Nation </h3>
    </center>
    <hr>

    <style>
        table {
            border: 1px black;
            border-spacing: 40px;
        }
    </style>

    <center>

        <form method="POST">
            <table style="width:50%">
                <tr>
                    <td>
                        <h3>Staff Registration Form </h3>
                    </td>
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name" value="<?php echo $emp_name; ?>"></td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td><input type="radio" name="gender" value="Male"><label for="male">Male</label>
                        <input type="radio" name="gender" value="Female"><label for="male">Female</label>
                    </td>
                </tr>
                <tr>
                    <td>DOB</td>
                    <td><input type="date" name="date" value="<?php echo $dob; ?>"> </td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td><input type="text" name="address" value="<?php echo $address; ?>"></td>
                </tr>
                <tr>
                    <td>Experience</td>
                    <td><input type="number" name="exp" value="<?php echo $experience; ?>"></td>
                </tr>
                <tr>
                    <td>Qualification</td>            
                    <td><input type="checkbox" name="degree" value="B.Sc"> B.Sc
                        <input type="checkbox" name="degree" Value="M.Sc">M.Sc
                        <input type="checkbox" name="degree" Value="B.Com">B.Com
                        <input type="checkbox" name="degree" Value="B.Com">M.Com

                    </td>
                <tr>
                    <td>About youself
                    <td><input type="text" name="aboutyou" value="<?php echo $aboutyou; ?>"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit" value="Submit"></td>
                </tr>

            </table>
        </form>
    </center>
</body>

<?php



?>

</html>