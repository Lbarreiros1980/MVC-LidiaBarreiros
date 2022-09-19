
<h2> Forum </h2>
<br>
<div class="container-forum">
  <?php foreach($data as $row) { ?>
  <div>
    <h3><?php echo $row['titleForum'] ?></h3>
    <p><?php echo $row['textForum'] ?></p>
    <span><?php echo date_format(date_create($row['post_date']),"Y/m/d") ?></span><span class=author>, par : <?php echo $row['name'] ?>.</span>
  </div>
  <?php } ?>
</div>
<footer>
<p>
  MVC framework
</p>
</footer>
