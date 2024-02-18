<?php


ob_start();

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE) {
    case 'index.php' :
        $title = 'Home page of our Website Project';
        $body = 'home';
        break;

    case 'about.php' :
        $title = 'About page of our Website Project';
        $body = 'about inner';
        break;

    case 'daily.php' :
        $title = 'Daily page of our Website Project';
        $body = 'daily inner';
        break;
    case 'project.php' :
        $title = 'Project page of our Website Project';
        $body = 'project inner';
        break;

    case 'contact.php' :
        $title = 'Contact page of our Website Project';
        $body = 'contact inner';
        break;
    case 'thx.php' :
            $title = 'Thank you!';
            $body = 'thx inner';
            break;

    case 'gallery.php' :
        $title = 'Gallery page of our Website Project';
        $body = 'gallery inner';
        break;

}
// our navigational array!
$nav = array(
    'index.php' => 'Home',
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'project.php' => 'Project',
    'contact.php' => 'Contact',
    'gallery.php' => 'Gallery',
);
function make_links($nav) {
    $my_return = '';
    foreach($nav as $key =>$value) {
     if(THIS_PAGE == $key) { 
     $my_return .= '<li><a class="current" href="'.$key.'"> '.$value.'</a></li>';
        
    } else { 
     $my_return .= '<li><a href="'.$key.'"> '.$value.'</a></li>';
}
}
return $my_return;
}
// this is the beginning of the switch for homework 3

if(isset($_GET['today'])) {
    $today = $_GET['today'];
} else {
    $today = date('l');
}

switch($today) {

    case 'Saturday':
    $actDay ='yellow';
    $day = 'Saturday is Saturn Day';
    $details = 'Saturn is the sixth planet from the Sun and the second largest planet in our solar system. Adorned with a dazzling system of icy rings, Saturn is unique among the planets. It is not the only planet to have rings, but none are as spectacular or as complex as Saturn\'s. Like fellow gas giant Jupiter, Saturn is a massive ball made mostly of hydrogen and helium.
    The farthest planet from Earth discovered by the unaided human eye, Saturn has been known since ancient times. The planet is named for the Roman god of agriculture and wealth, who was also the father of Jupiter.';
    $picture = 'saturn.jpg';
    $altTag = 'Saturn';
    $background2 = 'khaki';

    break;

    case 'Sunday':
        $actDay ='orange';
        $day = 'Sunday is Sun Day';
        $details ='The Sun\'s gravity holds the solar system together, keeping everything from the biggest planets to the smallest particles of debris  in its orbit. The connection and interactions between the Sun and Earth drive the seasons, ocean currents, weather, climate, radiation belts and auroras. Though it is special to us, there are billions of stars like our Sun scattered across the Milky Way galaxy.The Sun has many names in many cultures. The Latin word for Sun is “sol,” which is the main adjective for all things Sun-related: solar.' ;

        $picture = 'sun.jpg';
        $altTag = 'Sun';
        $background2 = 'black';

    break;

    case 'Monday':
        $actDay ='blue';
        $day = 'Monday is Luna Day';
        $details ='Earth\'s Moon is the brightest and largest object in our night sky. The Moon makes Earth a more livable planet by moderating our home planet\'s wobble on its axis, leading to a relatively stable climate. It also causes tides, creating a rhythm that has guided humans for thousands of years.The Moon was likely formed after a Mars-sized body collided with Earth several billion years ago. Earth\'s only natural satellite is simply called "the Moon" because people didn\'t know other moons existed until Galileo Galilei discovered four moons orbiting Jupiter in 1610. In Latin, the Moon was called Luna, which is the main adjective for all things Moon-related: lunar.' ;

        $picture = 'moon.jpg';
        $altTag = 'Moon';
        $background2 = 'blue';

    break;

    case 'Tuesday':
        $actDay ='red';
        $day = 'Tuesday is Mars Day';
        $details ='Mars is no place for the faint-hearted. It\'s dry, rocky, and bitter cold. The fourth planet from the Sun, Mars is one of Earth\'s two closest planetary neighbors (Venus is the other). Mars is one of the easiest planets to spot in the night sky  it looks like a bright red point of light. Despite being inhospitable to humans, robotic explorers  like NASA\'s Perseverance rover  are serving as pathfinders to eventually get humans to the surface of the Red Planet.' ;

        $picture = 'mars.jpg';
        $altTag = 'Mars';
        $background2 = 'orange';

    break;

    case 'Wednesday':
        $actDay ='purple';
        $day = 'Wednesday is Mercury Day';
        $details ='Mercury—the smallest planet in our solar system and nearest to the Sun—is only slightly larger than Earth\'s Moon. Its surface is covered in tens of thousands of impact craters.From the surface of Mercury, the Sun would appear more than three times as large as it does when viewed from Earth, and the sunlight would be as much as 11 times brighter. Despite its proximity to the Sun, Mercury is not the hottest planet in our solar system— that title belongs to nearby Venus, thanks to its dense atmosphere. But Mercury is the fastest planet, zipping around the Sun every 88 Earth days. Mercury is appropriately named for the swiftest of the ancient Roman gods' ;

        $picture = 'mercury.jpg';
        $altTag = 'Mercury';
        $background2 = 'purple';

    break;


    case 'Thursday':
        $actDay ='green';
        $day = 'Thursday is Jupiter Day';
        $details ='Jupiter is the fifth planet from our Sun and is, by far, the largest planet in the solar system more than twice as massive as all the other planets combined. Jupiter\'s stripes and swirls are actually cold, windy clouds of ammonia and water, floating in an atmosphere of hydrogen and helium. Jupiter\'s iconic Great Red Spot is a giant storm bigger than Earth that has raged for hundreds of years. Jupiter is named for the king of the ancient Roman gods.' ;

        $picture = 'jupiter.jpg';
        $altTag = 'Jupiter';
        $background2 = '';

        break;


    case 'Friday':
            $actDay ='white';
            $day = 'Friday is Venus Day';
            $details ='Venus is a cloud-swaddled planet named for a love goddess, and often called Earth\'s twin. But pull up a bit closer, and Venus turns hellish. Our nearest planetary neighbor, the second planet from the Sun, has a surface hot enough to melt lead. The atmosphere is so thick that, from the surface, the Sun is just a smear of light.';
    
            $picture = 'venus.jpg';
            $altTag = 'Venus';
            $background2 = '';



}


// my form's php



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
