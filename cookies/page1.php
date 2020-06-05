<?php
    if(isset($_POST['submit'])) {
        $username = htmlentities($_POST['username']);

        setcookie('user', $username, time()+3600);

        # delete cookies
        // setcookie('user', $username, time()-3600);
        header('Location: page2.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>PhP Cookies</title>
    </head>
    <body>
        <form method="post" action='<?php echo $_SERVER['PHP_SELF']; ?>'>
            <input type="text" placeholder="username" name="username" />
            <input type="submit" value="submit" name="submit" />
        </form>
    </body>
</html>