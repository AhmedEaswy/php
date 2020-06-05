<?php
    $user = [
        'name' => 'ahmed eleaswy',
        'email' => 'test@test.com',
        'age' => '17'
    ];
    $user = serialize($user);
    setCookie('user', $user, time() + 3600);
    $user = unserialize($_COOKIE['user']);
    print_r($user['age']);
?>