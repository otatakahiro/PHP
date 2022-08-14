<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form metho="POST" action="<?php echo $_SERVER["PHP_SELF"];?>">
        <input type="text" name="fname" placeholder="What is your first name?">
        <input type="text" name="lname" placeholder="What is your last name?">
        <input type="text" name="marks" placeholder="Marks">
        <select name="selects">
            <option disabled selected value="">Select your program</option>
            <option>Web Deperopment</option>
            <option>UI/UX</option>
            <option>Desital Marketing</option>
            <option>IBM</option>
        </select>
        <button type="submit">Submit</button>
    </form>

    <?php
        class students {
            private $fname;
            private $lname;
            private $marks;
            private $selects;

            function __construct($fname,$lname,$marks,$selects)
            {
                $this -> fname;
                $this -> lname;
                $this -> marks;
                $this -> selects;
            }

            function avg(){
                $sum = 0;

                foreach ($this -> marks as $mark){
                    $sum += $mark;
                }
                
                if (count($this -> marks) != 0) {
                    echo $sum / count($this -> marks);
                }
            }

            function maxmin() {
                $max = 0;
                $min = 100;

                foreach($this -> marks as $value) {
                    if ($max <= $value) {
                        $max = $value;
                    }

                    if($min >= $value) {
                        $min = $value;
                    }
                }

                echo $max, $min;
            }

            function details() {
                
            }
        }

        switch (){

        }
    ?>
</body>
</html>