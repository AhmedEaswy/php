<?php
    $msg = '';
    $msgClass = '';
    if(filter_has_var(INPUT_POST, 'submit')) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        if (!empty($name) && !empty($email) && !empty($message)) {
            if(filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
                $msg = 'Please enter a valid email';
                $msgClass = 'alert-danger';
            } else {
                $toemail = 'support@mail.com';
                $subject = 'contact request from'.$name;
                $body = '<h2>Contact Request</h2>
                    <h4>Name</h4><p>'.$name.'</p>'.
                    '<h4>Email</h4>'.$email.'</p>'.
                    '<h4>Message</h4>'.$message.'</p>';
                
                $header = "MIME-Version: 1.0 "."\r\n";
                $header .="Content-Type:text/html;charset=utf-8" . "\r\n";
                if(mail($toemail, $subject, $body, $headers)) {
                    $msg = "Your Email Sent";
                    $msgClass = 'alert-success';
                } else {
                    $msg = "Your Email Did not Sent";
                    $msgClass = 'alert-danger';
                }
            }
        } else {
            $msg = 'please fill all fields';
            $msgClass = 'alert-danger';
        }

    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Contact us</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    </head>
    <body>
        <div class="navbar navbar-dark bg-dark shadow-sm">
            <div class="container d-flex justify-content-between">
                <a href="#" class="navbar-brand d-flex align-items-center">
                    <strong>Contact Us</strong>
                </a>
            </div>
        </div>
        <div class="container" style="margin-top:50px">
            <?php if($msg != ''): ?>
            <div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
            <?php endif; ?>
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" value="<?php echo isset($_POST['name']) ? $name : '' ?>" />
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control" value="<?php echo isset($_POST['email']) ? $email : '' ?>" />
                </div>
                <div class="form-group">
                    <label>Message</label>
                    <textarea name="message" class="form-control"><?php echo isset($_POST['message']) ? $message : '' ?></textarea>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </body>
</html>