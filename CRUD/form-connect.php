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
            <div class="mt-2">
                <label for="" class="form-label">Enployee Name</label>
                <input type="text" placeholder="Name..." class="form-control" name="name" required>
            </div>
            <div class="mt-2">
                <label for="" class="form-label">Gender</label>
                <select class="form-control" name="gender" id="">
                    <option value="" selected disabled>---Other---</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
            <div class="mt-2">
                <label for="" class="form-label">Email</label>
                <input type="text" name="email" placeholder="Email..." class=" form-control" required>
            </div>
            <div class="mt-2">
                <select name="position" id="" class="form-control">
                    <option value="" disabled selected>---Position---</option>
                    <option value="Manager">Manager</option>
                    <option value="Assistant_Manger">Assistant Manager</option>
                    <option value="HR">HR Officer</option>
                    <option value="Accountant">Accountant</option>
                    <option value="Developer">Sofware Developer</option>
                    <option value="Designer">UX/UI Designer</option>
                    <option value="Marketing">Marketing Officer</option>
                    <option value="Sales">Sales Executive</option>
                    <option value="Support">Customer Support</option>
                    <option value="Intern">Intern</option>
                </select>
            </div>
            <div class="mt-2">
                <label for="" class="form-label">Salary</label>
                <input type="number" name="salary" class="form-control" placeholder="Salary..." required>
            </div>
            <button name="Btnsubmit" type="submit" class="btn btn-outline-success d-flex mx-auto mt-2">Submit</button>
        </form>
    </div>
</body>
</html>
