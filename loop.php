<?php
//Exercises
echo "<h4>Exercises</h4>";
$a = 1;
while($a <= 120){
    echo $a."<br />";
    $a++;
}

for($i = 1; $i <= 120; $i++){
    echo $i."<br />";
}

$starups = array("Christophe", "Nicolas", "Calvin", "Simon", "John", "Aurore", "Gerardo", "Adrien", "Robby", "Maxendre", "Albert", "Stephane", "Nathan", "Robin", "Jean-Charles", "François", "Jurgen", "Pierre", "Linard", "Loïc", "Bastien", "Marie", "ALeksandra");
foreach($starups as $starup){
    echo "$starup<br />";
}
echo "<h4>dropdown</h4>";
$countries = array("GN"=>"Guinea", "FR"=>"France", "BE"=>"Belgium", "LB"=>"Lebanon", "SN"=>"Senegal", "DE"=>"Germany", "GR"=>"Greece", "CH"=>"Switzerland", "IT"=>"Italy", "US"=>"United States");
?>

<form method="get" action="">
    <select name="country" id="country">
        <option selected value=""></option>
        <?php
            foreach($countries as $key=>$country){
                echo "<option value='$key'>$country</option>";
            }
        ?>
    </select>
    <input type="submit" name="submit" value="submit">
</form>