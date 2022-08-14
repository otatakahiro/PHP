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
    
        $test = array(
            [10,8,0],
            [10,9,4],
            [6,9,2],
            [7,8,10]
        );
        for($col = 0; $col<count($test); $col++){
            echo "<h2> Max Row $col: ";
            $max = 0;
            for($row = 0; $row < 3; )
        };

            // for ($name=0; $name < count($students); $name++){
    //     echo "<h2>Max Row $name: ";
    //     $max = 0;

    //     for ($score = 0; $score < 2; $score++){
    //         if($max <= $students[$name][$score]) {
    //             $max = $students[$name][$score];
    //         }
    //     }
    //     echo "$max</h2>";
    // };
    ?>
</body>
</html>