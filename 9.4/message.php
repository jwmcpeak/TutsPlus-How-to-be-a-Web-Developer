<?php

function getMessage($timeOfDay) {
    if ($timeOfDay == 0) { // 0 = Morning
        $message = 'Good Morning';
    } else if ($timeOfDay == 1) { // 1 = Afternoon
        $message = 'Good Afternoon';
    } else  {
        $message = 'Good Evening';
    }
        
    return $message;
}