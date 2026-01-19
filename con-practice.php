<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     $code=1;
     $name='coca';
     $qty=5;
     $price=0.5;
     $total = $qty * $price;
   if($total<=10){
    $discount=10;
   }elseif($total<=20){
    $discount=20;
   }elseif($total<=30){
    $discount=30;
   }elseif($price<=40){
    $discount=40;
   }elseif($price<=50){
    $discount=50;
   }else{
    $discount=60;
   }
   $payment=$total-($total*$discount/100);
   ?>
    <div class="container p-4 mt-3 shadow" style="width:100%">
    <table class="table table-hover text-center" style="width: 100%;">
            <tr>
                <td>Code</td>
                <td>Name</td>
                <td>Qty</td>
                <td>Price</td>
                <td>Total</td>
                <td>Discount</td>
                <td>Payment</td>
            </tr>
            <tr>
                <td><?php echo $code?></td>
                <td><?php echo $name?></td>
                <td><?php echo $qty.'$'?></td>
                <td><?php echo $price.'$'?></td>
                <td><?php echo $total.'$'?></td>
                <td><?php echo $discount.'$'?></td>
                <td><?php echo $payment.'$'?></td>
            </tr>
        </table>
    </div>
</body>
</html>
<!-- <?php
     $code=1;
     $name='coca';
     $qty=5;
     $price=0.5;
     $total = $qty * $price;
   if($total<=10){
    $discount=10;
   }elseif($total<=20){
    $discount=20;
   }elseif($total<=30){
    $discount=30;
   }elseif($price<=40){
    $discount=40;
   }elseif($price<=50){
    $discount=50;
   }else{
    $discount=60;
   }
   $payment=$total-($total*$discount/100);
   echo 'Code : '.$code.'</br>';
   echo 'Name : '.$name.'</br>';
   echo 'Qty : '.$qty.'</br>';
   echo 'Price : $'.$price.'</br>';
   echo 'Total : $'.$total.'</br>';
   echo 'Discount : '.$discount.'%</br>';
   echo 'Payment : $'.$payment.'</br>';
?> -->
