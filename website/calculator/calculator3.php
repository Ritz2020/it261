<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homework Calculator 3 stichy Form</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
    <h1> My Travel Calculator </h1>
    <form action="<?Php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
    <fieldset>
        <label>Name</label>
        <input type="text" name="name" value="<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST['name']) ;?>">

        <label>Email</label>
        <input type="email" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']) ;?>">


        <label>Total miles driving</label>
        <input type="number" name="miles" value="<?php if(isset($_POST['miles'])) echo htmlspecialchars($_POST['miles']) ;?>">

        <label>Your driving speed</label>
        <input type="number" name="speed" value="<?php if(isset($_POST['speed'])) echo htmlspecialchars($_POST['speed']) ;?>">

        <label>Hours driving per day</label>
        <input type="number" name="hours" value="<?php if(isset($_POST['hours'])) echo htmlspecialchars($_POST['hours']) ;?>">

        <lable>Price of gas per gallon</label>
        <ul>
            <li><input type="radio" name="price" value="3.80"<?php if(isset($_POST['price']) && $_POST['price'] == 3.80) echo 'checked="checked"';?>>$3.80</li>
            <li><input type="radio" name="price" value="4.20" <?php if(isset($_POST['price']) && $_POST['price'] == 4.20) echo 'checked="checked"';?>>$4.20</li>
            <li><input type="radio" name="price" value="4.70"<?php if(isset($_POST['price']) && $_POST['price'] == 4.70) echo 'checked="checked"';?>>$4.70</li>
        </ul>
        <label>Fuel efficiency</label>
        
        <select name="efficiency">
        <option value="1" <?php if(isset($_POST['efficiency']) && ($_POST['efficiency'] == 1)) echo 'selected= "unselected"' ;?>>Selcte one</option>
        <option value="40" <?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == 40) echo 'selected= "selected"' ;?>>Great @ 40mpg</option>
        <option value="30" <?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == 30) echo 'selected= "selected"' ;?>>Good @ 30mpg</option>
        <option value="20" <?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == 20) echo 'selected= "selected"' ;?>>Poor @ 20mpg</option>
        <option value="10" <?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == 10) echo 'selected= "selected"' ;?>>Terrible @ 10mpg</option>
        </select>
        <input type="submit" value="Calculate">

        <p class="center"><a  href=""><i>Reset</i></a></p>



    </fieldset>
</form>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(empty($_POST['name'])) {
    echo '<p class="error">Please fill out your name!</P>';
    }
    if(empty($_POST['email'])) {
    echo '<p class="error">Please fill out your email!</P>';
    }
    if(empty($_POST['miles'])) {
    echo '<p class="error">Please fill out the miles!</P>';
    }
    if(empty($_POST['speed'])) {
    echo '<p class="error">Please fill out the speed!</P>';
    }
    if(empty($_POST['hours'])) {
    echo '<p class="error">Please fill out the hours!</P>';
    }
    
    if(empty($_POST['price'])) {
    echo '<p class="error">Please check the price!</P>';
    }
    if($_POST['efficiency'] == 1) {
        echo '<p class="error">Please choose the efficiency!</P>';
        }
    if (isset($_POST['name'],
    $_POST['email'],
    $_POST['miles'],
    $_POST['speed'],
    $_POST['hours'],
    $_POST['efficiency'],
    $_POST['price'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $miles = $_POST['miles'];
        $speed = $_POST['speed'];
        $hours = $_POST['hours'];
        $efficiency = floatval($_POST['efficiency']);
        $price = $_POST['price'];
        $dr_hours = $miles / $speed;
        $dr_days = $dr_hours / $hours;
        $fuel = $miles / $efficiency;
        $cost =  $fuel * $price;

        if(!empty($name && $email && $miles && $speed && $hours && $price) && ($_POST['efficiency'] !=1)){
        echo'
        <div class="box">
        <p><b>Hello '.$name.'</b>, you will be travelling a total of<b> '.number_format($dr_hours,2).' hours</b>, taking <b>'.number_format($dr_days,2).' days</b>. </p>
        <p>And, you will be using <b>'.number_format($fuel, 2).' gallons</b> of gas, costing you <b>'.number_format($cost, 2).' dollars</b>.</p>
        
        
        </div>
        ';
    }
    }


} // end server request
?>
</body>
</html>