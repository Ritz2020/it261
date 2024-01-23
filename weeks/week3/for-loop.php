<?php

// this will demonstrate for loops and in addition to placing your php inside you HTML!!!
// the for loop - Loops through a block of code a specified number of times.
// for (init counter; test counter; increment counter) { code to be excuted for each iteration;}
//  celcius and fahrenheit
// $far = ($cel * 9/5) + 32;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Celcius Table</title>
    <style>
* {
    padding:0;
    margin:0;
    box_sizing:border-box;
}

table  {
    width:500px;
    margin:20px auto;
    border-collapse: collapse;
    borser:1px solid lightblue;
}

td,th  {
    border-collspe: collapse;
    border: 1px solid lightblue;
    padding:5px;
}

h1, h2{
    text-align:center;
    margin: 10px 0;
    color:green;
}
</style>
</head>
<body>
<h1> My Celcius / Fahrenheit Table! </h1>

<table>
<tr>
<th>Celcius</th>
<th>Fahrenheit </th>
</tr>

<?php
for($cel = 0; $cel <= 100; $cel += 3){
    $far = ($cel * 9/5) + 32;
echo '<tr>';
echo '<td>'.$cel.' degrees </td>';
echo '<td>'.$far.' degrees </td>';
echo '</tr>';
} 
?>
</table>

<table>
<tr>
<th>Celcius</th>
<th>Fahrenheit </th>
</tr>

<?php
for($cel = 0; $cel <= 100; $cel += 3){
    $far = ($cel * 9/5) + 32;
    $far_friendly = number_format($far, 0);
echo '<tr>';
echo '<td>'.$cel.' degrees </td>';
echo '<td>'.$far_friendly.' degrees </td>';
echo '</tr>';
} 
?>
</table>

<h2>
    This is a kilometer/mileage table !
</h2>
<table>
<tr>
<th>Mileage</th>
<th>kilometer </th>
</tr>

<?php
for($mil = 0; $mil <= 100; $mil += 5){
    $kil = $mil * 1.6;
echo '<tr>';
echo '<td>'.$mil.' miles </td>';
echo '<td>'.$kil.' kilometers </td>';
echo '</tr>';
} 
?>
</table>


</body>
</html>