<?php

#Variable to store user input
$responses = [];

#Grab the user input from the form
for ($i=1;$i<=7;$i++) {
    $responses[$i] = filter_input(INPUT_POST,'question_'.$i);
}


#Create Question Arrays
$scores = [
    1 => array("Less than 3"=>0, "3-10"=>5, "More than 10"=>10),
    2 => array("Romance/Reality TV"=>0, "Action/Thriller/Crime"=>3, "Drama/Documentary/Natural Films"=>6, "Comedy/Animation"=>9, "Science Fiction/Fantasy"=>12),
    3 => array("Nope"=>0, "Only what I studied in school"=>5, "Of Course!"=>10),
    4 => array("Get whatever the sales person says is best for my needs."=>0, "Get a model identical or similar to that of my friends."=>2, "Ask a friend or read reviews online."=>5, "I already know what mobile I want as I follow mobile industry updates."=>10),
    5 => array("Ugh. I didn't like ANYTHING in school."=>0, "Physical Education"=>2, "Art Literature or History"=>3, "Computers, Math, or Science"=>10),
    6 => array("Buy a new one."=>0, "Take it to my usual repair shop."=>2, "Try to fix it myself with some help from the net."=>10),
    7 => array("Out at party or bar."=>0, "Gaming with friends"=>5, "Surfing the net or reading a book."=>10)
];

#Create answers array
$answers = [];

# For each score that corresponds to an inputs $offset
foreach ($scores as $offset => $score) {

    # For each score as its expected response and numeric value
    foreach ($score as $key => $value) {

        # If the expected response is what the response actually was...
        if ($key == $responses[$offset]) {

            # Add the score to the $answers array
            $answers[] = $score;

            # Break from loop
            break;

        }

    }

}

echo "<pre>";
echo print_r($answers);
echo "</pre>";

# Call Function to calculate results with array $answers as argument
calculate_result($answers);


# Function take array $answers as a parameter
function calculate_result($answers){
    #Create Total Variable
    $total = 0;

    # Foreach Loop to add up Results
    foreach($answers as $key=>$variable){

        $total += $variable;

        echo $variable . "<br />";
        echo $total . "<br />";

    }

    #Begin comparison with total and create results page




}

