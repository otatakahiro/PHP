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
        // $counter = 6;
        // $marks = array("78","76.5","80","50","45.7");
        // while($counter < 5){
        //     echo"<h3>$counter</h3>";
        //     $counter++;
        // }
        // do {
        //     echo "<h3>$counter</h3>";
        //     $counter++;
        // }while($counter < 5);
        // for($counter = 0; $counter > 5; $counter++);{
        //     echo "<h3>$counter</h3>";
        // }
        
        $counter = 4;
        $friends = array("Fuga","Jo","Yuki","Hina","Soo");
        while($counter < 5) {
            echo "<h3>$counter</h3>";
            $counter++;
        }

        for($counter = count($friends) - 1; $counter >= 0; $counter--){
            echo "<h3>$friends[$counter]</h3>";
        }
    ?>
</body>
</html>