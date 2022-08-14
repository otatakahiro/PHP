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
        $students = array("Nak"=>80,"Kathleen"=>75,"Jiwon"=>80,"Marcelo"=>80);
        $students["Henry"] = 80;
        echo "<h3>Kathleen score is : ".$students['Kathleen']."</h3>";
        print_r($students);




        $friends =array("A","B","C","D","E");
        $students = array("Nak"=>[80,67,89],"Kathleen"=>[75,80,97],"Jiwon"=>[85,74,63],"Marcelo"=>[70,82,90]);
        $students["Henry"] = [40,59,81];
        echo "<h3>Kathleen score is : ".$students['Kathleen']."</h3>";
        foreach($students as $key => $value){
            echo "<h4>$key : $value[2]</h4>";
        }
// 数独
        print_r($students);
        echo "<br/>";
        print_r($friends);

        
        
        
        
        
        $a = array("Bruno Mars"=>"Just away you are","BTS"=>"Dinamite","The Weekend"=>"She","Maroon 5"=>"You","Charlie Puth"=>"It");
        foreach($a as $singer => $song){
            echo "<h4>$singer : $song</h4>";
        }

        $friends =array("A","B","C","D","E");
        $students = array("Nak"=>[80,67,89],"Kathleen"=>[75,80,97],"Jiwon"=>[85,74,63],"Marcelo"=>[70,82,90]);
        $students["Henry"] = [40,59,81];
        echo "<h3>Kathleen score is : ".$students['Kathleen'][1]."</h3>";
        foreach($students as $key => $value){
            echo "<h3>$key : ";
            foreach($value as $score) {
                echo "$score, ";
            }
            echo "<h3>";
        };
    ?>
</body>
</html>