<?php
$msg_error = null;
if (isset($_GET['msg'])){
    if($_GET['msg'] == 1) {
        $msg_error = "Please fill all champs";
    }elseif ($_GET['msg'] == 2) {
        $msg_error = "Please correct name format (min-3 max-20 characters)";
    }elseif ($_GET['msg'] == 3) {
        $msg_error = "Please correct email format";
    }elseif ($_GET['msg'] == 4) {
        $msg_error = "Please correct username format (max 25 characters)";
    }elseif ($_GET['msg'] == 5) {
        $msg_error = "Please correct password format (min-6 max-15 characters)";
    }elseif ($_GET['msg'] == 6) {
        $msg_error = "Username unavailable";
    }
}

?>
<h2>Create an account</h2>
<span><?php echo $msg_error; ?></span> <br><br>
<form action="index.php?module=user&action=insert" method="post">
    <label>
        Name
        <input type="text" name="name" minlength="2" maxlength="25" required>
    </label>
    <label>
        Username (email) 
        <input type="email" name="username" maxlength="25" required>
    </label>
    <label>
        Email
        <input type="email" name="userEmail" maxlength="255" required>
    </label>
    <label>
        Password 
        <input type="password" name="userPassword" minlength="6" maxlength="20" pattern="^[a-zA-Z0-9]*" required>
    </label>
    <label>
        Birthdate
        <input type="date" name="userBirthday" required>
    </label>
    <input type="submit" value="Submit">
</form>
 