<?php

$con = new mysqli('localhost', 'root', '', 'kg school');

?>

<!DOCTYPE html>

<head>
    <title>ABC School </title>
</head>

<body>
    <center>
        <h1>ABC International School</h1>
        <h3> Bright Student | Bright Nation </h3>
    </center>
    <p align="right">
        <a href="index.php"><button class=button>home</button> </a>
    </P>
    <hr>
    <style>
        .button {
            background-color: none;
            border: none;
            padding: 10px 10px;
            text-align: center;
            font-size: 20px;
            cursor: pointer;
        }
    </style>

    <a href="student_creation_form.php"><button class=button> Student Creation </button></a>

    <style>
        .table {
            border-collapse: collapse;
            width: 90%;
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
    </style>

    <table class="table">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Class</th>
            <th>DOB</th>
            <th>Address</th>
            <th>Activity</th>
            <th>area</th>
            <th>Action</th>
        </tr>
        <tbody>

            <?php

            $sql = "Select*from student_register";
            $run = mysqli_query($con, $sql);

            $id = 1;

            while ($row = mysqli_fetch_array($run)) {
                $id = $row['studuent_id'];
                $name = $row['name'];
                $class = $row['class'];
                $dob = $row['dob'];
                $address = $row['address'];
                $activity = $row['activity'];
                $area = $row['area'];

            ?>
                <tr>
                    <td> <?php echo $id ?> </td>
                    <td> <?php echo $name ?> </td>
                    <td> <?php echo $class ?> </td>
                    <td> <?php echo $dob ?> </td>
                    <td> <?php echo $address ?> </td>
                    <td> <?php echo $activity ?> </td>
                    <td> <?php echo $area ?> </td>
                    <td>
                        <button> <a href='student_edit.php?edit=<?php echo $id ?>'> Edit</a> </button>
                        <button> <a href='student_delete.php?deleteid=<?php echo $id ?>'>Delete</a> </button>

                    </td>

                </tr>


            <?php $id++;
            } ?>
        </tbody>






</body>

</html>