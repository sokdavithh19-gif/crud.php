<?php
 class Employee {
     public $name;
     public $gender;
     public $email;
     public $position;
     public $salary;

     public function data($name, $gender, $email, $position, $salary) {
         $this->name = $name;
         $this->gender = $gender;
         $this->email = $email;
         $this->position = $position;
         $this->salary = $salary;
     }
 }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="container mt-4 p-4 shadow">
        <button type="button" class="btn btn-outline-dark float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">Employee</button>
        <table class="table table-hover text-center">
            <thead>
                <tr>
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
                echo "
                <tr>
                    <td>$name</td>
                    <td>$gender</td>
                    <td>$email</td>
                    <td>$position</td>
                    <td>$salary</td>
                    <td>
                        <button class='btn btn-outline-danger'>Delete</button>
                        <button class='btn btn-outline-success'>Edit</button>
                    </td>
                </tr>
                ";
                ?>
            </tbody>
        </table>


        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Employee Form</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="" method="post">
                    <div class="modal-body">
                            <div class="mb-3">
                                <label for="name" class="form-label">Employee Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Enter Employee Name">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Gender</label>
                                <select name="gender" id="" class="form-select">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            <div class="mb-2">
                                <label for="" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" placeholder="enter">
                            </div>
                            <div class="mb-2">
                                <label for="" class="form-label">Position</label>
                                <input type="text" name="position" class="form-control" placeholder="Enter">
                            </div>
                            <div class="mb-2">
                                <label for="" class="form-label">Salary</label>
                                <input type="number" name="salary" class="form-control" placeholder="Enter">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-ds-dismiss="modal">Close</button>
                                <button type="submit" name="btnSubmit" class="btn btn-primary">Save changes</button>
                            </div>
    </div>
</body>
</html>