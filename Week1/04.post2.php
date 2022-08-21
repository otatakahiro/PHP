<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <style>
        h2 {
            color: red;
        }
    </style>

<body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="text" name="fname" placeholder="What is your firstname">
        <input type="text" name="lname" placeholder="What is your lastname">
        <input type="text" name="country" placeholder="Where are you from">
        <button type="submit">Submit</button>
    </form>

    <thead>


    
    <?php
        switch($_SERVER['REQUEST_METHOD']) {
            case "POST";
                $fname = $_POST["fname"];
                $lname = $_POST["lname"];
                $country = $_POST["country"];
                if($fname != "" && $lname != "" && $country != "") {
                    echo "<h3>Your name is: $fname $lname</h3>";
                    echo "<h3>You're from: $country</h3>";
                }else{
                    echo "<h2>ALL fields should be filled</h2>";
                }
            break;
            case "GET";
                echo "<h1>Welcome to My Page</h1>";
            break;
        }
    ?>

    </thead>
</body>
</html>