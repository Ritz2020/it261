

<?php

$str = <<<EOT
One of my favorite books is The Handmaid's Tale, written by Margaret Atwood, and is presently a miniseries on HULU. Hulu's viewing audience is extremely excited about the miniseries and looks forward to the 5th season of the award-winning "Handmaid's Tale!"
EOT;
print_r($str);

echo '<br>';

$str = <<<EOT

Elizabeth Moss' rendition of June is right on! I liked the show's first two seasons!
EOT;
print_r($str);

echo '<br>';
$name = "ttale";
$myDoc =<<<EOT
One of my favorite books is The Handmaid's $name, written by Margaret Atwood, and is presently a miniseries on HULU. Hulu's viewing audience is extremely excited about the miniseries and looks forward to the 5th season of the award-winning "Handmaid's Tale!" 
EOT;
print_r($myDoc);

echo '<br>';
$name = "ttttale";
$myDoc =<<<EOD
One of my favorite books is The Handmaid's $name, written by Margaret Atwood, and is presently a miniseries on HULU. Hulu's viewing audience is extremely excited about the miniseries and looks forward to the 5th season of the award-winning "Handmaid's Tale!" 
EOD;
echo $myDoc;


echo '<br>';
$name = "Bush";
$myDoc =<<<EOD
I don't agree Geoge W $name's policy regarding the mid-east.
EOD;
echo $myDoc;
?>