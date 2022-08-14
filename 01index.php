<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

    </style>
</head>
<body>
    <?php
        $name = "Takahiro Ota";//string
        $country = "Japan";//string
        $hobby = "Running";//string
        $mark = 60;//integer
        $price = 10.5;//Float
        $kindTeacher = false;//Boolean  true/false
        echo "<h1>Hello World</h1>";
        echo "<h2>My name is: $name</h2>";
        echo "<h4>I'm from $country</h4>";
        echo "<h5>My hobby is $hobby</h5>";
        echo $mark + $price;

        $course1 = 36;
        $course2 = 22;
        $average = ($course1 + $course2) / 2; 
        echo "<h1>$average</h1>";
        echo "<h1>".(($course1 + $course2) / 2)."</h1>";//always use .(dotted)

        $mod = ($course1 + $course2) % 2;
        echo "<h1>Mod: $mod </h1>";

        $course1 += 1;//$cource1 = $course1 + 1    
        $course1 += $course2;//$cource1 = $course1 + $course2
        $course2 %= 20;//$course2 = $course2 % 20;
        $family = "Torabi";
        $name .= $family;
        echo"<h1>$name</h1>";
        echo $course1 + $course2;

        echo "<h1>".($course1 + $course2)."</h1>";
        ?>
</body>
</html>



<!-- 36 + 1 == 37 + 22 ==59 + 2 ==61 -->