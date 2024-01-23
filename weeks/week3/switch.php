<?php
// class coffee exercise
// if today is Thursday, it will be pumpkin latte day
// INTRODUCING the isset() function
// then we will introduce our first GLOBAL variable
// our switch

// starting the switch
// if $GET['today'] is set, $today, then all is well, but it is not set therefore the else is the day!
// else, today is TODAY

// GLOBAL VARIABLE are capitalized and start with $_GET

// what is the isset function - is asking if someting has been set?


// $variable = 'This is our variable';
// if(isset($variable)) {
//     echo 'Variable has been set';
// } else 
// echo 'Variable has not been set!';

// echo '<br>';

// if(isset($_GET['today'])) {
//     echo 'Today has been set';
// } else {
//     echo 'NOT!!!!!';
// }

if(isset($_GET['today'])) {
    $today = $_GET['today'] ;
}else {
    $today = date('l');
}

switch($today){
    case 'Sunday':
        $coffee = '<h2>Sunday is our Pumpking Day!</h2>';
        $pic = 'pumpkin.jpg';
        $alt = 'Pumpkin Latte';
        $content = '<p><b>The Pumpkin Spice Latte</b> is a coffee drink made with a mix of traditional fall spice flavors (cinnamon, nutmeg, and clove), steamed milk, espresso, and often sugar, topped with whipped cream and pumpkin pie spice. The beverage is most commonly associated with Starbucks, which first offered the drink in the fall of 2003. The popular flavor has inspired a wide range of product variations that appear on a seasonal basis.</p>';
    break;

    case 'Monday':
    $coffee = '<h2>Monday is our Green Tea Latte Day!</h2>';
    $pic = 'green-tea.jpg';
    $alt = 'Green Tea';
    $content = '<p><b> A Matcha Latte </b> is made with a base of matcha powder whisked or mixed with hot water, then topped with steamed milk (or oat, almond, etc.), just as when pouring a traditional espresso latte. It is often sweetened with honey or agave, if it is sweetened at all </P>.

    <P>To mix the initial matcha base for the drink, you can use a traditional method including a tea bowl, known as a chawan, and a special bamboo whisk, known as a chasen. Perfecting the balance between water temperature and whisking technique is what separates competence from mastery in preparing matcha.</P>';
    break;

    case 'Tuesday':
        $coffee = '<h2>Tuesday is our Jeo Day!</h2>';
        $pic = 'coffee.png';
        $alt = 'Regular Coffee';
        $content = '<p><b>Regular coffee</b> is typically made using roasted coffee beans, which have a dark brown color and a strong, bold flavor. White coffee, on the other hand, is made using unroasted coffee beans, which are light in color and have a milder, more subtle flavor.</p>';
    break;

    case 'Wednseday':
        $coffee = '<h2>Wednsday is our Latte Day!</h2>';
        $pic = 'latte.jpg';
        $alt = 'Latte';
        $content = '<p><b>A latte or caffè latte is a milk coffee that boasts a silky layer of foam as a real highlight to the drink. A true latte will be made up of one or two shots of espresso, steamed milk and a final, thin layer of frothed milk on top. These elements combined result in a balanced milky coffee that possesses an aesthetically pleasing look and a smooth texture.</p>';
    break;

    case 'Thursday':
        $coffee = '<h2>Thursday is our Americano Day!</h2>';
        $pic = 'americano.jpg';
        $alt = 'Americano';
        $content = '<p><b>An americano</b> is quite simply just hot water and espresso. It\'ll either be served 1/2 and 1/2 or 1/3 espresso to 2/3 water, depending on the coffee shop in question or how you\'ve chosen to brew it. There is dispute about whether the espresso or the water should be added first, but in the case of the americano, espresso should always be added first as the crema mixes in and creates a more mellow, even taste. But some people may add it depending on their personal preference. Whilst most other espresso-based coffee drinks include milk, such as the cappuccino or latte, the americano stands out amongst them.</p>';
    break;

    case 'Friday':
        $coffee = '<h2>Friday is our Cappuccino Day!</h2>';
        $pic = 'cap.jpg';
        $alt = 'Cappuccino';
        $content = '<p><b>A cappuccino</b> is the perfect balance of espresso, steamed milk and foam. This coffee is all about the structure and the even splitting of all elements into equal thirds. An expertly made cappuccino should be rich, but not acidic and have a mildly sweet flavouring from the milk. And, because the milk is not actually mixed in it gives the espresso a stronger flavour.</p>';
    break;

    case 'Saturday':
        $coffee = '<h2>Saturday is our Frappuccino Day!</h2>';
        $pic = 'frap.jpg';
        $alt = 'Frappuccino';
        $content = '<p><b>A Frappuccino</b> is a blended coffee drink that is typically made with coffee or espresso, milk, and ice. It is blended together in a blender, which gives it a smooth and creamy texture. Additional ingredients such as syrups and whipped cream can also be added to customize the flavor.</p>';
    break;
        
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Switch Classwork Exercise</title>

    <style>
* {
    padding:0;
    margin:0;
    box-sizing:border-box;
}
 #wrapper {
    width:940px;
    margin:20px auto;
 } 
 h1,h2,img{
    margin-bottom:10px;
 }  
 
 p{
    margin-bottom:20px;
 }
    </style>
</head>
<body>
<div id="wrapper">
    <h1>My Wonderful Switch Classwork Exercise (Not the daily homework)</h1>

<?php

echo $coffee;
?>
<img src="./images/<?php echo $pic;?>" alt="<?php echo $alt;?>">
<?php
echo $content;
?>

<h2>Check out our Daily Specials</h2>

<ul>
    <li><a  href="switch.php?today=Sunday">Sunday</a></li>
    <li><a  href="switch.php?today=Monday">Monday</a></li>
    <li><a  href="switch.php?today=Tuesday">Tuesday</a></li>
    <li><a  href="switch.php?today=Wednseday">Wednseday</a></li>
    <li><a  href="switch.php?today=Thursday">Thursday</a></li>
    <li><a  href="switch.php?today=Friday">Friday</a></li>
    <li><a  href="switch.php?today=Saturday">Saturday</a></li>
</ul>

</div>
    
</body>
</html>