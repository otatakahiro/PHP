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
    // index
    $name = "Taka";
    $mark = 60;
    $price = 10.5;
    $boolean = true;

    echo "<h1>My name is $name</h1>";
    echo "<h1>" .($mark + $price). "</h1>";

    $course1 = 36;
    $course2 = 21;
    $ave = ($course1 + $course2) / 2;
    echo "<h1>$ave</h1>";

    echo "<h1>".(($course1 + $course2) / 2)."</h1>";

    $mod = ($course1 + $course2) % 2;
    echo "<h1>$mod</h1>";

    $course1 += 1;
    $course1 += $course2;
    $course2 %= 20;
    echo $course1 + $course2;
    echo "<h1>".($course1 + $course2)."</h1>";

    // conditions
    $rainy = true;
    if ($rainy) {
        echo "<h2>Take the umbrella</h2>";
    } else {
        echo "<h2>Don't take the umbrella</h2>";
    }

    $number = 5;
    if ($number % 2 == 0) {
        echo "<h2>Even</h2>";
    } else {
        echo "<h2>Odd</h2>";
    }

    $weather = "Rainy";
    echo "<h1>";
    if ($weather == "Rainy") {
        echo "Take the umbrella";
    } elseif ($weather == "Sunny") {
        echo "Take the sunglass";
    } else {
        echo "Have Fun !!!";
    }
    echo "</h1>";

    $result = 95;
    if ($result <= 100 && $result > 85) {
        echo "Your Mark is :A";
    } elseif ($result <= 85 && $result > 75) {
        echo "Your Mark is : B";
    } elseif ($result <= 75 && $result > 65) {
        echo "Your Mark is : C";
    } else {
        echo "For Real !!!!!!!!!";
    }


    $marks = array("78","76.5","80","50","45.7");
    $counter = 0;

    while($counter < 5) {
        echo "<h3>$marks[$counter]</h3>";
        $counter++;
    }

    $avg = array_sum($marks) / $counter;
    echo "<h3>$avg</h3>";
    

    ?>
</body>
</html>