<?php
include('database.php');
include('gethelpers.php');



?>

<html>
    <body>
            <h2>
              <?=$post->title ?> <a href="edit.php?id=<?=$id ?>">Edit Post</a>
            </h2>
            <p><?=$post->content ?></p>
    </body>
</html>