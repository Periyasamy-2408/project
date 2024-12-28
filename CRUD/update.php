<?php
include 'connect.php';
$id = $_GET['updateid'];

$sql = "SELECT * from  `crud` where id =$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$email = $row['email'];
$mobile = $row['mobile'];
$password = $row['password'];


if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "UPDATE `crud`set id=$id,name='$name',email='$email',mobile='$mobile',password='$password' where id=$id";
    $result = mysqli_query($con, $sql);
    if ($result) {
        // echo "updated";
        header('location:display.php');
    } else {
        die(mysqli_error($con));
    }
}
?>


<!DOCTYPE html>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<head>
    <title>Crud Operation</title>
</head>

<body>
    <div class="container my-5">
        <form method="post">

            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control"
                    placeholder="Enter your name"
                    name="name" value=<?php echo $name ?>>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control"
                    placeholder="Enter your Email"
                    name="email" value=<?php echo $email ?>>
            </div>
            <div class="form-group">
                <label>Mobile</label>
                <input type="text" class="form-control"
                    placeholder="Enter your mobile"
                    name="mobile" value=<?php echo $mobile ?>>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="text" class="form-control"
                    placeholder="Enter your password"
                    name="password" value=<?php echo $password ?>>
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Submit</button>


        </form>
    </div>
</body>