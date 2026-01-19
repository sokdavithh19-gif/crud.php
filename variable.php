<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container p-4 mt-3 shadow" style="width:100%">
    <table class="table table-hover text-center" style="width: 100%;">
       <tr>
        <td>Id</td>
        <td>Name</td>
        <td>Gender</td>
        <td>Edit</td>
        <td>Delete</td>
       </tr>
       <tr>
        <td><?php echo $id=1?></td>
        <td><?php echo $name='Ninja'?></td>
        <td><?php echo $gender='Male'?></td>
        <td>
            <button class="btn btn-outline-success">Edit</button>
        </td>
        <td>
            <button class="btn btn-outline-danger">Delete</button>
        </td>
       </tr>
       <tr>
        <td><?php echo $id=2?></td>
        <td><?php echo $name='OUkhong'?></td>
        <td><?php echo $gender='Male'?></td>
        <td>
            <button class="btn btn-outline-success">Edit</button>
        </td>
        <td>
            <button class="btn btn-outline-danger">Delete</button>
        </td>
       </tr>  
       <tr>
        <td><?php echo $id=3?></td>
        <td><?php echo $name='Brody'?></td>
        <td><?php echo $gender='Male'?></td>
        <td>
            <button class="btn btn-outline-success">Edit</button>
        </td>
        <td>
            <button class="btn btn-outline-danger">Delete</button>
        </td>
       </tr>  
       </table>
    </div>
</body>
</html>