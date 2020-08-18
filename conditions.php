<?php
/**
 * Series of exercises on PHP conditional structures.
*/  

// 1.1 Clean your room Exercise 
echo "<h4>1.1 Clean your room Exercise</h4>";
$room_is_filthy = true;

if($room_is_filthy == true){
	echo "Yuk, Room is dirty : let's clean it up !";
	//cleanup_room();
	echo "<br>Room is now clean!";
	$room_is_filthy = false;
} else {
	echo "<br>Nothing to do, room is neat.";
}

// 1.2 Clean your room Exercise, improved
echo "<h4>1.2 Clean your room Exercise, improved</h4>";
// Create the array of possible states
$possible_states = ["health hazard", "filthy", "dirty", "clean", "immaculate"];

// When testing, change the index value to navigate to the possible array values
$room_filthiness = $possible_states[0]; 

if( $room_filthiness ==  "health hazard" OR $room_filthiness == "filthy"){
	echo "Yuk, Room is Disgusting! Let's clean it up !";
} else if( $room_filthiness ==  "dirty" ){
	echo "Yuk, Room is dirty : let's clean it up !";
// ...
} else {
	echo "<br>Nothing to do, room is neat.";
}

// 2. "Different greetings according to time" Exercise
echo "<h4>2. Different greetings according to time Exercise</h4>";

date_default_timezone_set('Europe/Brussels');
$now = date("H\hi"); // get the current time 23h00 format

// Test the value of $now and display the right message according to the specifications.
echo "the time is " . $now . "<br />";
if($now > "05h00" AND $now < "09h00"){
	echo "Good morning !";
}elseif($now > "09h01" AND $now < "12h00"){
	echo "Good day !";
}elseif($now > "12h01" AND $now < "16h00"){
	echo "Good afternoon !";
}elseif($now > "12h01" AND $now < "16h00"){
	echo "Good evening !";
}elseif($now > "21h01" AND $now < "04h59"){
	echo "Good night !";
}

// 3. "Different greetings according to age" Exercise
echo "<h4>3. Different greetings according to age Exercise</h4>";

if(isset($_GET['age1'])){
	$age = $_GET['age1'];
	// Form processing
	if($age < 12){
		echo "Hello kiddo!";
	}elseif($age >= 12 AND $age < 18){
		echo  "Hello Teenager !";
	}elseif($age >= 18 AND $age <= 115){
		echo "Hello Adult !";
	}elseif($age > 115){
		echo  "Wow! Still alive ? Are you a robot, like me ? Can I hug you ?";
	}
	
}
// Form (incomplete)
?>	
<form method="get" action="">
	<label for="age1">Please type your age :</label>
	<input type="" name="age1">
	<input type="submit" name="submit" value="Greet me now">
</form>
<?php
//4. Display a different greeting according to the user's age and gender.
echo "<h4>4. Display a different greeting according to the user's age and gender.</h4>";
if(isset($_GET['age2'])){
	$age = $_GET['age2'];
	$gender = $_GET['gender1'];
	// Form processing
	if($age < 12){
		if($gender == "male"){
			echo "Hello mister kiddo!";
		}elseif($gender == "female"){
			echo "Hello Miss kiddo!";
		}
	}elseif($age >= 12 AND $age < 18){
		if($gender == "male"){
			echo "Hello mister Teenager!";
		}elseif($gender == "female"){
			echo "Hello Miss Teenager!";
		}
	}elseif($age >= 18 AND $age <= 115){
		if($gender == "male"){
			echo "Hello mister Adult!";
		}elseif($gender == "female"){
			echo "Hello Miss Adult!";
		}
	}elseif($age > 115){
		if($gender == "male"){
			echo  "Wow! mister still alive ? Are you a robot, like me ? Can I hug you ?";
		}elseif($gender == "female"){
			echo  "Wow! Madam still alive ? Are you a robot, like me ? Can I hug you ?";
		}
	}
}
?>
<form method="get" action="">
	<input type="radio" id="male" name="gender1" value="male">
	<label for="male">male</label><br>
	<input type="radio" id="female" name="gender1" value="female">
	<label for="female">Female</label><br>
	<label for="age2">Please type your age :</label>
	<input type="" name="age2">
	<input type="submit" name="submit" value="Greet me now">
</form>

