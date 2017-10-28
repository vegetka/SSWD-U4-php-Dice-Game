<?php

include('NumberGenerator.class.php');
include('Dice.class.php');

$dice = new Dice();
$guess = new NumberGenerator();

//echo $guess -> makeAGuess();

$dice->throwDice();
$numberWereTryingToGuess = $dice->getFaceValue();

for ($i=0; $i<=2; $i++){
    
    $nextGuess = $guess->makeAGuess();
    
    if($nextGuess == $numberWereTryingToGuess){
        echo "Guess number ".($i+1). " was correct !!!<br/>";
    }else{
        echo "Face Value was " .$numberWereTryingToGuess. "<br/>";
        echo "Guess was " .$nextGuess. "<br/>";
    }
}

?>