<?php
include('database.php');

$posts = getPosts();

?>

<html>
    <body>
        <?php foreach ($posts as $post) {?>
            <h2><?=$post->title ?></h2>
            <p><?=$post->content ?></p>
        <?php } ?>
    </body>
</html>