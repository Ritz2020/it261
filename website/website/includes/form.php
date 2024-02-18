

<?php

ob_start();
$first_name = '';
$last_name = '';
$email = '';
$c_bodies = '';

$phone = '';
$regions = '';

$comments = '';
$privacy = '';

$first_name_err = '';
$last_name_err = '';
$email_err = '';
$c_bodies_err = '';

$phone_err = '';
$regions_err = '';
$comments_err = '';
$privacy_err = '';



if($_SERVER['REQUEST_METHOD'] == "POST") {
// if inputs are empty, we will declare a statement elae we will assign the $_POST to a variable
// $wines = $_POST['wines']

    if(empty($_POST['c_bodies'])) {
        // say something or do something
        $c_bodies_err = 'What\'s your favorite celestial body?';
    } else {
        $c_bodies = $_POST['c_bodies'];
    }

    if(empty($_POST['first_name'])) {
      
        $first_name_err = 'Please fill in your first name';
    } else {
        $first_name = $_POST['first_name'];
    }

    if(empty($_POST['last_name'])) {
        
        $last_name_err = 'Please fill in your last name';
    } else {
        $last_name = $_POST['last_name'];
    }

    if(empty($_POST['email'])) {
        
        $email_err = 'Please fill in your email';
    } else {
        $email = $_POST['email'];
    }

   

    // if(empty($_POST['phone'])) {
    //     // say something or do something
    //     $phone_err = 'Please fill in your phone number';
    // } else {
    //     $phone = $_POST['phone'];
    // }

    if(empty($_POST['phone'])) { // if empty, type in your number
        $phone_err = 'Your phone number please!';
        } elseif(array_key_exists('phone', $_POST)){
        if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone']))
        { // if you are not typing the requested format of xxx-xxx-xxxx, display Invalid format
        $phone_err = 'Invalid format!';
        } else{
        $phone = $_POST['phone'];
        } // end else
        } // end main if

    if($_POST['regions'] == NULL) {
        // say something or do something
        $regions_err = 'Please choose your region';
    } else {
        $regions = $_POST['regions'];
    }

    if(empty($_POST['comments'])) {
        // say something or do something
        $comments_err = 'We value your input!';
    } else {
        $comments = $_POST['comments'];
    }

    if(empty($_POST['privacy'])) {
        // say something or do something
        $privacy_err = 'You must agree to receive spam email!';
    } else {
        $privacy = $_POST['privacy'];
    }

function my_c_bodies($c_bodies) {
    $my_return='';
    if(!empty($_POST['c_bodies'])) {
        $my_return = implode(',', $_POST['c_bodies']);
    }
    return $my_return;
} //end my_c_bodies function;

if(isset($_POST['first_name'],
$_POST['last_name'],
$_POST['email'],
$_POST['phone'],
$_POST['regions'],
$_POST['comments'],
$_POST['c_bodies'],
$_POST['privacy'], )) {

    $to = 'oszemeo@mystudentswa.com';
    $subject = 'Test email on '.date('m/d/y, h i A');
    $body = '
    First Name: '.$first_name.' '.PHP_EOL.'
    Last Name: '.$last_name.' '.PHP_EOL.'
    Email: '.$email.' '.PHP_EOL.'
   
    Celestial Bodies: '.$c_bodies.' '.PHP_EOL.'
    Regions: '.$regions.' '.PHP_EOL.'
    Phone: '.$phone.' '.PHP_EOL.'
    Comments: '.$comments.' '.PHP_EOL.'

    ';
$headers = array(
    'From' => 'oszemeo@mystudentswa.com'
);
// we will be adding an if statment - that this email from will work ONLY if all the fieds are filled out!!

if(!empty(
    $first_name &&
    $last_name &&
    $email &&
   
    $c_bodies &&
    $regions &&
    $phone &&
    $comments) && 
    preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone'])) {

        mail($to, $subject, $body, $headers);
        header ('Location:thx.php');
    }



}


} 
// closing server request method
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form for contact homework</title>
    <link href="./css/styles.css" type="text/css" rel="stylesheet">
</head>
<body> -->
    


