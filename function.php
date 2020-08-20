<?php
    // Exercises
    echo "<h4>1. Exercises</h4>";

    // capitalizes the first letter of a string.
    function capitalizesFirstLetter($str){
        echo "$str ====>".ucfirst($str);
    }

    capitalizesFirstLetter("function");

    echo "<h4>2. Exercises</h4>";
    // Display the current year.
    echo date("Y");

    echo "<h4>3. Exercises</h4>";
    // Display the current date and time.
    echo date("d-m-Y H:i:s");

    echo "<h4>4 & 5. Exercises</h4>";
    // Display the sum of two arguments and check if the arguments are numbers.
    function sum($a, $b){
        if(is_numeric($a) AND is_numeric($b)){
        $total = $a + $b;
        echo "$a + $b = $total";
        }else{
            echo "Error: argument is the not a number.";
        }

    }
    sum(13,35);

    echo "<h4>6. Exercises</h4>";
    // Display the the first letter of every word in the string and capitalize it.
    $string = "In code we trust!";
    echo $string . "<br>";

    function firstLetter($string){
        $array = explode(" ",$string);
        foreach($array as $word){
            echo strtoupper($word[0]);
        }
    }
    firstLetter($string);

    echo "<h4>7 & 8. Exercises</h4>";
    // Find and replace in array.
    $array = array("caecotrophie", "chaenichthys","microsphaera", "sphaerotheca");
    $array1 = array("cæcotrophie", "chænichthys","microsphæra", "sphærotheca");
    function findReplace($array){
        $arrayRep = array();
        foreach($array as $word){
            $test1 = strpos($word, "ae");
            $test2 = strpos($word, "æ");
            if($test1 === false){
                array_push($arrayRep, str_replace("æ", "ae", $word));
            }elseif($test2 === false){
            array_push($arrayRep, str_replace("ae", "æ", $word));
            }
        }
        print_r($arrayRep);
    }

    findReplace($array);

    echo "<h4>9. Exercises</h4>";
    // messages
    function genMessages($message, $class){
        echo "<div class='$class'>$class: $message</div>";
    }
    genMessages("Incorrect email address", "error");
    echo "<h4>10. Exercises</h4>";
    // messages
    function genMessages1($message, $class = "info"){
        echo "<div class='$class'>$class: $message</div>";
    }
    genMessages1("Incorrect email address");

    echo "<h4>11. Exercises</h4>";
    // Generate a new word
    function genWord($min, $max){
        $wordLength = rand($min, $max);
        $word = "";
        for($i = 0; $i < $wordLength; $i++){
            $word .= chr(rand(97, 120));
        }
        echo $word . "  ";
    }
    echo "<h4>Generate a new word</h4>";
    if(isset($_GET['submit'])){
        genWord(1, 5);
        genWord(7, 15);
    }

?>
<form method="get"action="">
<input type="submit" name="submit" value="Generate"> 
</form>

<?php
    echo "<h4>12. Exercises</h4>";
    // De-capitalize the string

    $string = "STOP YELLING I CAN'T HEAR MYSELF THINKING!!";
    echo "$string ====> ";
    echo strtolower($string);


    echo "<h4>13. Exercises</h4>";
    // De-capitalize the string
    function calculate_cone_volume($ray, $height){
    $volume = pow($ray,2) * pi() * $height * (1/3);  
    echo "The volume of a cone which ray is $ray and height is $height =  $volume  cm<sup>3</sup><br />";
    }
    calculate_cone_volume(3, 4);
?>