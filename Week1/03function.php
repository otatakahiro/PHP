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
        // function nameDisplayer($name,$family,$country="Universe") {
        //     echo "welcome $name $family from $country</br>";
        // };
        // echo(nameDisplayer("Takahiro","Ota"));
        // echo(nameDisplayer("Hiro","Tomoyose","Japan"));
        // echo(nameDisplayer("Hikaru","Kayo"));
        
        function word_counter($inputString){
            $inputString = trim($inputString);
            if(strlen($inputString)>0){
                $words = 1;
                for($idx=0; $idx<strlen($inputString); $idx++) {
                    if($inputString[$idx]==" "){
                        $words++;
                    }
                }
            }
            return $words;
        }



        function string_reverse($inputString){
            $inputString = trim($inputString);
            if(strlen($inputString)>0){
                $revString = "";
                for($idx=strlen($inputString)-1; $idx>=0; $idx--) {
                    $revString .= $inputString[$idx];
                    }
                    return $revString;
                }
                return "";
        }


        // function character_counter($character,$inputString){
        //     $inputString = trim($inputString);
        //     if(strlen($inputString)>0){
        //         $character = 0;
        //         for($idx=0;$idx<strlen($inputString); $idx++) {
        //             if($inputString[$idx]==""){
        //                 $character++;
        //             }
        //         }
        //     }
        //     return $character;
        // }

        function character_finder($inputCharacter,$inputString,$caseSensi =true) {
            $inputString = trim($inputString);
            if(!$caseSensi){
                $inputCharacter = strtolower($inputCharacter);
                $inputString =strtolower($inputString);
            }
            if(strlen($inputString)>0){
                $words = 0;
                for($idx=0; $idx<strlen($inputString); $idx++) {
                    if($inputString[$idx]==$inputCharacter){
                        $words++;
                    }
                }
                return $words;
            }
            return 0;
        }
        $str = "     Write a function which count the words without using the str_word_count Function.";
        echo "Your string contains: ".word_counter($str)."Words</br>";
        // $str = "Marcelo";
        echo "Reverese: ".string_reverse($str)."</br>";
        echo "Your string contains: ".character_finder("f",$str, true)." Characters";
 


    ?>
</body>
</html>