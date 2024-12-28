<?php
$con = new mysqli('localhost', 'root', '', 'kg school');

/*if ($con->connect_errno) {
    echo $con->connect_error;
    die();
} else {
    echo "connected";
}*/


if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    $sql = "delete from `empolyee_creation` where emp_id=$id";
    $result = mysqli_query($con, $sql);

    if ($result) {
        header('location:staff_regn_from.php');
    } else {
        echo $con->connect_error;
    }
}
