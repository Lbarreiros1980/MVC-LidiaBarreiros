<?php

if(!isset($_SESSION['fingerPrint']) OR $_SESSION['fingerPrint']!=md5($_SERVER['HTTP_USER_AGENT'] . $_SERVER['REMOTE_ADDR'])) {
    header("Location: index.php?module=user&action=login");
}

$msg_error = null;
if (isset($_GET['msg'])){
    if($_GET['msg'] == 1) {
        $msg_error = "Please fill all champs";
    }elseif ($_GET['msg'] == 2) {
        $msg_error = "Please correct title format (min-6 max-150 characters)";
    }elseif ($_GET['msg'] == 3) {
        $msg_error = "VPlease correct text format (min-6 max-1500 characters)";
    }
}
?>

<h2> Forum Creator Tool</h2>
<span><?php echo $msg_error; ?></span> <br><br>
<form action="index.php?module=forum&action=insert" method="post">
    <label for="titleForum">Title</label>
    <input type="text" name="titleForum" minlength="5" maxlength="100" required>
    <label for="textForum">Text</label><br>
    <textarea name="content" cols="150" rows="15" maxlength="1000" required></textarea>
    <input type="submit" value="Submit">
</form>
