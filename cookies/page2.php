<?php
    if(isset($_COOKIE['user'])) {
        echo 'User ' . $_COOKIE['user'] . ' is already registered';
    } else {
        echo 'no data set';
    }
?>