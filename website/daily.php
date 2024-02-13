<?php 
include('config.php');
include('./includes/header.php'); ?>
        
    <div id="wrapper">
        <div id="hero">
            <img src="images/solar.jpg" alt="Solar">

        </div>
            <!-- end hero -->
        <main>
            <h1>
                Welcome to our Daily Page!
            </h1>
            
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis bibendum tellus sit amet ligula blandit, sed suscipit eros sodales. Cras id orci sit amet augue lobortis molestie. Duis dictum semper varius. Aliquam malesuada erat felis, vitae porttitor felis interdum quis. Mauris mauris erat, porta sed nisi vel, faucibus maximus nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent libero nisl, commodo id malesuada ut, congue et purus. Curabitur bibendum ullamcorper condimentum. Aliquam sit amet urna venenatis elit imperdiet facilisis. </p>
            <h2 class="<?php echo $actDay ;?>"><?php echo $day; ?></h2>
            <p><?php echo $details; ?></p>
            <h2> Don't see your favorite planet?
                Check out the days below! </h2>
        <ul>
            <li><a style="color:<?php
            if($today=='Sunday'){
                echo'orange';
            }else{
                echo'darkblue';
            };?>" href="daily.php?today=Sunday">Sunday</a></li>

            <li><a style="color:<?php
            if($today=='Monday'){
                echo'blue';
            }else{
                echo 'darkblue';
            };?>" href="daily.php?today=Monday">Monday</a></li>

            <li><a style="color:<?php
            if($today=='Tuesday'){
                echo'red';
            }else{
                echo'darkblue';
            };?>" href="daily.php?today=Tuesday">Tuesday</a></li>

           <li><a style="color:<?php
            if($today=='Wednesday'){
                echo'purple';
            }else{
                echo 'darkblue';
            };?>" href="daily.php?today=Wednesday">Wednesday</a></li>

           <li><a style="color:<?php
            if($today=='Thursday'){
                echo'green';
            }else{
                echo'darkblue';
            };?>" href="daily.php?today=Thursday">Thursday</a></li>

            <li><a style="color:<?php
            if($today=='Friday'){
                echo'white';
            }else{
                echo 'darkblue';
            };?>" href="daily.php?today=Friday">Friday</a></li>

           <li><a style="color:<?php
            if($today=='Saturday'){
                echo'yellow';
            }else{
                echo'darkblue';
            };?>" href="daily.php?today=Saturday">Saturday</a></li>
        </ul>
        
        </main>

        <aside>
            <h3>This is the beautiful planet!</h3>
            
            <img src="./images/<?php echo $picture; ?>" alt="<?php echo $altTag; ?>">

           

        </aside>

    </div>
    <!-- end of wrapper -->
   
    <?php
    include('./includes/footer.php');
    ?>
