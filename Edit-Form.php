<?php
include 'connection.php';
$id=$_GET['id'];
$select="SELECT * FROM tbl_employee WHERE id='$id'";
$execute=mysqli_query($conn,$select);
$row=mysqli_fetch_assoc($execute);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container shadow mt-3 w-50 p-3">
        <h2 class="text-center">Form</h2>
        <form action="insert.php" method="post">
             <input type="hidden" value="<?=$row['id']?>" name="id">
            <div class="mt-2">
                <label for="" class="form-label">Enployee Name</label>
                <input type="text" placeholder="Name..." value="<?=$row['name']?>" class="form-control" name="name" required>
            </div>
            <div class="mt-2">
                <label for="" class="form-label">Gender</label>
                <select class="form-control" name="gender" id="">
                    <option value="" selected disabled>---Other---</option>
                    <option value="Male" <?= $row['gender'] == 'Male' ? 'selected' : '' ?>>Male</option>
                    <option value="Female" <?= $row['gender'] == 'Female' ? 'selected' : '' ?>>Female</option>
                </select>
            </div>
            <div class="mt-2">
                <label for="" class="form-label">Email</label>
                <input type="text" value="<?= $row['email'] ?>" name="email" placeholder="Email..." class=" form-control" required>
            </div>
            <div class="mt-2">
                <select name="position" id="" class="form-control">
                    <option value="" disabled selected>---Position---</option>
                    <option value="Manager" <?= $row['position'] == 'Manager' ? 'selected' : '' ?>>Manager</option>
                    <option value="Assistant_Manger" <?= $row['position'] == 'Assistant_Manger' ? 'selected' : '' ?>>Assistant Manager</option>
                    <option value="HR" <?= $row['position'] == 'HR' ? 'selected' : '' ?>>HR Officer</option>
                    <option value="Accountant" <?= $row['position'] == 'Accountant' ? 'selected' : '' ?>>Accountant</option>
                    <option value="Developer" <?= $row['position'] == 'Developer' ? 'selected' : '' ?>>Sofware Developer</option>
                    <option value="Designer" <?= $row['position'] == 'Designer' ? 'selected' : '' ?>>UX/UI Designer</option>
                    <option value="Marketing" <?= $row['position'] == 'Marketing' ? 'selected' : '' ?>>Marketing Officer</option>
                    <option value="Sales" <?= $row['position'] == 'Sales' ? 'selected' : '' ?>>Sales Executive</option>
                    <option value="Support" <?= $row['position'] == 'Support' ? 'selected' : '' ?>>Customer Support</option>
                    <option value="Intern" <?= $row['position'] == 'Intern' ? 'selected' : '' ?>>Intern</option>
                </select>
            </div>
            <div class="mt-2">
                <label for="" class="form-label">Salary</label>
                <input type="number" value="<?= $row['salary'] ?>" name="salary" class="form-control" placeholder="Salary..." required>
            </div>
            <button name="Btnsubmit" type="submit" class="btn btn-outline-success d-flex mx-auto mt-2">Submit</button>
        </form>
    </div>
</body>
</html>
