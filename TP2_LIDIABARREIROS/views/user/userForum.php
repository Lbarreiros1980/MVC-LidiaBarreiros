<?php

if(!isset($_SESSION['fingerPrint']) OR $_SESSION['fingerPrint']!=md5($_SERVER['HTTP_USER_AGENT'] . $_SERVER['REMOTE_ADDR'])) {
    header("Location: index.php?module=user&action=login");
}
?>

<h2>My Forum</h2>

<div class="forumContainer">
  <?php foreach($data as $row) { ?>
  <div>
    <h3><?php echo $row['titleForum'] ?></h3>
    <p><?php echo $row['textForum'] ?></p>
    <span><?php echo date_format(date_create($row['post_date']),"Y/m/d") ?> </span>
    <a class="edit" href="?module=forum&action=editView&id=<?php echo $row['forumId']; ?>">Edit</a>
    <form class="delete" action="?module=forum&action=delete" method="post">
    <input type="hidden" name="forumId" value="<?php echo $row['forumId'] ?>">
    <input type="submit" Value="Delete" class=delete>
    </form>
  </div>
  <?php } ?>
</div>