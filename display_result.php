<?php
/**
 * Created by PhpStorm.
 * User: EpistemicPolymath
 * Date: 2/4/2017
 * Time: 7:31 PM
 */


#Grab the user input from the form
$q1_response = filter_input(INPUT_POST, 'question_1');
$q2_response = filter_input(INPUT_POST, 'question_2');
$q3_response = filter_input(INPUT_POST, 'question_3');
$q4_response = filter_input(INPUT_POST, 'question_4');
$q5_response = filter_input(INPUT_POST, 'question_5');
$q6_response = filter_input(INPUT_POST, 'question_6');
$q7_response = filter_input(INPUT_POST, 'question_7');


#Create Question Arrays
$q1_answers = array("Less than 3" => 0, "3-10" => 5, "More than 10" => 10);
$q2_answers = array("Romance/Reality TV" => 0, "Action/Thriller/Crime" => 3, "Drama/Documentary/Natural Films" => 6, "Comedy/Animation" => 9, "Science Fiction/Fantasy" => 12);
$q3_answers = array("Nope" => 0, "Only what I studied in school" => 5, "Of Course!" => 10);
$q4_answers = array("Get whatever the sales person says is best for my needs." => 0, "Get a model identical or similar to that of my friends." => 2, "Ask a friend or read reviews online." => 5, "I already know what mobile I want as I follow mobile industry updates." => 10);
$q5_answers = array("Ugh. I didn't like ANYTHING in school." => 0, "Physical Education" => 2, "Art Literature or History" => 3, "Computers, Math, or Science" => 10);
$q6_answers = array("Buy a new one." => 0, "Take it to my usual repair shop." => 2, "Try to fix it myself with some help from the net." => 10);
$q7_answers = array("Out at party or bar." => 0, "Gaming with friends" => 5, "Surfing the net or reading a book." => 10);

#Create answers array

$answers = [];

#Question 1 Answer Placed in $answers
foreach ($q1_answers as $key => $variable) {

    if ($key == $q1_response) {

        $answers[] = $variable;
        break;
    }

}


#Question 2 Answer Placed in $answers
foreach ($q2_answers as $key => $variable) {

    if ($key == $q2_response) {

        $answers[] = $variable;
        break;
    }

}


#Question 3 Answer Placed in $answers
foreach ($q3_answers as $key => $variable) {

    if ($key == $q3_response) {

        $answers[] = $variable;
        break;
    }

}


#Question 4 Answer Placed in $answers
foreach ($q4_answers as $key => $variable) {

    if ($key == $q4_response) {

        $answers[] = $variable;
        break;
    }

}

#Question 5 Answer Placed in $answers
foreach ($q5_answers as $key => $variable) {

    if ($key == $q5_response) {

        $answers[] = $variable;
        break;
    }

}

#Question 6 Answer Placed in $answers
foreach ($q6_answers as $key => $variable) {

    if ($key == $q6_response) {

        $answers[] = $variable;
        break;
    }

}

#Question 7 Answer Placed in $answers
foreach ($q7_answers as $key => $variable) {

    if ($key == $q7_response) {

        $answers[] = $variable;
        break;
    }

}

// Testing measure print_r($answers) . "<br />";


# Call Function to calculate results with array $answers as argument
calculate_result($answers);


# Function take array $answers as a parameter
function calculate_result($answers)
{
    #Create Total Variable
    $total = " ";

    # Foreach Loop to add up Results
    foreach ($answers as $key => $variable) {

        $total += $variable;

       // echo $variable . "<br />";
       // echo $total . "<br />";

    }

    #Begin comparison with total and create results page
    #Result Page Global Variable Creation
    global $geekiness_level;
    global $img;
    global $description;

    If (($total >= 0) && ($total <= 10)) {

        $geekiness_level = "Non-Geek";
        $img = "<img src='img/non_geek.jpg'>";
        $description = "There isn't a single geeky bone in your body. 
    You prefer to party rather than study, and have someone else fix your computer, if need be. 
    You're just too cool for this. You probably don't even wear glasses.";

    }


    if (($total >= 11) && ($total <= 50)) {

        $geekiness_level = "Semi-Geek";
        $img = "<img src='img/semi_geek.jpg'>";
        $description = "Maybe you're just influenced by the trend, or maybe you just got it all perfectly balanced. 
        You have some geeky traits, but they aren't nearly as \"hardcore\" and they don't take over your life. 
        You like some geeky things, but aren't nearly as obsessive about them as the uber-geeks. You actually get to enjoy both world. ";

    }

    if (($total >= 51) && ($total <= 72)) {

        $geekiness_level = "Uber-Geek";
        $img = "<img src='img/uber_geek.jpg'>";
        $description = "You are the gek supreme! You are likely to be interested in technology, science, gaming, 
        and geeky media such as Sci-fi and fantasy. All the mean kids that used to laugh at you in high school 
        are now begging you for a job. Be proud of your geeky nature, for geeks shall inherit the Earth!";


    }

}


?>
<!-- HTML Page Creation -->
<!DOCTYPE html>
<html>
<head>
    <title>Geekiness Quiz Results</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<h1>Quiz Result: <?= $geekiness_level; ?></h1>


<span><?= $img; ?></span><br/> <br/>
<p class="p_formatting"><?= $description; ?></p>


</body>
</html>

