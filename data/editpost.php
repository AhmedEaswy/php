<?php
    require('config/config.php');
    require('config/db.php');
    $msg = '';
    $msgClass= '';
    if(isset($_POST['submit'])) {
        $update_id = mysqli_real_escape_string($conn, $_POST['update_id']);
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $author = mysqli_real_escape_string($conn, $_POST['author']);
        $body = mysqli_real_escape_string($conn, $_POST['body']);

        if($title === '' && $author === '' && $message === '') {
            $msg =  'fields is empty';
            $msgClass= 'alert-danger';
        } else {
            $query = "UPDATE posts SET
                title='$title',
                author='$author',
                body='$body'
                WHERE id = {$update_id}";

            if(mysqli_query($conn, $query)) {
                header('Location: '.ROOT_URL.'');
            }
        }
    }

    // get id
    $id = mysqli_real_escape_string($conn, $_GET['id']);
    // create query
    $query = 'SELECT * FROM posts WHERE id='.$id;

    // get result
    $result = mysqli_query($conn, $query);

    //fetch data
    $post = mysqli_fetch_assoc($result);

    //free result
    mysqli_free_result($result);

    //colse connection
    mysqli_close($conn);

?>
<?php require('layout/header.php'); ?>
<br />
    <div class="container">
        <div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
        <h1>Edit Post</h1>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" class="form-control" value='<?php echo $post['title'] ?>' />
            </div>
            <div class="form-group">
                <label>Author</label>
                <input type="text" name="author" class="form-control" value='<?php echo $post['author'] ?>' />
            </div>
            <div class="form-group">
                <label>Body</label>
                <textarea type="text" name="body" class="form-control"><?php echo $post['body'] ?></textarea>
            </div>
            <input type="hidden" name="update_id" value="<?php echo $post['id']; ?>" />
            <input type="submit" name="submit" value="submit"  class="btn btn-dark"/>
        </form>
    </div>
    </body>
    <?php require('layout/footer.php'); ?>