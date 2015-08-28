<?php

$msg = "testing, hello";


    if (mail("edwardkim1994@gmail.com","My subject",$msg)) { 
        echo '<p>Your message has been sent!</p>';
    } else { 
        echo '<p>Something went wrong, go back and try again!</p>'; 
    }

?>