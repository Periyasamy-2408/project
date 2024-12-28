<?php
$con = new mysqli('Localhost', 'root', '', 'kg school');
?>

<!DOCTYPE html>

<head>
    <title> ABC School </title>
</head>

<body>
    <center>
        <h1>ABC International schoo<h1>
                <h3>Bright Student | Bright Nation</h3>

    </center>
    <p align="right">
        <a href="index.php"><button class=button>home</button> </a>
    </P>
    <hr>

    <form>
        <table>
            <tr>
                <td>
                    <h3>Department Master</h3>
                </td>
            </tr>
            <tr>
                <td> <button class ="button"> <a href="staff_dept_creation.php"> Create new Department </button>
                <td>
            </tr>

        </table>
    </form>

    <style>
        .table {
            border-collapse: collapse;
            width: 40%;
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
            <th>Department</th>
            <th>Action</th>
        </tr>

        <tbody>
            <?php

            $sql = "select * from staff_dept_master";
            $result = mysqli_query($con, $sql);

            if ($result) {
                while ($row = mysqli_fetch_array($result)) {
                    $id = $row['dep_id'];
                    $department = $row['department'];

            ?>
                    <tr>

                        <td> <?php echo $id ?> </td>
                        <td> <?Php echo $department ?> </td>
                        <td> <button claas="button"> <a href='staff_master_edit.php?updateid=<?php echo $id ?>'> Update</a> </button>
                            <button claas="button"> <a href='staff_dept_delete.php'> Delete</a> </button> </td>
                    </tr>

            <?php     }
            } ?>

        </tbody>
    </table>






</body>