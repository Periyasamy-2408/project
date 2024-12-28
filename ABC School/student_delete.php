<?php
$con=new mysqli('localhost','root','','kg school');
if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    $sql = "delete from `student_register` where studuent_id=$id";
    $result = mysqli_query($con, $sql);

    if ($result) {
        header('location:student_regn_form.php');
    } else {
        echo $con->connect_error;
    }
}
