<?php

include('config.php');

$sql = 'SELECT * FROM people';

// now, we need to connect to the database!!!

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql); or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));