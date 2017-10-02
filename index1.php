<?php

include 'cribbageBoard.php';

$score1 = $_POST['score1'];
$score2 = $_POST['score2'];


$facts = array("The origins of cribbage are uncertain, but the game dates back almost five hundred years.","The first dealer in a game wins 55% to 60% of the time.", "The highest possible hand in cribbage is 29, the perfect cribbage hand.");




function getWelcome(){
    
$text1 = array("Welcome to a Online digital score board.", "By Peter King. ");
$text2 = array("A last minute replacement for score keeping. ", "A project I made for my CST352 class." ,"A digital version score keeping app.", "This should never appear!");
    //uses to array methods
  array_pop($text2);
  $comebined = array_merge($text1,$text2);
    for($i = 0; $i < 3; $i++){
        echo $comebined[$i];
    }
    echo $text2[rand(1,2)];
  
}


function getRandom(){
    return rand(0,2);
}


?>

    <!DOCTYPE html>


    <html>

    <head>
        <title> Assignment 2 Cribbage Board </title>
        <link rel="stylesheet" href="https://cst352-pmking.c9users.io/assignments/Assignment2/CSS/assignment2.css" />



    </head>

    <body>
        <h1> <img src="img/Cribbage_board_with_pegs3.jpg" alt="Cribbage Board" align="center" /> Cribbage Board</h1>


        <nav>
            <a href="\..\index.html">Home</a>

        </nav>
        <center>
            <?= getWelcome() ?>
        </center>



        <?= displayBoard($score1, $score2) ?>

             <center>
 <Strong>Player1 Score: </Strong>
<?php echo $score1 ?> 
 <Strong>Player2 Score: </Strong>
<?php echo $score2 ?>
          </center> 

            <form name="scoreInput" method="post" action="index.php">
                Player1: <input type="int" name="score1" size="3"> Player2: <input type="int" name="score2" size="3">
                <br />
                <input type="submit" value="Submit">

            </form>


            <br />


            <center> Random Cribbage Facts! Taken from Cribbagecorner.com </center>
            </center><br />
            <?php 
    echo "<center>";
    echo $facts[getRandom()];
   
     echo "</center>";
   ?>


            <footer>

        <center>
            <hr> Peter King &copy; 2016 <br \> Disclaimer: The content of this page was created for academic purpose. The information might not be right.

            <br />

            <img src="/img/csumb-logo.png" alt="CSUMB logo" /></center>
    </footer>


    </body>

    </html>
