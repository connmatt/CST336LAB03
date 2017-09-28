<?php
    function addUpPoints(){
        
    }
    
    function winner(){
        
    }
    
    function passCards(){
        
    }
    
    function displayImage($card, $pos){
        if ($card[0] == 'c')
        {
            echo "<img id='table$pos' src='img/clubs/$card.png' alt='$card' title='".ucfirst($card) ."' width='70' />";
        }
        else if ($card[0] == 'd')
        {
            echo "<img id='table$pos' src='img/diamonds/$card.png' alt='$card' title='".ucfirst($card) ."' width='70' />";
        }
        else if ($card[0] == 'h')
        {
            echo "<img id='table$pos' src='img/hearts/$card.png' alt='$card' title='".ucfirst($card) ."' width='70' />";
        }
        else if ($card[0] == 's')
        {
            echo "<img id='table$pos' src='img/spades/$card.png' alt='$card' title='".ucfirst($card) ."' width='70' />";
        }
    }
    
    function players(){
        
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
        for($i = 0; $i < count($deck); $i++){
            echo ($deck[$i]);
            }
         
    }
    
?>