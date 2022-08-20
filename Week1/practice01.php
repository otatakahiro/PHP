<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        th,td {
            border: 1px solid red;
        }
        
    </style>
</head>
<body>
    <table><thead><tr><th>Name</th><th>Max Score</th><th>MIn Score</th><th>Average</th></tr></thead>
    <?php

    // maximam,minimam and average for each student.
    // Student Name: Max:?, Min:?, Average:?
    // Table
    $students = array("Henry"=>[56,80,70],"Kathleen"=>[70,80,67],"Lin-Wen"=>[90,55,76],"Akane"=>[78,80,90]);

    foreach($students as $name=>$scores){
        $max = 0;
        $min = 100;
        $sum = 0;
        $avg = 0;
        foreach($scores as $score){
            if($max <= $score){
                $max = $score;
            }

            if($min >= $score){
                $min = $score;
            }

            $sum += $score; 
            $avg = $sum / count($scores);
        }

        echo "<tr><td>$name</td><td>$max</td><td>$min</td><td>".sprintf('%.1f',$avg)."</td></tr>";
    }
    ?>

</table>
</body>
</html>