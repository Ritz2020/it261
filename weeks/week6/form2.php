<?php

ob_start();
$first_name = '';
$last_name = '';
$email = '';
$wines = '';
$gender = '';
$phone = '';
$regions = '';

$comments = '';
$privacy = '';

$first_name_err = '';
$last_name_err = '';
$email_err = '';
$wines_err = '';
$gender_err = '';
$phone_err = '';
$regions_err = '';
$comments_err = '';
$privacy_err = '';



if($_SERVER['REQUEST_METHOD'] == "POST") {
// if inputs are empty, we will ddeclare a statement elae we will assign the $_POST to a variable
// $wines = $_POST['wines']

    if(empty($_POST['wines'])) {
        // say something or do something
        $wines_err = 'What... no wines?';
    } else {
        $wines = $_POST['wines'];
    }

    if(empty($_POST['first_name'])) {
        // say something or do something
        $first_name_err = 'Please fill in your first name';
    } else {
        $first_name = $_POST['first_name'];
    }

    if(empty($_POST['last_name'])) {
        // say something or do something
        $last_name_err = 'Please fill in your last name';
    } else {
        $last_name = $_POST['last_name'];
    }

    if(empty($_POST['email'])) {
        // say something or do something
        $email_err = 'Please fill in your email';
    } else {
        $email = $_POST['email'];
    }

    if(empty($_POST['gender'])) {
        // say something or do something
        $gender_err = 'Please check your gender';
    } else {
        $gender = $_POST['gender'];
    }

    if(empty($_POST['phone'])) {
        // say something or do something
        $phone_err = 'Please fill in your phone number';
    } else {
        $phone = $_POST['phone'];
    }

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

function my_wines($wines) {
    $my_return='';
    if(!empty($_POST['winea'])) {
        $my_return = implode(',', $_POST['wines']);
    }
    return $my_return;
} //end my_wines function;

if(isset($_POST['first_name'],
$_POST['last_name'],
$_POST['email'],
$_POST['gender'],
$_POST['phone'],
$_POST['regions'],
$_POST['comments'],
$_POST['wines'],
$_POST['privacy'], )) {

    $to = 'yanzhao.rf@gmail.com';
    $subject = 'Test email on '.date('m/d/y, h i A');
    $body = '
    First Name: '.$first_name.' '.PHP_EOL.'
    Last Name: '.$last_name.' '.PHP_EOL.'
    Email: '.$email.' '.PHP_EOL.'
    Gender: '.$gender.' '.PHP_EOL.'
    Wines: '.$wines.' '.PHP_EOL.'
    Regions: '.$regions.' '.PHP_EOL.'
    Phone: '.$phone.' '.PHP_EOL.'
    Comments: '.$comments.' '.PHP_EOL.'

    ';
$headers = array(
    'From' => 'yanzhao.rf@gmail.com'
);
// we will be adding an if statment - that this email from will work ONLY if all the fieds are filled out!!

if(!empty(
    $first_name &&
    $last_name &&
    $email &&
    $gender &&
    $wines &&
    $regions &&
    $phone &&
    $comments)) {

        mail($to, $subject, $body, $headers);
        header ('Location:thx.php');
    }
// don't forget, you must upload your form onto the server to reveive an email!!


}


} 
// closing server request method
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our form 2 in week 6</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
    <h1>First Form in Week 6</h1>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>" method="post">
<fieldset>
<legend>
    Contact Yan
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

<label>Gender</label>

<ul>
    <li><input type="radio" name="gender" value="female"  <?php if(isset($_POST['gender']) && $_POST['gender'] == 'female') echo 'checked="checked"' ;?>>Female</li>

    <li><input type="radio" name="gender" value="male"  <?php if(isset($_POST['gender']) && $_POST['gender'] == 'male') echo 'checked="checked"' ;?>>Male</li>

    <li><input type="radio" name="gender" value="neither"  <?php if(isset($_POST['gender']) && $_POST['gender'] == 'neither') echo 'checked="checked"' ;?>>Neither</li>

    <span><?php echo $gender_err; ?></span>

</ul>
    <label>Phone</label>
    <input type="tel" name="phone" value="<?php if (isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']) ;?>">
    <span><?php echo $phone_err; ?></span>

    <label>Favorite Wines</label>

 <ul>
    <li>
    <input type="checkbox" name="wines[]" value="cab"<?php if(isset($_POST['wines']) && in_array('cab', $wines)) echo 'checked ="checked"'  ;?>>Cabernet
    </li>
    <li>
    <input type="checkbox" name="wines[]" value="merlot"<?php if(isset($_POST['wines']) && in_array('merlot', $wines)) echo 'checked="checked"'  ;?>>Merlot
    </li>
    <li>
    <input type="checkbox" name="wines[]" value="syrah"<?php if(isset($_POST['wines']) && in_array('syrah', $wines)) echo 'checked="checked"'  ;?>>Syrah
    </li>
    <li>
    <input type="checkbox" name="wines[]" value="malbec"<?php if(isset($_POST['wines']) && in_array('malbec', $wines)) echo 'checked="checked"'  ;?>>Malbec
    </li>
    <li>
    <input type="checkbox" name="wines[]" value="red"<?php if(isset($_POST['wines']) && in_array('red', $wines)) echo 'checked="checked"'  ;?>>Red Blend
    </li>
</ul>
<span><?php echo $wines_err; ?></span>


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
<textarea name="comments"><?php if(isset($_POST['privacy'])) echo 'checked="checked"';?></textarea>

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
    
</body>
</html>