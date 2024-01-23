<?php
//  concatention
//  operators - assiggnment operators
//  some preset functions
//  arrays

$name = 'Yan';
$fist_name = 'Yan';
$last_name = 'Zhao';
echo $fist_name.' '.$last_name;
echo '<br>';
$name.= 'Zhao';  // no space between ' and Zhao will display without space between firs and last name. Pay attention that .= should be adjacent. space between name and . doesn't affect the displaying result
echo $name;
echo '<br>';
$name = 'Yan';
$name .= ' Zhao';
echo $name;
echo '<br>';
$color = 'red';
echo $color;
echo '<br>';

echo 'Yan\'s favorite color is '.$color.' ';
echo '<br>';

$x = 20;
$y = 5;
echo $x + $y;
echo '<br>';

$z = $x + $y;
echo $z;
echo '<br>';

$x = 20;
$x += 5;
echo $x;
echo '<br>';

$x = 100;
$x /=10;
echo $x;
echo '<br>';

$x = 100;
$x *=10;
echo $x;
echo '<br>';

echo '<h3> Our product, quantity and tax exercise </h3>';
// echo '<br>'; no <br> is needed here

$product = 120;
$quantity = 5;
$total= $product * $quantity;
$total *= 1.097;
echo $total;
echo '<h3> We would like our amount to reflect 2 decimal places -- we are thinking about floats and a new function - number_format() </h3>';

$product = 120;  // 120 is our integer
$quantity = 5;
$total= $product * $quantity;
$total *= 1.105;
$total_friendly = number_format($total, 2);
echo 'We have a total of <b>$'.$total_friendly.' </b> dollars';
echo '<br>';

$product = 120;  // 120 is our integer
$quantity = 5;
$total= $product * $quantity;
$total *= 1.098;
// $total_friendly = number_format($total, 2);
echo 'We have a total of <b> $'.number_format($total, 2).' </b> dollars';

echo '<h3> Our second preset function is our date function! </h3>';

echo date('Y');
echo '<br>';

echo date('l');
echo '<br>';

echo date("l jS \of F Y h:i:s A");
// Prints the day, date, month, year, time, AM or PM
echo '<br>';

echo date("l jS F Y h:i A");
echo '<br>';

date_default_timezone_set('America/Los_Angeles');
echo '<br>';
echo date("l jS \of F Y h:i A");

echo '<h3>Time for an array!</h3>';
echo '<h4>Below is an indexed array</h4>';
// can we echo an array? no we cannot

$fruit[] = 'banana';
$fruit[] = 'cherries';
$fruit[] = 'melon';
$fruit[] = 'kiwi';
$fruit[]= 'oranges';
$fruit[] = 'apples';

echo $fruit;
echo '<br>';
echo $fruit[2];
echo '<br>';

$fruit = array(
    'banana',
    'cherries',
    'melon',
    'kiwi',
    'oranges',
    'apples'
);

$fruit = [
    'banana',
    'cherries',
    'melon',
    'kiwi',
    'oranges',
    'apples'

];
echo '<br>';
print_r($fruit);
echo '<br>';
var_dump($fruit);

echo '<h3>Now we have anassociative array</h3>';

$nav = array(
    'index.php' => 'Home', // index is the key and home is the value
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'priject.php' => 'Project',
    'cintact.php' => 'Contact',
    'gallery.php' => 'Gallery',
);

echo '<pre>';
var_dump($nav);
echo '<pre>';









echo '<br>';