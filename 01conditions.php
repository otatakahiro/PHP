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
    // $rainy = true;
    // if($rainy) {
    //     echo "<h2>Take the umbrella</h2>";
    // } else {
    //     echo "<h2>Don't take the umbrella</h2>";
    // }






    // $number = 8;
    // // $number %= 2;
    // if($number % 2 == 1) {
    //     echo "<h2>Odd</h2>";
    // } else {
    //     echo "<h2>Even</h2>";
    // }









    // $weather = "Rainy";
    // echo "<h1>";
    // if ($weather == "Rainy") {
    //     echo "Take the umbrella";
    // }elseif ($weather == "Sunny") {
    //     echo "Take the sunglass";
    // }else {
    //     echo "Have Fun!";
    // }
    // echo "</h1>";

    // $result = 95;
    // if($result <= 100 && $result >=90) {
    //     echo "True";
    // }else
    //     echo "Forse";

    // $result = 66;
    // if($result <= 100 && $result > 85) {
    //     echo  "Your Mark is :A";
    // }elseif($result <= 85 && $result > 75) {
    //     echo "Your Mark is :B";
    // }elseif($result <= 75 && $result > 65) {
    //     echo "Your Mark is :C";
    // }else{
    //     echo "For Real !!!!!!!!";
    // }

    // $marks = array("78","76.5","80","50","45.7");
    // $counter = 0;

    // while($counter<5) {
    //     echo "<h3>$marks[$counter]</h3>";
    //     $counter++;
    // }
    // $avg = array_sum($marks) / $counter;
    // echo "<h3>$avg</h3>";
    
    // $sum = array($marks>5);
    // $avg = array_sum($marks) / $counter;
    // echo $avg;


// class-02

$marks = array("78","76.5","80","50","45.7");
$counter = 0;
$sum = 0;

while($counter<5) {
    $sum += $marks[$counter];
    $counter++;
}
$avg = $sum / 5;
echo "<h3>Average is: $avg</h3>";





$marks = array(78,76.5,80,50,45.7,80,95);
$counter = 0;
$sum = 0;
// $total = count($marks);

while($counter < count($marks)) {
    $sum += $marks[$counter];
    $counter++;
}

$avg = $sum / $counter;
echo "<h3>Average is: $avg</h3>";
array_push($marks,50,87);//adding new values to the end of an array
$total = array_sum($marks);//calculate the total sum of all values in an array
$index = array_search(80,$marks,true);
// push and unshift are opposit

echo "<h3>$sum / $total</h3>";
echo "<h3>$index</h3>";




    ?>
</body>
</html>