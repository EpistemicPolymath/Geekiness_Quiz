<?php
/**
 * Created by PhpStorm.
 * User: EpistemicPolymath
 * Date: 2/4/2017
 * Time: 7:31 PM
 */


#Grab the user input from the form
$q1_response = filter_input(INPUT_POST,'question_1');
$q2_response = filter_input(INPUT_POST,'question_2');
$q3_response = filter_input(INPUT_POST,'question_3');
$q4_response = filter_input(INPUT_POST,'question_4');
$q5_response = filter_input(INPUT_POST,'question_5');
$q6_response = filter_input(INPUT_POST,'question_6');
$q7_response = filter_input(INPUT_POST,'question_7');



#Create Question Arrays
$q1_answers = array("Less than 3"=>0, "3-10"=>5, "More than 10"=>10);
$q2_answers = array("Romance/Reality TV"=>0, "Action/Thriller/Crime"=>3, "Drama/Documentary/Natural Films"=>6, "Comedy/Animation"=>9, "Science Fiction/Fantasy"=>12);
$q3_answers = array("Nope"=>0, "Only what I studied in school"=>5, "Of Course!"=>10);
$q4_answers = array("Get whatever the sales person says is best for my needs."=>0, "Get a model identical or similar to that of my friends."=>2, "Ask a friend or read reviews online."=>5, "I already know what mobile I want as I follow mobile industry updates."=>10);
$q5_answers = array("Ugh. I didn't like ANYTHING in school."=>0, "Physical Education"=>2, "Art Literature or History"=>3, "Computers, Math, or Science"=>10);
$q6_answers = array("Buy a new one."=>0, "Take it to my usual repair shop."=>2, "Try to fix it myself with some help from the net."=>10);
$q7_answers = array("Out at party or bar."=>0, "Gaming with friends"=>5, "Surfing the net or reading a book."=>10);

#Create answers array

$answers = [];

#Question 1 Answer Placed in $answers
foreach ($q1_answers as $key=>$variable){

    if ($key == $q1_response){

        $answers[] = $variable;
        break;
    }

}




#Question 2 Answer Placed in $answers
foreach ($q2_answers as $key=>$variable){

    if ($key == $q2_response){

        $answers[] = $variable;
        break;
    }

}



#Question 3 Answer Placed in $answers
foreach ($q3_answers as $key=>$variable){

    if ($key == $q3_response){

        $answers[] = $variable;
        break;
    }

}



#Question 4 Answer Placed in $answers
foreach ($q4_answers as $key=>$variable){

    if ($key == $q4_response){

        $answers[] = $variable;
        break;
    }

}

#Question 5 Answer Placed in $answers
foreach ($q5_answers as $key=>$variable){

    if ($key == $q5_response){

        $answers[] = $variable;
        break;
    }

}

#Question 6 Answer Placed in $answers
foreach ($q6_answers as $key=>$variable){

    if ($key == $q6_response){

        $answers[] = $variable;
        break;
    }

}

#Question 7 Answer Placed in $answers
foreach ($q7_answers as $key=>$variable){

    if ($key == $q7_response){

        $answers[] = $variable;
        break;
    }

}

echo print_r($answers) . "<br />";


# Call Function to calculate results with array $answers as argument
calculate_result($answers);


# Function take array $answers as a parameter
function calculate_result($answers){
    $total = " ";

    foreach($answers as $key=>$variable){

        $total += $variable;

        echo $variable . "<br />";
        echo $total . "<br />";

    }



}

