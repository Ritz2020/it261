<?php
// my variables

// don't forget that a variable is a merely a container for data.


$name = "Yan";  // Yan is a string
$name ='Hattie';
echo $name;

$body_temp = 98;  // 98 is an integer
$body_temp_new = 98.6;    // 98.6 is afloat
echo '<br>';
echo "<br>";
echo $body_temp;
echo "<br>";
echo $body_temp_new;
echo "<br>";
echo "My name is $name!";
echo "<br>";
echo 'My name is $name!';  // if there is a variable nested in a single quote echo, the variable needs specific punctuation
echo "<br>";
echo 'My name is '.$name.'! ';

echo "<br>";
echo 'The normal body temprature for a human being is  '.$body_temp_new.'! ';
echo "<br>";
$name = 'Sharon';
echo $name;
echo "<br>";
$x = 20;
$y = 5;

$z = $x + $y; // I'm useing the term "assigned" vs equals
echo $z;
echo "<br>";
$z = $x * $y;
echo $z;
echo "<br>";
$z = $x / $y;
echo $z;
echo "<br>";
$first_name = 'Yan';
$last_name = 'Zhao';
echo $first_name." ". $last_name;
echo "<br>";
echo $first_name.' '. $last_name;
echo "<br>";
echo "My full name is $first_name $last_name"; // it works!
echo "<br>";
// echo "My full name is '.first_name.' '.$last_name.'" doesn't work
echo "<br>";
echo 'My full name is '.$first_name.' '.$last_name.'';