<?php
if(isset($_POST['btnSubmit'])){
    $username = $_POST['username'];
    $gender= $_POST['gender'];
    $email=$_POST['email'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container mt-4 p-4 shadow">
        <table class="table table-hover text-center mt-5">
            <thead class="table-dark">
                <tr>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= $username ?></td>
                    <td><?= $gender ?></td>
                    <td><?= $email?></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>