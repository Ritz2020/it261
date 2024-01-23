<?php
// date function and if statement
echo date('Y');
echo '<br>';
echo date('l, F j, Y H:i: A');
echo '<br>';
echo date('l, F j, Y h:i: A');

echo '<br>';
date_default_timezone_set('America/Los_Angeles');

echo '<br>';
echo date('l, F j, Y h:i: A');

echo '<br>';

$name = 'Yan';
$our_time = date('H:i: A');
echo $our_time;
echo '<br>';
// the logid is if the time is less or equal to 11, then it is morning.
// if the time is less or equal to 17, which is 5 pm, then it is afternoon.
// now we will have an else, that will mean it is evening.

if ($our_time <= 11) {
    echo '<h2 style="color=orange;">Good Morning</h2>
    <img src="images/sun.jpg" alt="Sun">
    <p>It\'s time to get up!</P>
    ';
}

elseif ($our_time <= 17) {
    echo '<h2 style="color: green;"> Good Afternoon, '.$name.'</h2>
    <img src="images/tea.jpg" alt="Tea">
    <p>It\'s time to take a break!</p>
    ';
}
else{
    echo '<h2 style="color: blue;"> Good Evening, '.$name.'</h2>
    <img src="images/moon.jpg" alt="Moon">
    <p>Enjoy your peaceful time!</p>
    ';
}