<?php

include('config.php');
include('./includes/header.php');

?>

<main>
<h1>Welcome to the Most Influntial Contemprary Architectures Page</h1>

<?php
$sql = 'SELECT * FROM building';

// now, we need to connect to the database!!!

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql)  or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

// we have a row, which translates into an array
// if our result is greater than 0, we are happy

if(mysqli_num_rows($result) >0) {

    // we are going to add a while loop
while($row = mysqli_fetch_assoc($result)) {
    echo '
    <h2>Information about: '.$row['building_name'].'</h2>
    <ul>
    <li>Designer: '.$row['designer_name'].'</li>
    <li>Location: '.$row['location'].'</li>
    <li>Built Date: '.$row['builtdate'].'</li>
    </ul>

    <p> For more information about '.$row['building_name'].', click <a href="building-view.php?id='.$row['building_id'].'">here</a></p>

    ';



} // end while loop


}else {
    echo'Nobody home!!!';
}
// we are going to release the server
@mysqli_free_result($result);

@mysqli_close($iConn);

?>
</main>

<aside>

</aside>
</div>
<!-- end wrapper -->

<?php
include('./includes/footer.php');