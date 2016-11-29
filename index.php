<?php

    $a = "5";
    $b = 5;

    if  ($a === $b) { # == (equal),!= (not equal), <> (not equal), !== (notidentical)
                                # ===(identical) provjera da li su tipovi varijabli jednaki, u ovom slučaju
                                # $a je string i nije jednak $b integer-u
        echo "Equal";
    }
    else {
        echo "Not Equal";
    }

?>
