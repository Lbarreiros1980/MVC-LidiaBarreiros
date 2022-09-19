<?php

if(!isset($_SESSION['fingerPrint']) OR $_SESSION['fingerPrint']!=md5($_SERVER['HTTP_USER_AGENT'] . $_SERVER['REMOTE_ADDR'])) {
    header("Location: index.php?module=user&action=login");
}
?>
<form action="index.php?module=user&action=edit" method="post">
    <input type="hidden" name="userId" value="<?php echo $data['userId']; ?>">
        <label>
            Name
            <input type="text" name="name" value="<?php echo $data['userName']; ?>">
        </label>
        <label>
            Email
            <input type="email" name="email" value="<?php echo $data['userEmail']; ?>">
        </label>
        <label>
            Birthdate
            <input type="date" name="userBirthday" value="<?php echo date_format(date_create($data['DOB']),"Y-m-d") ?>">
        </label>
        <input type="submit" value="Submit">
    </form>
 
