<?php
//9. The "Switch" structure.
echo "<h4>9. The Switch structure.</h4>";
$grade = $_GET["grade"];

switch ($grade){
    case 0:
    case 1:
    case 2:
    case 3:
    case 4:
        echo "This work is really bad. What a dumb kid! ";
    break;
    case 5:
    case 6:
    case 7:
    case 8:
    case 9:
        echo "This is not sufficient. More studying is required.";
    break;
    case 10:
        echo "barely enough!";
    break;
    case 11:
    case 12:
    case 13:
    case 14:
        echo "Not bad!";
    break;
    case 15:
    case 16:
    case 17:
    case 18:
        echo "Bravo, bravissimo!";
    break;
    case 19:
    case 20:
        echo "Too good to be true : confront the cheater!";
    break;
    default:
        echo "Error please try again";
    break;

}
?>
<form method="get" action="">
	<label for="grade">Grade</label>
	<input type="number" name="grade"><br />
	<input type="submit" name="submit" value="Submet">
</form>