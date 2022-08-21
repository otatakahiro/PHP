+<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $students = array("Henry"=>[56,80,70],"Kathleen"=>[70,80,67],"Lin-Wen"=>[90,55,76],"Akane"=>[78,80,90]);

    foreach ($students as $name=>$score) {
        echo "<h2>$name Max Row: ";
        $max = 0;
        $min = 100;
        $counter = 0;
        $sum = 0;
        $avg = 0;
        foreach ($score as $number) {
            if ($max <= $number) {
                $max = $number;
            }
            if ($min >= $number) {
                $min = $number;
            }
            
            $sum += $number;
            $avg = $sum / count($score); 
        }

        echo "$max, Min Row: $min, Avg: $avg</h2>";
    }
    ?>
</body>
</html>