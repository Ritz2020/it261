<?php 
// our str_replace and substr functions!
// substr(string,start,length)

$statement = 'Presently, I am reading the Looming Tower';
echo $statement;
echo '<br>';
echo substr($statement,0);
echo '<br>';
echo substr($statement,1);
echo '<br>';
echo substr($statement,10);
echo '<br>';
echo substr($statement,11);
echo '<h2>Now, I would like to display just the words - I am reading </h2>';
echo '<br>';
echo substr($statement,11, 13);
echo '<br>';
echo substr($statement,1, 12);
echo '<br>';
echo substr($statement,-14);
echo '<br>';
echo substr($statement,11,12);
echo '<br>';
echo substr($statement,-13, 7);
echo '<br>';
echo substr($statement,4,11);
echo '<br>';
echo substr($statement,-20,2);
echo '<br>';
echo '<h2>Now for the str_replace function!</h2>';

$statement2 = 'HUlu\'s redition of the Looming Tower is based on the book named the Looming Tower!';

echo $statement2;
echo '<br>';

echo str_replace('the','The', $statement2);

