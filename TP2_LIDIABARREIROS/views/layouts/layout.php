<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=à, initial-scale=1.0">
    <title>MVC</title>
    <link rel="stylesheet" href="resources/css/style.css">
    <style> @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,600;0,700;1,500&family=Roboto:ital,wght@0,100;0,500;0,900;1,100;1,300;1,400;1,700;1,900&family=Source+Sans+Pro&family=Ubuntu:wght@500&display=swap');</style>
</head>
<body>
<ul class="navigation">
        <a href="?module=base&action=index">Home</a>
        <?php if(!empty($_SESSION['userId'])){ ?>
        <a href="?module=forum&action=view">My Forums</a>
        <a href="?module=forum&action=create">Forum Creator</a>
        <a href="?module=user&action=logout">Log Out</a>
        <?php }else{ ?>
        <a href="?module=user&action=create">Sign Up</a>
        <a href="?module=user&action=login">Log In</a>
        <?php } ?>
    </ul>

    <div class="container">
        <?php echo $content; ?>
    </div>
</body>
</html>