<?php
include('database.php');
include('gethelpers.php');

//var_dump($post);

?>

<html>
    <body>
            <h2>
              <?=$post->title ?> <a href="edit.php?id=<?=$id ?>">Edit Post</a> <a href="delete.php?id=<?=$id ?>">Delete Post</a>
            </h2>
            <h4><?="$post->first_name $post->last_name" ?></h4>
            <p><?=$post->content ?></p>
    </body>
</html>