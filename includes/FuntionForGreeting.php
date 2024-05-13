<?php 
    function displayGreeting() {
        $hour = date('H');/* methan simple h dunnoth 12 times capital H dunnoth 24 times*/
        if ($hour >= 0 and $hour <= 11) {
            echo "Good Morning!";
        } elseif ($hour >= 12 and $hour <= 17 ) {
            echo "Good Afternoon!";
        } else {
            echo "Good Evening!";
        }
    }
?>