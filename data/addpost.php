<?php
    require('config/config.php');
    require('config/db.php');
    $msg = '';
    $msgClass= '';
    if(isset($_POST['submit'])) {
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $author = mysqli_real_escape_string($conn, $_POST['author']);
        $body = mysqli_real_escape_string($conn, $_POST['body']);

        if($title === '' && $author === '' && $message === '') {
            $msg =  'fields is empty';
            $msgClass= 'alert-danger';
        } else {
            $query = "INSERT INTO posts(title, author, body) VALUES('$title', '$author', '$body')";

            if(mysqli_query($conn, $query)) {
                header('Location: '.ROOT_URL.'');
            }
            // $msg = 'message sent';
            // $msgClass = 'alert-success';
        }
    }

?>
<?php require('layout/header.php'); ?>
<br />
    <div class="container">
        <div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
        <h1>Add Post</h1>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" class="form-control" />
            </div>
            <div class="form-group">
                <label>Author</label>
                <input type="text" name="author" class="form-control" />
            </div>
            <div class="form-group">
                <label>Body</label>
                <textarea type="text" name="body" class="form-control"></textarea>
            </div>
            <input type="submit" name="submit" value="submit"  class="btn btn-dark"/>
        </form>
    </div>
    </body>
    <?php require('layout/footer.php'); ?>