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
        $friends =array("A","B","C","D","E");
        echo "<ul>";
        $counter = 0;
        while($counter < count($friends)) {
            echo "<li>$friends[$counter]</li>";
            $counter++;
        }
        echo "</ul>";

        echo "<ul>";
        for($counter = 0; $counter < count($friends); $counter++) {
            echo "<li>$friends[$counter]</li>";
        }
        echo "</ul>"
    ?>
</body>
</html>