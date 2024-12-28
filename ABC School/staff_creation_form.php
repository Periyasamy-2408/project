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
    <p align="right">
        <a href="index.php"><button class=button>home</button> </a>
    </P>
    <hr>

    <style>
        table {
            border: 1px black;
            border-spacing: 40px;
        }
    </style>

    <center>

        <form action="staff_creation_form.php" method="POST">
            <table style="width:50%">
                <tr>
                    <td>
                        <h3>Staff Registration Form </h3>
                    </td>
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td><input type="radio" name="gender" value="Male"><label for="male">Male</label>
                        <input type="radio" name="gender" value="Female"><label for="male">Female</label>
                    </td>
                </tr>
                <tr>
                    <td>DOB</td>
                    <td><input type="date" name="date"> </td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td><input type="text" name="address"></td>
                </tr>
                <tr>
                    <td>Experience</td>
                    <td><input type="number" name="exp"></td>
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
                    <td><input type="text" name="aboutyou"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit" value="Submit"></td>
                </tr>


            </table>
        </form>
    </center>
</body>

<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $date = $_POST['date'];
    $address = $_POST['address'];
    $exp = $_POST['exp'];
    $degree = $_POST['degree'];
    $aboutyou = $_POST['aboutyou'];

    $sql = "INSERT INTO empolyee_creation(emp_name,gender,dob,address,experience,qualification,aboutyou)
                        VALUES ('$name','$gender','$date','$address','$exp','$degree','$aboutyou')";

    if ($con->query($sql)) {
        echo '<script> location.replace("staff_regn_from.php")</script>';
    } else {
        echo "Error";
    }
}


?>

</html>