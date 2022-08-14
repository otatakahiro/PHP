<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


                    <!-- Answer of 04.post2.php -->




    <form method="POST" action="<?php $_SERVER['PHP_SELF'];?>">
        <input type="text" name="fname" placeholder="Write your first name"/>
        <input type="text" name="lname" placeholder="Write your last name"/>
        <select name="country">
            <!-- <option selected disabled>Select country:</option> -->
            <option value="">Select country:</option>
            <option>Canada</option>
            <option>USA</option>
            <option>UK</option>
            <option>India</option>
            <option>Japan</option>
            <option>Korea</option>
            <option>Australia</option>
            <option>Brazil</option>
            <option>Taiwan</option>
        </select>
        <button type="submit">Submit</button>
    </form>

    <?php
        switch($_SERVER['REQUEST_METHOD']) {
            case "POST";
                $fname = $_POST["fname"];
                $lname = $_POST["lname"];
                $country = $_POST["country"];
                if($fname != "" && $lname != "" && $country != "") {
                    echo "<table><tr><th>Firstname</th><th>Lastname</th><th>Country</th><tr>";
                    echo "<tr><td>$fname<?dt><td>$lname</td><td>$country</td></tr>";
                    echo "</table>";
                }else{
                    echo "<h2 style='color:red;'>ALL fields should be filled</h2>";
                }
            break;
            case "GET";
                echo "<h1>Welcome to My Page</h1>";
            break;
        }
    ?>
</body>
</html>