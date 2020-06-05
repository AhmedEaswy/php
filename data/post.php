<?php
    require('config/config.php');
    require('config/db.php');

    if(isset($_POST['delete'])) {
        $delete_id = mysqli_real_escape_string($conn, $_POST['delete_id']);

        $query = "DELETE FROM posts WHERE id = {$delete_id}";

            if(mysqli_query($conn, $query)) {
                header('Location: '.ROOT_URL.'');
            }
    }

    // get id
    $id = mysqli_real_escape_string($conn, $_GET['id']);
    // create query
    $query = 'SELECT * FROM posts WHERE id = '.$id;

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
    <body>
        <br />
        <div class="container">
            <a href="<?php echo ROOT_URL; ?>" class="btn btn-secondary">Back</a>
            <h1>Post</h1>
            <div class="card text-white bg-secondary  mb-3" style="max-width: 20rem;">
                <div class="card-header">Created at <?php echo $post['created_at'] . ' by'; ?> <?php echo $post['author']; ?></div>
                <div class="card-body">
                    <h4 class="card-title"><?php echo $post['title']; ?></h4>
                    <p class="card-text"><?php echo $post['body']; ?></p>
                </div>
            </div>
            <hr />
            <form class="float-right" method="POST" value="<?php echo $_SERVER['PHP_SELF']; ?>">
                <input type="hidden" name="delete_id" value="<?php echo $post['id']; ?>" />
                <input type="submit" name="delete" value="Delete" class="btn btn-danger" />
            </form>
            <a class="btn btn-secondary" href="<?php echo ROOT_URL; ?>editpost.php?id=<?php echo $post['id']; ?>">Edite</a>
        </div>
    </body>
<?php require('layout/footer.php'); ?>