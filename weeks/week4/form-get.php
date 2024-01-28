<?php
// this is our first fform
// we will be using the $_GET gloabal vatiable

// our logic is : I will be asking for a namw and email in my form
// if it is set yippy skippy
// if not, show me the form

if(isset($GET['name'],
   $_GET['email'])) {
    $name = $GET['name'];
    $email = $_GET['email'];
   } else {
    echo '<form action =" " method="get">
    <label>NAME</label>
    <input type="text" name="name">
    <label>EMAIL</lable>
    <input type="email" name="email">
    <input type="submit" value="Confirm">
          </form>';
   }