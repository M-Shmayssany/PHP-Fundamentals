<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable Types</title>
</head>
<body>
    <?php
    $firstName = "Mohamed";
    $age = 44;
    $eyes = "brown";
    $familyMembers = array("Samir", "Nawal", "Bassima", "Nahida", "Salim", "Samir");
    $hungry = false;
    ?>
    <p>
    Hi! My name is <?php echo $firstName; ?>.
    </p>
    <p>
    I am <?php echo $age; ?> years old.
    </p>
    <p>
    My eyes are <?php echo $eyes; ?>.
    </p>
    <p>
    The first person in my family is <?php echo $familyMembers[0]; ?>.
    </p>
    <p>
    I am <?php if ($hungry == false) {echo "not";} ?> hungry.
    </p>
</body>
</html>