<?php
//   $data=['Ronaldo','Messi','Bromek','Tep piseth',1,true];
//   echo $data[];
//   for($i=0;$i<count($data);$i++){
//     echo $data[$i].'<br>';
//   }
//   foreach($data as $dataso){
//     echo $dataso;
//   }
$user=[
    [
    'id'=>1,
    'name' =>'MAc',
    'gender'=>'Female'
    ],
    [
        'id'=>2,
        'name' =>'Loki',
        'gender'=>'Male'
    ],
    [
        'id'=>3,
        'name' =>'tyler',
        'gender'=>'Female'
    ],
];
?>
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
        <?php foreach($user as $u){?>
       <tr>
        <td><?php echo $u['id'];?></td>
        <td><?php echo $u['name'];?></td>
        <td><?php echo $u['gender'];?></td>
       </tr>
       <?php };?>
       </table>
    </div>
</body>
</html>