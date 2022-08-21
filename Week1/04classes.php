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
        class student{
            public $fname;      
            public $lname;      
            public $bdate;      
            public $country;
            function __construct()
            {
                
            }
            function displayDetails(){
                return "Student Name: $this->fname $this->lname, Birthdate: $this->bdate, From: $this->country";
            }
            function displayName(){
                return "Student Name: $this->fname $this->lname";
            }
        }
        $Marcelo = new student();
        $Marcelo->fname = "Marcelo";
        $Marcelo->lname = "Romero";
        $Marcelo->bdate= "2015";
        $Marcelo->country = "Brazil";
        echo "<h1>".$Marcelo->displayDetails()."</h1>";
        echo "<h2>".$Marcelo->displayName()."</h2>";
        $Haruka = new student();
        $Haruka->fname = "Haruka";
        $Haruka->lname = "Nakamura";
        $Haruka->bdate= "2000";
        $Haruka->country = "Japan";
        echo "<h1>".$Haruka->displayDetails()."</h1>";
        echo "<h2>".$Haruka->displayName()."</h2>";
        echo "<h2>".$Marcelo->displayName()."</h2>";





        class student2{
            private $fname;      
            private $lname;      
            private $bdate;      
            private $country;
            function displayDetails(){
                return "Student Name: $this->fname $this->lname, Birthdate: $this->bdate, From: $this->country";
            }
            function displayName(){
                return "Student Name: $this->fname $this->lname";
            }
        }
        $Marcelo = new student2("Marcelo","Romero","2015","Brazil");
        echo "<h1>".$Marcelo->displayDetails()."</h1>";
        echo "<h2>".$Marcelo->displayName()."</h2>";
        $Haruka = new student2("Haruka","Nakamura","2000","Japan");
        echo "<h1>".$Haruka->displayDetails()."</h1>";
        echo "<h2>".$Haruka->displayName()."</h2>";
        echo "<h2>".$Marcelo->displayName()."</h2>";
    ?>
</body>
</html>