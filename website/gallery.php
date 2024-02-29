<?php 
include('config.php');
include('./includes/header.php'); ?>

<?php 

$dog['Border_Collie'] = 'border_Recognized as <b>The smartest dog</b>!';
$dog['Poodle'] = 'poodle_Love to learn new tricks.';
$dog['German_Shepherd'] = 'german_Swiss army knife of dogs.';
$dog['Golden_Retriever'] = 'golden_Great smart family pets.';
$dog['Doberm_Pinscher'] = 'doberm_Versatile, reponsive and quick learner.';

// variable key        value
// $name               $image
//  defined by <?php foreach($people as $name => $image) : 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Week 8 homework Gallery</title>

    <style>
        table {
            border:2px solid orange;
            border-collapse: collapse;
            margin:10px auto;
        }

        td {
            border:1px solid grey;
            padding:6px;
            
        }
        #wrapper {
            max-width: 1000px;
            margin:30px auto;
        }
        img {
            max-width:450px;
        }
        
/* footer{
    height: 60px;
    line-height: 60px;
    border-top: 1px dotted brown;
    font-size: .9em;
}

footer ul{
    display:flex;
    justify-content:center;
    list-style-type:none;
    margin-bottom: 0;
}

footer li{
    justify-content:center ;
    margin:15px;
    
} */

       
    </style>
</head>
<body>
    <div id="wrapper">
    <table>
        <?php foreach($dog as $name => $image) :?>
        <tr>
            <td><img src="images/gallery/<?php echo substr($image, 0, 6) ;?>.jpg" alt="<?php echo str_replace('_', ' ', $name);?>"></td>
            <td><?php echo str_replace('_', '', $name) ;?></td>
            <td><?php echo substr($image,7);?></td>
            
        </tr>
        <?php endforeach; ?>
    </table>

    </div> 

<?php include('./includes/footer.php'); 