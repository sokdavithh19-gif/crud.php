<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container mt-4 p-4 shadow rounded-3">
        <button type="button" class="btn btn-primary float-end mb-3" id="add" data-bs-toggle="modal" data-bs-target="#exampleModal">+ Add Product</button>
        <table class="table table-hover text-center">
            <thead>
                <tr>
                <th>ID</th>
                <th>Product Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Total</th>
                <th>Discount</th>
                <th>Payment</th>
                <th>Image</th>
                <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php require 'con-db.php'; 
            
            $select="SELECT * FROM tbl_product";
            $result=mysqli_query($conn,$select);
            while($row=mysqli_fetch_assoc($result)){
                echo '
            
                <tr>
                    <td>'.$row['id'].'</td>
                    <td>'.$row['pro_name'].'</td>
                    <td>'.$row['qty'].'</td>
                    <td>'.$row['price'].'</td>
                    <td>'.$row['total'].'</td>
                    <td>'.$row['discount'].'</td>
                    <td>'.$row['payment'].'</td>
                    <td><img src="image/'.$row['image'].'" width="100px" height="40px" class="rounded-circle" alt=""></td>
                    <td>
                    <div class="d-flex gap-2 justify-content-center">
                            <form action="delete.php" method="post" onsubmit="return confirmDelete()">
                                <input type="hidden" name="id" value=' . $row['id'] . '>
                                <button name="delete" class="btn btn-outline-danger">Delete</button>
                            </form>
                            <button id="edit" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-outline-warning">Edit</button>
                        </div>
                    </td>
                </tr>';
            }
            ?>
            </tbody>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Add Product</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form id="form" action="insert-db.php" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id" id="id">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Product Name</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="qty" class="form-label">Quantity</label>
                                    <input type="number" class="form-control" id="qty" name="qty" required>
                                </div>
                                <div class="mb-3">
                                    <label for="price" class="form-label">Price</label>
                                    <input type="number" class="form-control" id="price" name="price" required>
                                </div>
                                <div class="mb-3">
                                    <label for="file" class="form-label">Image</label><br>
                                    <img id="image" src="https://www.coca-cola.com/content/dam/onexp/cb/en/brands/coca_cola/coca_original.jpg" width="100px" height="40px" class="rounded-circle" alt="">
                                    <input type="file" class="form-control" id="file" name="file">
                                </div>
                                <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" name="submit" id="save" class="btn btn-primary">Save Product</button>
                            <button type="submit" id="update" class="btn btn-warning" name="update">Update</button>
                        </div>
                            </form>
                    </div>
                </div>
            </div>

        </table>
    </div>
</body>
</html>
<script>
    $(document).ready(function(){
        $('#file').hide();
        $('#image').click(function(){
            $('#file').click();
        });
        $('#file').change(function(){
            let file=this.files[0];
            if(file){
                let image=URL.createObjectURL(file);
                $('#image').attr('src',image);
            }
        })
    })
    $('#add').click(function(){
        $('#save').show();
        $('#update').hide();
        $('#exampleModalLabel').text('Add Product');
        $('#form').attr('action','insert-db.php');
    })
        $(document).on('click','#edit',function(){
    $('#save').hide();
    $('#update').show();
    $('#exampleModalLabel').text('Edit Product');
    $('#form').attr('action','update.php');

    const row = $(this).closest('tr');

    const id = row.find('td:eq(0)').text().trim();
    const pro_name = row.find('td:eq(1)').text().trim();
    const qty = row.find('td:eq(2)').text().trim();
    const price = row.find('td:eq(3)').text().trim();
    const image = row.find('img').attr('src');

    $('#id').val(id);
    $('#name').val(pro_name);
    $('#qty').val(qty);
    $('#price').val(price);
    $('#image').attr('src', image);
});

</script>