<?php
//5. Display a different greeting according to the user's age, gender and mothertongue.
echo "<h4>5. Display a different greeting according to the user's age, gender and mothertongue.</h4>";
if(isset($_GET['age3'])){

	$age = $_GET['age3'];
	$gender = $_GET['gender1'];
	$english =$_GET['english'];
	
	if($english == "yes"){
		$greeting = "Hello";
	}else{
		$greeting = "Aloha";
	}
	// Form processing
	if($age < 12){
		if($gender == "male"){
			echo $greeting . " mister kiddo!";
		}elseif($gender == "female"){
			echo $greeting . " Miss kiddo!";
		}
	}elseif($age >= 12 AND $age < 18){
		if($gender == "male"){
			echo $greeting . " mister Teenager!";
		}elseif($gender == "female"){
			echo $greeting . " Miss Teenager!";
		}
	}elseif($age >= 18 AND $age <= 115){
		if($gender == "male"){
			echo $greeting . " mister Adult!";
		}elseif($gender == "female"){
			echo $greeting . " Miss Adult!";
		}
	}elseif($age > 115){
		if($gender == "male"){
			echo  "Wow! mister still alive ? Are you a robot, like me ? Can I hug you ?";
		}elseif($gender == "female"){
			echo  "Wow! Madam still alive ? Are you a robot, like me ? Can I hug you ?";
		}
	}
}
?>
<form method="get" action="">
	<label for="english">Do you speak English ?</label><br>
	<input type="radio" id="yes" name="english" value="yes">
	<label for="yes">Yes</label><br>
	<input type="radio" id="no" name="english" value="no">
	<label for="no">No</label><br><br>
	<label for="gender1">what is your gender ?</label><br>
	<input type="radio" id="male" name="gender1" value="male">
	<label for="male">male</label><br>
	<input type="radio" id="female" name="gender1" value="female">
	<label for="female">Female</label><br>
	<label for="age3">Please type your age :</label>
	<input type="" name="age3">
	<input type="submit" name="submit" value="Greet me now">
</form>

<?php
//6. The Girl Soccer team
echo "<h4>6. The Girl Soccer team</h4>";
$name = $_GET["name"];
$age = $_GET["age"];
$gender = $_GET["gender"];
if($age >= 21 AND $age <=40){
	if($gender == "female"){
		echo $name . " welcome to the team !";
	}else{
		echo $name . "! Sorry you don't fit the criteria";
	}
}

?>

<form method="get" action="">
	<label for="name">What is your Name :</label>
	<input type="text" name="name"><br />
	<label for="age">What is your Age  :</label>
	<input type="number" name="age"><br />
	<label for="gender">what is your gender ?</label><br>
	<input type="radio" id="male" name="gender" value="male">
	<label for="male">male</label><br>
	<input type="radio" id="female" name="gender" value="female">
	<label for="female">Female</label><br>
	<input type="submit" name="submit" value="Submit	">
</form>

<?php
//7. Achieve the same, without the ELSE.
echo "<h4>7. Achieve the same, without the ELSE.</h4>";
$name = $_GET["name"];
$age = $_GET["age"];
$gender = $_GET["gender"];
if($age >= 21 AND $age <=40){
	if($gender == "female"){
		echo $name . " welcome to the team !";
	}
	if($gender == "male"){
		echo $name . "! Sorry you don't fit the criteria";
	}
}

?>

<form method="get" action="">
	<label for="name">What is your Name :</label>
	<input type="text" name="name"><br />
	<label for="age">What is your Age  :</label>
	<input type="number" name="age"><br />
	<label for="gender">what is your gender ?</label><br>
	<input type="radio" id="male" name="gender" value="male">
	<label for="male">male</label><br>
	<input type="radio" id="female" name="gender" value="female">
	<label for="female">Female</label><br>
	<input type="submit" name="submit" value="Submit">
</form>

<?php
//8. "School sucks!" Exercise
echo "<h4>8. School sucks! Exercise</h4>";
$grade = $_GET["grade"];
if($grade >= 0 AND $grade <= 4){
	echo "This work is really bad. What a dumb kid! ";
}elseif($grade >= 5 AND $grade <= 9){
	echo "This is not sufficient. More studying is required.";
}elseif($grade == 10){
	echo "barely enough!";
}elseif($grade >= 11 AND $grade <= 14){
	echo "Not bad!";
}elseif($grade >= 15 AND $grade <= 18){
	echo "Bravo, bravissimo!";
}elseif($grade >= 19 AND $grade <= 20){
	echo "Too good to be true : confront the cheater!";
}else{
	echo "Error please try again";
}
?>
<form method="get" action="">
	<label for="grade">Grade</label>
	<input type="number" name="grade"><br />
	<input type="submit" name="submit" value="Submet">
</form>