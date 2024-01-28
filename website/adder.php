
<!-- Moved HTML to the top -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<!-- Added DOCTYPE that was misiing. on line 6-8 -->
<title>My Adder Assignment</title>
<style>
form {
    max-width:380px;
    margin:0 auto 10px auto;
fieldset {
    border:1px solid red;
    padding:10px;
}

.box {
    width:380px;
    margin:20px auto;
}
}
h1{
    text-align:center;
    margin:20px 0;
    color:green;
}
h2{
    text-align:center;
    
}

p{
    font-size:.68em;
    color:red;
    font-weight:normal;
}

</style>
<!-- style part was missing, added style css code line 11-38-->
</head>
<body>
<h1>Adder.php</h1> 
<form action="" method="post">
    <!-- Corrected open form tag, added method on line 46-->
<fieldset>
    <!-- open <fieldset> is missing on line 48-->
<label>Enter the first number:</label>
<!-- open <label> is missing on line 50-->
<input type="text" name="num1"><br>
<!-- Changed Num1 to num1 on line 52-->

<label>Enter the second number:</label>
<!-- Added open and close label tag to the right place on line 55-->
<input type="text" name="num2">
<input type="submit" value="Add Em!!">
<!-- Added the missing " after EM!! on line 58-->
</fieldset>
</form>

<?php     

if (isset($_POST['num1'],
$_POST['num2'])){
// Added $_POST['num2'] on line 66

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$myTotal = $num1 + $num2;
// Changed $Num2 to $num2 to match the above varias attribute. Deleted - after $myTotal on line 72

echo '

<h2>You added '. $num1 .' and '.$num2. '';
// Changes " to ', removed the extra " before; on line 76

echo ' <p> and the answer is <br>
'. $myTotal .'!</p>';
// Deleted " before $myTotal, added ', instead. Moved </p> in front of closing'. Moved style to the <style> part above. on line 80

echo'<p><a href="">Reset page</a></p>';
// Adde </p>'; to close <p>, on line 83

}
?>
<!-- Added ?> to close php on line 87-->

 </body>
</html>
<!-- Deleted ';{?> on line 91-->