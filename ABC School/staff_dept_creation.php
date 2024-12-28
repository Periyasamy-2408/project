<?php
$con = new mysqli('localhost', 'root', '', 'kg school');

?>

<!DOCTYPE html>

<head>
    <title>ABC School</title>
</head>

<body>
    <center>
        <h1>ABC School</h1>
        <h3>Bright Student | Bright Nation</h3>
    </center>
    <p align="right">
        <a href="index.php"><button class=button>home</button> </a>
    </P>
    <hr>

    <h3> Staff Department creation </h3>

    <form action="staff_dept_creation.php" method="post">
        <table>
            <tr>
                <td>New Department</td>
                <td><input type="text" name="department">
                <td></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit"></td>
            </tr>
        </table>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $department = $_POST['department'];

        $sql = "INSERT INTO staff_dept_master(department)VALUES('$department')";

        if ($con->query($sql)) {
            echo '<script> location.replace("staff_dept_master.php")</script>';
        } else {
            echo "failed";
        }
    }



    ?>

</body>

</html>