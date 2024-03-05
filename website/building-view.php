<?php

// do not call out the header include yet!!!
// the following information is above the doctype

include('config.php');
// include('./includes/header.php');
// is Get set???

if(isset($_GET['id'])) {
    $id = (int)$_GET['id'];

}else{
    header('Location: building.php');
}

$sql = 'SELECT * FROM building WHERE building_id ='.$id.'';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql)  or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) >0) {

    while($row = mysqli_fetch_assoc($result)) {
$building_name =stripcslashes ($row['building_name']);
$designer_name =stripcslashes ($row['designer_name']);
$location =stripcslashes ($row['location']);
$builtdate =stripcslashes ($row['builtdate']);
$blurb =stripcslashes ($row['blurb']);
$details =stripcslashes ($row['details']);
// will I add a column?

$feedback = '';

    }

} else {
    $feedback = 'Houston, we have a problem';
}

include('./includes/header.php');
// our open div #wrapper is inside the header.php

?>
<div id="wrapper">
<main>
<h1>Welcome to Architecture View Page</h1>
<h3>The most influntial architecture's image!</h3>
<figure>
<img src="./images/building<?php echo $id; ?>.jpg" alt="<?php echo $building_name; ?>">
<figcaption>
<?php echo $blurb ;?>
</figcaption>
  
</figure>


</main>

<aside>
<h2>Intruducing:<?php echo $building_name; ?></h2>
<ul>
    <?php 
    echo'
    <li><b> Building Name:</b>'.$building_name.'</li>
    <li><b> Designer Name:</b>'.$designer_name.'</li>
    <li><b> Location:</b>'.$location.'</li>
    <li><b> Built Date:</b>'.$builtdate.'</li>
    
    
    ';
    ?>
</ul>
<p><?php echo $details;?></P>
<p>Return to our <a href="building.php" > Building Page!</a></p>
</aside>
</div>
<!-- end wrapper -->


<?php

@mysqli_free_result($result);

@mysqli_close($iConn);

include('./includes/footer.php');