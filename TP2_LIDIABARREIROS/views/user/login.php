<?php
$msg_error = null;
if (isset($_GET['msg'])){
    if($_GET['msg'] == 1) {
        $msg_error = "Account not found";
    }elseif ($_GET['msg'] == 2) {
        $msg_error = "Incorrect password";
    }
}

?>

<h2>Login</h2>
<span><?php echo $msg_error; ?></span> <br><br>

<form action="index.php?module=user&action=match" method="post">
    <label for="username">Username</label>
    <input type="email" name="username" maxlength="200" required>
    <label for="password">Password</label>
    <input type="password" name="password" minlength="6" maxlength="15" required>
    <input type="submit" value="Submit" >
</form>