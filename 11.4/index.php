<?php
include('database.php');

$posts = getPosts();

?>

<html>
    <body>
        <?php foreach ($posts as $post) {?>
            <h2>
                <a href="post.php?id=<?=$post->id ?>">
                    <?=$post->title ?>
                </a>
            </h2>
            <p><?=$post->content ?></p>
        <?php } ?>
    </body>
</html>