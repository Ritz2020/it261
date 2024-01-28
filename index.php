<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Portal Page</title>
    <link href="css/styles.css"  type="text/css"  rel="stylesheet">
</head>
<body>
    <h1><a href="index.php">Yan's Portal Page</a></h1>
    <!-- <h2>The navigation below represents our BIG Assignments.</h2> -->
    <div id="wrapper"> 
        <nav>
            <ul>
                <li><a href="website/daily.php">Switch</a></li>
                <li><a href="website/adder.php">Troubleshoot</a></li>
                <li><a href="">Calculator</a></li>
                <li><a href="">Email</a></li>
                <li><a href="">Database</a></li>
                <li><a href="">Gallery</a></li>

            </ul>
        </nav>
        <main>
            <h2>About Me</h2>

            <img class="right" src="images/yan.jpg" alt="Yan's Photo">
            <p>Hello, welcome to Yan Zhao's portal page. I majored in architecture when I was in university. I became a licensed architect in China. I've been working in architectural design since moving to the USA. Nowadays, the rapid development of IT technology inspires me very much. Web design is an interdisciplinary major. Combining IT technology and my ability in design may produce exciting things. My curiosity drives me to step into this field new to me. These new skills will help me see a bigger world and expand my career possibilities. </p>
            <p>In my spare time, I like traveling, singing, skiing, etc. I've visited a lot of masterpieces of architecture from ancient to modern times all over the world. The extraordinary architecture always touches me deeply and gives me endless inspiration. I also enjoy skiing on the slopes during wintertime. It doesn't matter if I'm a skilled skier or not. This feeling of flying in the wind and snow lightens my life in the dark and wet winter.</p>
            
            

        </main>

        <aside>
        

        <h2> Weekly Class Exercises</h2>

        <div id="half-left">
        <h3>Week 2</h3>

        <ol>
            <li><a href="weeks/week2/var.php">var.php</a></li>
            <li><a href="weeks/week2/vars2.php">vars2.php</a></li>
            <li><a href="weeks/week2/currency-logic.php">currency_logic.php</a></li>
            <li><a href="weeks/week2/currency.php ">curruncy.php</a></li>
            <li><a href="weeks/week2/heredoc.php ">heredoc.php</a></li>

        </ol>

        <h3>Week 3</h3>

        <ol>
        <li><a href="weeks/week3/index.php ">index.php</a></li>
        <li><a href="weeks/week3/if.php ">if.php</a></li>
            <li><a href="weeks/week3/for-each.php ">for-each.php</a></li>
            <li><a href="weeks/week3/for-loop.php ">for-loop.php</a></li>
            <li><a href="weeks/week3/date.php ">date.php</a></li>
            <li><a href="weeks/week3/switch.php ">switch.php</a></li>
        </ol>

        <h3>Week 4</h3>

        <ol>
            <li><a href="weeks/week4/form-get.php ">form-get.php</a></li>
            <li><a href="weeks/week4/form1.php ">form1.php</a></li>
            <li><a href="weeks/week4/form2.php ">form2.php</a></li>
            <li><a href="weeks/week4/form3.php ">form3.php</a></li>
            <li><a href="weeks/week4/arithmetic-form.php ">arithmetic-form.php</a></li>
            <li><a href="weeks/week4/celcius.php ">celcius.php</a></li>
            

        </ol>

        <h3>Week 5</h3>

        <ol>
            <li><a href=" ">xxxx.php</a></li>
            <li><a href=" ">xxxx.php</a></li>
            <li><a href=" ">xxxx.php</a></li>
            <li><a href=" ">xxxx.php</a></li>

        </ol>
        </div>
        <!-- end div half-left -->

        <div id="half-right">
        <h3>Week 6</h3>

        <ol>
            <li><a href=" ">xxxx.php</a></li>
            <li><a href=" ">xxxx.php</a></li>
            <li><a href=" ">xxxx.php</a></li>
            <li><a href=" ">xxxx.php</a></li>

        </ol>

        <h3>Week 7</h3>

        <ol>
            <li><a href=" ">xxxx.php</a></li>
            <li><a href=" ">xxxx.php</a></li>
            <li><a href=" ">xxxx.php</a></li>
            <li><a href=" ">xxxx.php</a></li>

        </ol>

        <h3>Week 8</h3>

        <ol>
            <li><a href=" ">xxx.php</a></li>
            <li><a href=" ">xxx.php</a></li>
            <li><a href=" ">xxx.php</a></li>
            <li><a href=" ">xxx.php</a></li>

        </ol>

        
        </div>
        <!-- end div half-right -->
        </aside>

        
        <hr>
        <h3>MAMP Screenshot</h3>
        <img class="homework" src="images/mamp-1.jpg" alt= "Homework-1">
        <img class="homework" src="images/mamp-2.jpg" alt= "Homework-1.1">

        
    

    <footer>
        <ul>
            <li>Copyright &copy;
                2022</li>
            <li>All Rights Reserved</li>
            <li><a href="../index.php">Web Design by Yan</a></li>
            <li><a id="html-checker" href="#">HTML Validation</a></li>
            <li><a id="css-checker" href="#">CSS Validation</a></li>
        </ul>
        <script>
            document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);
            document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + location.href);
        </script>

    </footer>

    </div>
    <!-- end wrapper -->
    
    

    
</body>
</html>