<?php
    function addUpPoints(){
        
    }
    
    function winner(){
        
    }
    
    function passCards(){
        
    }
    
    function shuffleDeck(){
        
    }
    
    function players(){
        
    }
    
    function createDeck(){
        //declare an array for the entire deck max 52 cards, min 1
        $deck = array();
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
        
        // for($i = 0; $i < count($deck); $i++){
        //     echo $deck[$i];
        // }
        
        
        
        foreach($suit as $card){
            foreach($card as $key => $value){
                array_push($deck, $value);
            }
        }
        
        for($i = 0; $i < count($deck); $i++){
            echo $deck[$i];
        }
    }
    
    function play(){
        createDeck();
    }
    
?>

<!--$cards = array();-->
            
<!--            $card1["value"] = 10;-->
<!--            $cards[] = $card1;-->
            
<!--            $card2["suit"] = "Hearts";-->
<!--            $card2["value"] = 9;-->
<!--            array_push($cards, $card2);-->
            
<!--            $card3["suit"] = "Hearts";-->
<!--            $card3["value"] = 9;-->
<!--            array_push($cards, $card2);-->
            
<!--            $card4["suit"] = "Hearts";-->
<!--            $card4["value"] = 9;-->
            
<!--            array_push($cards, $card2);-->
<!--            foreach($cards as $card) {-->
<!--                foreach($card as $key => $value) {-->
<!--                    echo "$key = $value<br />";-->
<!--                }-->
<!--            }-->
            
<!--            for ($i = 0; $i < 3; $i++) {-->
<!--                echo "<br />";-->
<!--                var_dump(array_keys($cards[0]));-->
<!--            }-->