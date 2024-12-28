<?php
$con = new mysqli('Localhost', 'root', '', 'kg school');

if ($con->connect_errno) {
    echo $con->connect_errno;
    die();
} else {
    echo "database connected";
}


if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    $sql = "delete from `staff_dept_master` where dep_id=$id";

    $result = mysqli_query($con, $sql);

    if ($result) {
        header('location:staff_dept_master.php');
    } else {
        die();
    }
}
