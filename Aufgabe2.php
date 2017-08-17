<?php
for ($i = 1; $i <= 200 ; $i++){
    if ($i % 2 ==0 && $i % 5 ==0 && $i % 7 ==0) {
        echo 'ZweiFünfSieben';
    }
    elseif ($i % 2 ==0 && $i % 5 ==0) {
        echo 'ZweiFünf';
    }
    elseif ($i % 2 ==0 && $i % 7 ==0) {
        echo 'ZweiSieben';
    }
    elseif ($i % 5 ==0 && $i % 7 ==0) {
        echo 'FünfSieben';
    }
    elseif ($i % 2 ==0) {
        echo 'Zwei';
    }
    elseif ($i % 5 ==0) {
        echo 'Fünf';
    }
    elseif ($i % 7 ==0) {
        echo 'Sieben';
    } else {
        echo $i;
    }
    echo '<br/>';
}