<?php
$password = ""; 
$repeatedPassword = "";
$email = "";
$message = "";
if(isset($_POST['register'])){
    $password = $_POST['password'];
    $repeatedPassword = $_POST['repeatedPassword'];
    $email = $_POST['email'];

    if($password === $repeatedPassword){
        $message = "Registration successful!";
    } else {
        $message = "Passwords do not match!";
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
    <div class="container">
        <h2 class="mt-4">Registration Form</h2>
        <form method="POST" action="">
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="mb-3">
                <label for="repeatedPassword" class="form-label">Repeat Password</label>
                <input type="password" class="form-control" id="repeatedPassword" name="repeatedPassword" required>
            </div>
            <button type="submit" class="btn btn-primary" name="register">Register</button>
        </form>
        <?php if($message): ?>
            <div class="alert mt-3 <?php echo ($password === $repeatedPassword) ? 'alert-success' : 'alert-danger'; ?>">
                <?php echo $message; ?>
            </div>
        <?php endif; ?>
        <table class="table mt-4 shadow">
            <thead>
                <th>Email</th>
                <th>Password</th>
                <th>Repeated Password</th>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $email; ?></td>
                    <td><?php echo $password; ?></td>
                    <td><?php echo $repeatedPassword; ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>