<form action="<?php  echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>" method="post">
<fieldset>
<legend>
    <b>Contact Us!</b>
</legend> 
<label>First Name</label>
<input type="text" name="first_name" value="<?php if(isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name']) ;?>">
<span><?php echo $first_name_err; ?></span>

<label>Last Name</label>
<input type="text" name="last_name" value="<?php if(isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name']) ;?>">
<span><?php echo $last_name_err; ?></span>

<label>Email</label>
<input type="email" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']) ;?>">
<span><?php echo $email_err; ?></span>


<label>Phone</label>
<input type="tel" name="phone" placeholder="xxx-xxx-xxxx" value="<?php if (isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']) ;?>">
<span><?php echo $phone_err; ?></span>

<label>Favorite Celestial Bodies</label>

<ul>
    <li>
    <input type="checkbox" name="c_bodies[]" value="sun"<?php if(isset($_POST['c_bodies']) && in_array('sun', $c_bodies)) echo 'checked ="checked"'  ;?>>Sun
    </li>
    <li>
    <input type="checkbox" name="c_bodies[]" value="moon"<?php if(isset($_POST['c_bodies']) && in_array('moon', $c_bodies)) echo 'checked="checked"'  ;?>>Moon
    </li>
    <li>
    <input type="checkbox" name="c_bodies[]" value="mars"<?php if(isset($_POST['c_bodies']) && in_array('mars', $c_bodies)) echo 'checked="checked"'  ;?>>Mars
    </li>
    <li>
    <input type="checkbox" name="c_bodies[]" value="mercury"<?php if(isset($_POST['c_bodies']) && in_array('mercury', $c_bodies)) echo 'checked="checked"'  ;?>>Mercury
    </li>
    <li>
    <input type="checkbox" name="c_bodies[]" value="jupiter"<?php if(isset($_POST['c_bodies']) && in_array('jupiter', $c_bodies)) echo 'checked="checked"'  ;?>>Jupiter
    </li>
    <li>
    <input type="checkbox" name="c_bodies[]" value="venus"<?php if(isset($_POST['c_bodies']) && in_array('venus', $c_bodies)) echo 'checked="checked"'  ;?>>Venus
    </li>
    <li>
    <input type="checkbox" name="c_bodies[]" value="saturn"<?php if(isset($_POST['c_bodies']) && in_array('saturn', $c_bodies)) echo 'checked="checked"'  ;?>>Saturn
    </li>
</ul>
<span><?php echo $c_bodies_err; ?></span>


<label>Regions</label>
<select name="regions">
    <option value="" <?php if(isset($_POST['regions']) && is_null($_POST['regions'])) echo 'selected="selected"';?>> Select One!</option>

    <option value="nw" <?php if(isset($_POST['regions']) && ($_POST['regions'] =="nw")) echo 'selected="selected"';?>> Northwest</option>

    <option value="sw" <?php if(isset($_POST['regions']) && ($_POST['regions'] =="sw")) echo 'selected="selected"';?>> Southwest</option>

    <option value="mw" <?php if(isset($_POST['regions']) && ($_POST['regions'] =="mw")) echo 'selected="selected"';?>> Midwest</option>

    <option value="ne" <?php if(isset($_POST['regions']) && ($_POST['regions'] =="ne")) echo 'selected="selected"';?>> Northeast</option>

    <option value="se" <?php if(isset($_POST['regions']) && ($_POST['regions'] =="se")) echo 'selected="selected"';?>> Southeast</option>
</select>

<span><?php echo $regions_err; ?></span>

<label>Comments</label>
<textarea name="comments"><?php if(isset($_POST['privacy'])) echo htmlspecialchars($_POST['comments']);?></textarea>

<span><?php echo $comments_err; ?></span>

<label>Privacy</label>
<ul>
<li>
<input type="radio" name="privacy" value="yes" <?php if(isset($_POST['privacy']) && $_POST['privacy']== "yes") echo' checked="checked"';?>> Yes
</li>
</ul>
<span><?php echo $privacy_err; ?></span>

<input type="submit" value="Sent it">

<p><a href="">Reset</a></p>







</fieldset>

    
</form>
<!-- 
</body>
</html> -->
