<?php

if(!isset($_SESSION['fingerPrint']) OR $_SESSION['fingerPrint']!=md5($_SERVER['HTTP_USER_AGENT'] . $_SERVER['REMOTE_ADDR'])) {
    header("Location: index.php?module=user&action=login");
}

?>

<h2>Edit Your Forums: </h2>
<form action="index.php?module=forum&action=edit" method="post">
<input type="hidden" name="forumId" value="<?php echo $data[0]['forumId']; ?>">
    <label for="title">Title</label>
    <input type="text" name="title" value="<?php echo $data[0]['titleForum'];?>">
    <label for="content">Text</label><br>
    <textarea name="content" cols="150" rows="15" maxlength="1500"><?php echo $data[0]['textForum'];?></textarea>
    <input type="submit">
</form>