<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homework Calculator 1 PHP Form</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
    <h1> My Travel Calculator </h1>
    <form action="<?Php echo $_SERVER['PHP_SELF'];?>" method="post">
    <fieldset>
        <label>Name</label>
        <input type="text" name="name">

        <label>Email</label>
        <input type="email" name="email">


        <label>Total miles driving</label>
        <input type="number" name="miles">

        <label>Your driving speed</label>
        <input type="number" name="speed">

        <label>Hours driving per day</label>
        <input type="number" name="hours">

        <lable>Price of gas per gallon</label>
        <ul>
            <li><input type="radio" name="price" value="3.80">$3.80</li>
            <li><input type="radio" name="price" value="4.20">$4.20</li>
            <li><input type="radio" name="price" value="4.70">$4.70</li>
        </ul>
        <label>Fuel efficiency</label>
        
        <select name="efficiency">
        <option value="" NULL>Selcte one</option>
        <option value="40" >Great @ 40mpg</option>
        <option value="30" >Good @ 30mpg</option>
        <option value="20" >Poor @ 20mpg</option>
        <option value="10" >Terrible @ 10mpg</option>
        </select>
        <input type="submit" value="Calculate">

        <p class="center"><a  href=""><i>Reset</i></a></p>



    </fieldset>
</form>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(empty($_POST['name'] &&
    $_POST['email'] &&
    $_POST['miles'] &&
    $_POST['speed'] &&
    $_POST['hours'] &&
    $_POST['efficiency'] &&
    $_POST['price'])) {
        echo '<p class="error">Please fill out all of the fields</P>';
    } elseif (isset($_POST['name'],
    $_POST['email'],
    $_POST['miles'],
    $_POST['speed'],
    $_POST['hours'],
    $_POST['efficiency'],
    $_POST['price'])) {
        $name = $_POST['name'];
        $emial = $_POST['email'];
        $miles = $_POST['miles'];
        $speed = $_POST['speed'];
        $hours = $_POST['hours'];
        $efficiency = $_POST['efficiency'];
        $price = $_POST['price'];
        $dr_hours = $miles / $speed;
        $dr_days = $dr_hours / $hours;
        $fuel = $miles / $efficiency;
        $cost =  $fuel * $price;

        echo'
        <div class="box">
        <p><b>Hello '.$name.'</b>, you will be travelling a total of<b> '.number_format($dr_hours,2).' hours</b>, taking <b>'.number_format($dr_days,2).' days</b>. </p>
        <p>And, you will be using <b>'.number_format($fuel, 2).' gallons</b> of gas, costing you <b>'.number_format($cost, 2).' dollars</b>.</p>
        
        
        </div>
        ';
    }








} // end server request
?>
</body>
</html>