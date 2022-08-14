<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // conditions..
        $marks = array(78,76.5,80,50,45.7);
        $counter = 0;
        $sum = 0;

        while($counter<5) {
            $sum += $marks[$counter];
            $counter++;
        }
        $avg = $sum / $counter;



        

    ?>
</body>
</html>