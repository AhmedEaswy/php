<?php
    // create connection
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    // check connection 
    if(mysqli_connect_errno()) {
        echo 'falied to connect to database ' . mysqli_connect_errno();
    }