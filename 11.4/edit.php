<?php
include('database.php');

if (isset($_POST['edit-submit'])) {

    $postId = filter_var($_POST['post-id'], FILTER_VALIDATE_INT);
    
    if ($postId == false || $postId < 1) {
        die('Invalid input');
    }

    $postTitle = strip_tags($_POST['post-title']);
    $postContent = strip_tags($_POST['post-content']);

    $sql = "UPDATE posts SET title = ?, content = ? WHERE id = ?";

    $db = getDb();

    $smt = $db->prepare($sql);
    $smt->bind_param('ssi', $postTitle, $postContent, $postId);
    $smt->execute();
    
    header("Location: post.php?id=$postId");
} else {
    include('gethelpers.php');
}


?>

<html>
    <body>
        <form action="edit.php" method="post">
            <input type="hidden" name="post-id" value="<?=$post->id ?>" />
            <div>
                <label for="post-title">Title:</label>
                <input type="text" name="post-title" value="<?=$post->title ?>" />
            </div>
            <div>
                <label for="post-content">Content:</label>
                <input type="text" name="post-content" value="<?=$post->content ?>" />
            </div>
            <div>
                <input type="submit" name="edit-submit" value="Edit Post" />
            </div>
        </form>
    </body>
</html>