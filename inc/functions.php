<?php
    function addUpPoints(){
        
    }
    
    function winner(){
        
    }
    
    function displayImage(){
    
        
    }
    
    /*
        Creates the number of players that wan't to play, and
        gives the player the max of numbers.
    */
    function players($deck, $numPlayers){
        $maxCards = 5; // The maximum number of cards the player can have
        $counter = 0;  // To count the number of cards taken from the deck
        
        // Creates a set of arrays (num of players), and
        // gives each player their hand
        for ($i = 1; $i <= $numPlayers; $i++){
            ${"player" . $i} = new  SplFixedArray(6);
            for($j = 0; $j < count(${"player" . $i}); $j++){
                ${"player" . $i}[$j] = $deck[$counter];
                $counter++;
            }
        }
        
        for ($i = 1; $i <= $numPlayers; $i++){
            for($j = 0; $j < $maxCards; $j++){
            echo "Player". $i . " : " .(${"player" . $i}[$j]) . "<br>";
            }
        }
    }
    
    function setPoints($deck){
        
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
        players($deck, 5);
    }
    
?>