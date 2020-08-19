<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Apology generator.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">


    <title>Apology generator</title>
    <style>
        img {
            margin-right: auto;
            margin-left: auto;
        }
        textarea {
            width: 40vw;
            height: 20rem;
            padding-right: 3rem;
        }
        section {
            display:flex;
            justify-content: space-between;
        }
        form {
            width: 50vw;
            line-height:35px;
            text-align: left;
        }
        #name {
            margin-left: 0;
            padding-left: 0;
        }
        .label{
            padding: 0;
        }
        @media only screen and (max-width: 768px){
            section {
                display: inline;
            }
            .textAreaLabel,textarea{
                width: 85vw;
                margin: 3rem;
            }
            form {
            width: 100vw;
            }

            
        }
    </style>
</head>
<body>
<?php

$date = date("l, d M Y");
$teacher = $_GET["teacher"];
$child = $_GET["name"];
$gender = $_GET["gender"];
$reason = $_GET["reason"];

if($gender == "boy"){
    $myChild = "My son $child";
    $identifier = "his";
    $identifier2 = "he";

}elseif($gender == "girl"){
    $myChild = "My daughter $child";
    $identifier = "her";
    $identifier2 = "she";
}

switch($reason){
    case "illness":
        $reasonText = "$identifier state of health justifies this absence. The family doctor recommended a period of rest.";
        $durationText = "Our child should return to class in a week.";
        break;
    case "death":
        $reasonText = "$identifier loving pet or (family member) has passed away, currently $identifier is in sad situation.";
        $durationText = "Our child should return to class in a week.";
        break;
    case "activity":
        $reasonText = "In fact, we went out with them late last night, and we chose to give them two extra sleep instead of requiring them to go to school too tired for that day would be really profitable.";
        $durationText = "Our child should return to class tomorow.";
        break;
    case "Family":
        $reasonText = "our child participated in a family event ($identifier grandmother’s birthday party). The family reunion that took place on that occasion kept us awake quite late and I took responsibility for relieving $identifier from schoolwork late in the day.";
        $durationText = "Our child should return to class tomorow.";
        break;

}

$message = "Dear $teacher                       date: $date

$myChild, a 4th year student at your school, will not be able to attend class today.

$reasonText

$durationText

For any further information, please do not hesitate to contact us.

Our most sincere greetings
Signature of parents (mother or father).";
?>
<img src="./Apology generator_200x200.png" alt="Logo">

<section>
    <form method="get" action="">
        <label class="label" for="name">Child name</label>
        <input type="text" name="name" id="name"><br /><br />
        <label class="label" for="gender">Gender:</label>
        <input type="radio" name="gender" id="boy" value="boy">
        <label for="boy">Boy</label>
        <input type="radio" name="gender" id="girl" value="girl">
        <label for="girl">girl</label><br />
        <label class="label" for="teacher">Teacher</label>
        <input type="text" name="teacher" id="teacher"><br />
        <p>Reason for the absence:</p>
        <input type="radio" name="reason" id="illness" value="illness">
        <label class="label"for="illness">Illness.</label><br />
        <input type="radio" name="reason" id="death" value="death">
        <label class="label"for="death">Death of the pet (or a family member).</label><br />
        <input type="radio" name="reason" id="activity" value="activity">
        <label class="label"for="activity">Significant extra-curricular activity.</label><br />
        <input type="radio" name="reason" id="Family" value="Family">
        <label class="label"for="Family">Family and professional reasons.</label><br />
        <input type="submit" name="submit" value="Submit">
    </form>
    <label class="textAreaLabel">Generated message
    <textarea id="textArea" readonly="readonly">
    <?php
    $submet = $_GET["submit"];
    $generator = ($submet == "Submit") ? $message: "The message will be generated in this area.";
     echo $generator; 
     ?>
     </textarea>>
    </label>
</section>
    
</body>
</html>