<?php
//11.2 Ternary exercises
echo "<h4>11.2 Ternary exercises</h4><br />";
$species = $_GET["species"];
$imgHumanURL = "https://media.giphy.com/media/L3hi9IwUHJWyVguUZJ/giphy.gif";
$imgCatURL = "https://media.giphy.com/media/VbnUQpnihPSIgIXuZv/giphy.gif";
$imgUnicornURL = "https://media.giphy.com/media/26vUw5sYGcqmMDoBy/giphy.gif";

//$imgURL = ($species == "human") ? $imgHumanURL : ($species == "cat") ? $imgCatURL : ($species == "unicorn") ? $imgUnicornURL : "";
$imgURL = ($species == "human") ? $imgHumanURL : (($species == "cat") ? $imgCatURL:(($species == "unicorn") ? $imgUnicornURL :"non"));
echo '<img src="' . $imgURL . '" alt="image" >';
?>

<form method="get" action="">
    <input type="radio" id="human" name="species" value="human">
    <label for="human">Human</label><br />
    <input type="radio" id="cat" name="species" value="cat">
    <label for="cat">Cat</label><br />
    <input type="radio" id="unicorn" name="species" value="unicorn">
    <label for="unicorn">unicorn</label><br />
    <input type="submit" name="submit" value="Submit">
</form>