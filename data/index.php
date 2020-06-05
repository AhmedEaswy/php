<?php
    require('config/config.php');
    require('config/db.php');


    // create query
    $query = 'SELECT * FROM posts ORDER BY created_at DESC';

    // get result
    $result = mysqli_query($conn, $query);

    //fetch data
    $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

    //free result
    mysqli_free_result($result);

    //colse connection
    mysqli_close($conn);
?>
    <?php require('layout/header.php'); ?>
        <div class="container">
            <h1>Posts</h1>
            <?php foreach($posts as $post) : ?>
                <div class="card text-white bg-secondary mb-3" style="max-width: 20rem;">
                    <div class="card-header">Created at <?php echo $post['created_at'] . ' by'; ?> <?php echo $post['author']; ?></div>
                    <div class="card-body">
                        <h4 class="card-title"><?php echo $post['title']; ?></h4>
                        <p class="card-text"><?php echo $post['body']; ?></p>
                        <a class="btn btn-light" href="post.php?id=<?php echo $post['id']; ?>">Read More</a>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </body>
    <?php require('layout/footer.php'); ?>