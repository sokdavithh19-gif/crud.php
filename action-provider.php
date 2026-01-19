<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container mt-4 p-4 shadow w-50">
        <h1>Form</h1>
        <form action="receiver.php" method="post">
            <div class="mb-2">
                <label for="name" class="form-label">username</label>
                <input id="name" type="text" name="username" class="form-control" placeholder="Enter">
            </div>
            <div class="mb-2">
                <label for="gender" class="form-label">Gender</label>
                <select name="gender" id="" class="form-select">
                    <option value="" disabled selected>Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
             <div class="mb-2">
                <label for="email" class="form-label">Email</label>
                <input id="email" type="email" name="email" class="form-control" placeholder="Enter">
            </div>
            <button name="btnSubmit" class="btn btn-success d-flex mx-auto">Submit</button>
        </form>
    </div>
</body>
</html>