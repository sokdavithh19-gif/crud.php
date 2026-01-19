<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="container mt-4 p-5 shadow rounded-2">
        <a href="./form-connect.php" class="btn btn-success float-end mb-3">+Add Employee</a>
        <table class="table table-hover text-center">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Emplyee Name</th>
                    <th>Gender</th>
                    <th>Email</th>      
                    <th>Position</th>
                    <th>Salary</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
            <?php
            include 'connection.php';
            $select="SELECT * FROM tbl_employee";  
            $execute=mysqli_query($conn,$select);
            while($row=mysqli_fetch_assoc($execute)){
                echo '
                <tr>
                    <td>'.$row['id'].'</td>
                    <td>'.$row['name'].'</td>
                    <td>'.$row['gender'].'</td>
                    <td>'.$row['email'].'</td>
                    <td>'.$row['position'].'</td>
                    <td>'.$row['salary'].'</td>
                    <td>
                    <div class="d-flex justify-content-center gap-2">
                        <form action="delete.php" method="post">
                            <input type="hidden" name="id" value="'.$row['id'].'">
                            <button type="submit" name="delete" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </div>
                    <div>
                    <form action="Edit-Form.php" method="get" class="mt-2">
                        <input type="hidden" name="id" value="'.$row['id'].'">
                <button name="update" type="submit" class="btn btn-warning d-flex mx-auto">Edit</button>    </div>    
                    </td>
                </tr>';
            }
        ?>
        </tbody>
        </table>
    </div>
</body>
</html>