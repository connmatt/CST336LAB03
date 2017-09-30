<?php
    function getPoints($card){
        if($card == "c1" || $card == "d1" || $card == "h1" || $card == "s1"){
            return 1;
        }
        else if($card == "c2" || $card == "d2" || $card == "h2" || $card == "s2"){
            return 2;
        }
        else if($card == "c3" || $card == "d3" || $card == "h3" || $card == "s3"){
            return 3;
        }
        else if($card == "c4" || $card == "d4" || $card == "h4" || $card == "s4"){
            return 4;
        }
        else if($card == "c5" || $card == "d5" || $card == "h5" || $card == "s5"){
            return 5;
        }
        else if($card == "c6" || $card == "d6" || $card == "h6" || $card == "s6"){
            return 6;
        }
        else if($card == "c7" || $card == "d7" || $card == "h7" || $card == "s7"){
            return 7;
        }
        else if($card == "c8" || $card == "d8" || $card == "h8" || $card == "s8"){
            return 8;
        }
        else if($card == "c9" || $card == "d9" || $card == "h9" || $card == "s9"){
            return 9;
        }
        else if($card == "c10" || $card == "d10" || $card == "h10" || $card == "s10"){
            return 10;
        }
        else if($card == "c11" || $card == "d11" || $card == "h11" || $card == "s11"){
            return 11;
        }
        else if($card == "c12" || $card == "d12" || $card == "h12" || $card == "s12"){
            return 12;
        }
        else if($card == "c13" || $card == "d13" || $card == "h13" || $card == "s13"){
            return 13;
        }
    }
    
    function getWinner($scores){
        
        for($i = 0; $i < count($scores); $i++){
            if($scores[$i] <= 42){
                
            }
            else{
                echo "<h2>Player ". ($i + 1) . " Scored ". $scores[$i] . ": You Lost! </h2><br>";
            }
        }
    }
    
    function displayImage($player, $scores){
        $ranList = array(0,0,0,0);
        for($j=0; $j < 4; $j++){
            $random = rand(1,10);
            $ranList[i] = $random;
        }
        
        $name = "";
        for($i = 0; $i < count($ranList); $i++){
            switch($ranList[i]){
                case 1: $name = "Seamore";
                        break;
                case 2: $name = "Elmo";
                     break;
                case 3: $name = "Droopy";
                     break;
                case 4: $name = "LeDerpet";
                     break;
                case 5: $name = "Juliet";
                     break;
                case 6: $name = "Romeo";
                     break;
                case 7: $name = "Rick";
                     break;
                case 8: $name = "Mr. Poopybutthole";
                     break;
                case 9: $name = "Hamburgler";
                     break;
                case 10: $name = "Morty";
                     break;
            }
            echo "<img class='card' src='img/Icons/$random.png' alt='$random' title='".ucfirst($random) ."' width='70' ' hspace='10' ' vspace='10' />";
            echo "<div class='player'>" . $name . "</div>";
            break;   
        }
        for ($i=0; $i < count($player); $i++)
        {
            $card = $player[$i];
            
            if ($card[0] == 'c')
            {
                echo "<img class='card' src='img/clubs/$card.png' alt='$card' title='".ucfirst($card) ."' width='70' ' hspace='10' ' vspace='10' />";
            }
            else if ($card[0] == 'd')
            {
                echo "<img class='card' src='img/diamonds/$card.png' alt='$card' title='".ucfirst($card) ."' width='70' ' hspace='10' ' vspace='10' />";
            }
            else if ($card[0] == 'h')
            {
                echo "<img class='card' src='img/hearts/$card.png' alt='$card' title='".ucfirst($card) ."' width='70' ' hspace='10' ' vspace='10' />";
            }
            else if ($card[0] == 's')
            {
                echo "<img class='card' src='img/spades/$card.png' alt='$card' title='".ucfirst($card) ."' width='70' ' hspace='10' ' vspace='10' />";
            }
        }echo "<br>";
    } 
        
    
    /*
        Creates the number of players that wan't to play, and
        gives the player the max of numbers.
    */
    function players($deck, $numPlayers){
        $scores = new SplFixedArray($numPlayers);
        $counter = 0;  // To count the number of cards taken from the deck
        
        // Creates a set of arrays (num of players)
        for ($i = 1; $i <= $numPlayers; $i++){
            ${"player" . $i} = array();
            ${"P" . $i} = 0;
            for($j = 0; $j < count($deck); $j++){
                array_push(${"player" . $i}, $deck[$counter]);
                ${"P" . $i} += getPoints(${"player".$i}[$j]);
                if (${"P" . $i} < 35){
                    $counter++;
                    continue;
                }
                else{
                    $scores[$i - 1]=${"P" . $i};
                    $counter++;
                    break;
                }
            }
        }
        getWinner($scores);
        
        
        for ($i = 1; $i <= $numPlayers; $i++){
            displayImage(${"player".$i}, $i);
        }
    }
    
    function createDeck($deck){
        //declare an array for the entire deck max 52 cards, min 1
        $suit = array();
        
        //declare arrays for each suit, and give values to each card
        for($i = 0; $i < 13; $i++){
            ${"clubs" . ($i + 1)}["suit"] = ("c" . ($i + 1));
            ${"diamonds" . ($i + 1)}["suit"] = ("d" . ($i + 1));
            ${"hearts" . ($i + 1)}["suit"] = ("h" . ($i + 1));
            ${"spades" . ($i + 1)}["suit"] = ("s" . ($i + 1));
        
            array_push($suit, ${"clubs". ($i+1)});
            array_push($suit, ${"diamonds". ($i+1)});
            array_push($suit, ${"hearts". ($i+1)});
            array_push($suit, ${"spades". ($i+1)});
        }
        
        foreach($suit as $card){
            foreach($card as $key => $value){
                array_push($deck, $value);
            }
        }
        
        shuffle($deck);
        return $deck;
        
    }
    
    function play(){
        $deck = array();
        $deck = createDeck($deck);
        players($deck, 4);
    }
    
?>