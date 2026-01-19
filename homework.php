<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{
        font-family: sans-serif;
    }
    table{
        width: 80%;
        margin: auto;
    }
    tr{
        width: 90%;
        
    }
    th{
        width: 10%;
        text-align: center;
        padding: 20px;
        background-color: red;
    }
    td{
        text-align: center;
        padding: 15px;
        background-color: whitesmoke;
    }
</style>
<body>
    <?php 
        $score1 = 95;
        $score2 = 90;
        $score3 = 85;
        $score4 = 95;
        $score5 = 90;

        $total = $score1 + $score2 + $score3 + $score4 +$score5;
        $average = $total / 5;
        $grade = 0;
    ?>

    <?php 
        if($average >= 90){
            $grade = "A";
        }
        elseif($average >= 80){
            $grade = "B";
        }
        elseif($average >= 70){
            $grade = "C";
        }
        elseif($average >= 60){
            $grade = "D";
        }
        elseif($average >= 50){
            $grade = "E";
        }
        else{
            $grade = "F";
        }

        echo"Score1 : $score1<br><br>";
        echo"Score2 : $score2<br><br>";
        echo"Score3 : $score3<br><br>";
        echo"Score4 : $score4<br><br>";
        echo"Score5 : $score5<br><br>";
        echo"Total : $total<br><br>";
        echo"Average : $average<br><br>";
        echo"Grade : $grade<br><br>";
    ?>

    <table>
        <thead>
            <tr>
                <th>Score 1</th>
                <th>Score 2</th>
                <th>Score 3</th>
                <th>Score 4</th>
                <th>Score 5</th>
                <th>Total</th>
                <th>Average</th>
                <th>Grade</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo"$score1" ?></td>
                <td><?php echo"$score2" ?></td>
                <td><?php echo"$score3" ?></td>
                <td><?php echo"$score4" ?></td>
                <td><?php echo"$score5" ?></td>
                <td><?php echo"$total" ?></td>
                <td><?php echo"$average" ?></td>
                <td><?php echo"$grade"; ?></td>
            </tr>
        </tbody>
    </table>

</body>
</html>
