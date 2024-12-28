<?php

$con = new mysqli('localhost', 'root', '', 'kg school');

if ($con->connect_errno) {
    echo $con->connect_error;
    die();
}


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
      
    <a href="staff_creation_form.php"><button class=button> New staff creation </button> </a> <br><br>

    <style>
        .table {
            border-collapse: collapse;
            width: 70%;
        }

        .table td,
        .table th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        .table th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: lightgrey;
            color: green;
        }
        
        .button {
            background-color: none;
            border: none;
            padding: 10px 32px;
            text-align: center;
            font-size: 15px;
            cursor: pointer;
        }
    
    </style>


    <table class="table">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Gender</th>
            <th>DOB</th>
            <th>Address</th>
            <th>Experience</th>
            <th>Qualification</th>
            <th>About youself </th>
            <th>Action</th>
        </tr>
        <tbody>
            <?php

            $con = new mysqli('localhost', 'root', '', 'kg school');

            $sql = "select * from empolyee_creation";
            $run = mysqli_query($con, $sql);

            $id = 1;

            while ($row = mysqli_fetch_array($run)) {
                $id = $row['emp_id'];
                $emp_name = $row['emp_name'];
                $gender = $row['gender'];
                $dob = $row['dob'];
                $address = $row['address'];
                $experience = $row['experience'];
                $qualification = $row['qualification'];
                $aboutyou = $row['aboutyou'];

            ?>
                <tr>
                    <th scope="row"><?php echo $id ?> </th>
                    <td><?php echo $emp_name ?> </td>
                    <td><?php echo $gender ?> </td>
                    <td><?php echo $dob ?> </td>
                    <td><?php echo $address ?> </td>
                    <td><?php echo $experience ?> </td>
                    <td><?php echo $qualification ?> </td>
                    <td><?php echo $aboutyou ?> </td>
                    <td>
                        <button > <a href='staff_edit.php?edit=<?php echo $id ?>'> Edit</a> </button>
                        <button > <a href='staff_delete.php?deleteid=<?php echo $id ?>'>Delete</a> </button>

                    </td>
                </tr>

            <?php $id++;
            } ?>

        </tbody>
    </table>


</body>

</html>