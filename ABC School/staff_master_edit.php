<?php
$con = new mysqli('localhost', 'root', '', 'kg school');


$id = $_GET['updateid'];

$sql="SELECT * from `staff_dept_master` where dep_id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$department = $row['department'];


if (isset($_POST['submit'])) {
    $department = $_POST['department'];
    $sql = "UPDATE `staff_dept_master`set dep_id=$id, department='$department' where dep_id=$id";
    $result = mysqli_query($con, $sql);

    if ($result) {
        //echo "updated";
        header('location:staff_dept_master.php');
    } else {
        die(mysqli_error($con));
    }
}



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

    <form method="post">
        <table>
            <tr>
                <td>New Department</td>
                <td><input type="text" name="department"value=<?php echo $department ?>>
                <td></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit"></td>
            </tr>
        </table>
    </form>



</body>

</html>