<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Another Table</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assests/css/styles.css">
</head>
<body>
    <br>
    <table class="table table-hover table-dark">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $sample = $student->arraydata();
                foreach($sample as $key=>$sp){
                    ?>
                        <tr>
                            <th scope="row"><?php echo $key ?></th>
                            <td><?php echo $sp['name'] ?></td>
                            <td><?php echo $sp['email'] ?></td>
                            <td><?php echo $sp['phone'] ?></td>
                        </tr>
                    <?php
                } 
            ?>
        </tbody>
    </table>
</body>
</html>