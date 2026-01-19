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
    <div class="container w-50 mt-3 p-5 shadow rounded-3 d-flex justify-content-center align-items-center flex-column">
        <form action="">
            <img id="image" src="https://img.wattpad.com/d21321160fb5dc3c0d32e2931c00c3b03cab1bff/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f776174747061642d6d656469612d736572766963652f53746f7279496d6167652f6772667634595239797a494549673d3d2d313234353730393039302e31373030396564613435366332363064383834363433373432312e6a7067?s=fit&w=720&h=720" width="35%" alt="">
            <input id="file" type="file" class="form-control" />
        </form>
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
            const file = this.files[0];
            if(file){
                const image=URL.createObjectURL(file)
                $('#image').attr('src',image);
            }
        })
    })
</script>