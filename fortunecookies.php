<!DOCTYPE html>

<?php

/*
 
    This is the fortunecookies.php webpage which displays the output from form webpage by user name ,
    User Fortune Cookies , with the colour that user selected in the form with luckey number and messages.
    This page mainly focus on taking input from form page , filter the input , and display random luckey number and message randomely by using Arrays. 
    This program was created on 3rd october 2020.
    
    @Author Utsavkumar M Patel (000820474).
    
*/


$uname = filter_input(INPUT_GET,"name",FILTER_SANITIZE_SPECIAL_CHARS);



$cookcolor = filter_input(INPUT_GET,"colorcookies");

$max = filter_input(INPUT_GET,"maxluck",FILTER_VALIDATE_INT);

$min = filter_input(INPUT_GET,"minluck",FILTER_VALIDATE_INT);

$numofcook = filter_input(INPUT_GET,"ncookies",FILTER_VALIDATE_INT);

$fortunelist = [

    "Your talents will be recognized and suitably rewarded.","You look pretty.","With age comes wisdom.","A beautiful, smart, and loving person will be coming into your life.","A faithful friend is a strong defense.",
    "A friend asks only for your time not your money.","A golden egg of opportunity falls into your lap this month.","A lifetime friend shall soon be made.","A pleasant surprise is waiting for you.","A smile is your personal welcome mat.",
    "An inch of time is an inch of gold.","Be careful or you could fall for some tricks today.","Believe in yourself and others will too.","Bide your time, for success is near.","Carve your name on your heart and not on marble.",
    "Congratulations! You are on your way.","Courtesy is contagious.","Dedicate yourself with a calm mind to the task at hand.","Disbelief destroys the magic.","Do not make extra work for yourself.",
    "Don’t just think, act!","Don’t worry; prosperity will knock on your door soon.","Every flower blooms in its own sweet time.","Nature, time and patience are the three great physicians.", "New ideas could be profitable.",
    "Have a beautiful day.","Help! I’m being held prisoner in a chinese bakery!","In this world of contradiction","It’s [sic] better to be merry than wise.","It’s time to get moving. Your spirits will lift accordingly.", "Nothing is more difficult, and therefore more precious, than to be able to decide.",
    "Observe all men, but most of all yourself.","Others can help you now.","Perhaps you’ve been focusing too much on saving.","Practice makes perfect.","Romance moves you in a new direction.",
    "Self-knowledge is a life long process.","Society prepares the crime; the criminal commits it.","Success is a journey, not a destination.","Take care and sensitivity you show towards others will return to you.","The best prediction of future is the past.",
    "The secret to good friends is no secret to you.","The weather is wonderful.","Time is precious, but truth is more precious than time","You are a person of another time.","You can keep a secret.",
        
    ]


?>

<html lang="en">

<head>
    <title>Fortune cookies</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <style>
        
        body{

                background-color:black;
                color: #D3D3D3;
        
        }
        
        
        h1{
               

                text-align: center; 
                font-size: M_1_PI;
                font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
                
                  
        
        }
        
        h6{
            font-style: oblique;
            font-size: small;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-weight: 600;
            color: rgb(235, 15, 26);
            text-align: center;
        }

        .fcookies{
                
                background-color: <?=$cookcolor?>;
                align-content: center;
                text-align: center;
                border-radius: 25px;
                border-color: black;
                size: M_2_PI;
                justify-self: center;
                overflow: auto;
                border-style: M_LN10;
  
                
        } 

        i{
            color:<?=$cookcolor?>;
        }


        
        
        .maincookie{
               
                color:<?=$cookcolor?> ;
                align-content: center;
                   
                              
        }


        .fcookies:hover{
               
                color:#D3D3D3;
        
        }        
       


    </style>

</head>

<body>
    
    <h1>HELLO <i><?= strtoupper($uname) ?></i>... Here Is Your Fortune Cookies... </h1> <br/><br/>
    
    <div class="maincookie">

    <?php
       
          
          for($i=0; $i<$numofcook ; $i++){

            echo '<div class = "fcookies" style = "border-style: solid"; >';
              
              $randcook = rand(0,count($fortunelist)-1);
              echo $fortunelist[$randcook]."<br>";
              
              for($k = 0; $k<7; $k++){
                  
                  $fnumber = rand($min,$max);
                  echo $fnumber." ";

              }
              
              echo '</div>';
              echo "<br/><br/>"; 
              
          }   

    ?>
              
              <h6>&copy; UTSAVKUMAR M PATEL (000820474).</h6>
      
</body>

</html>