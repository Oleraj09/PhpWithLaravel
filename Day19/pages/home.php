<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Table</title>
</head>
<body>
    <table class="table table-bordered table-dark">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Phone</th>
            <th scope="col">Occupation</th>
            <th scope="col">Institute</th>
            <th scope="col">Semester</th>
            <th scope="col">Email</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $students = $student->arraydata();
                foreach($students as $key=>$std){
                    ?>
                        <tr>
                            <td><?php echo $key ?></td>
                            <td><?php echo $std['name'] ?></td>
                            <td><?php echo $std['phone'] ?></td>
                            <td><?php echo $std['occupation'] ?></td>
                            <td><?php echo $std['institute'] ?></td>
                            <td><?php echo $std['semister'] ?></td>
                            <td><?php echo $std['email'] ?></td>
                        </tr>
                    <?php
                }
            ?>
        </tbody>
    </table>
</body>
</html>