<?php
function authentication_model_match($request){
    require_once(CONNEX_DIR);
    foreach($request as $key=>$value){
        $$key=mysqli_real_escape_string($con,$value);
    }
    $sql = "SELECT * FROM user WHERE username = '$username'";
    $result = mysqli_query($con, $sql);
    
    $rows_count = mysqli_num_rows($result);
    if ($rows_count === 1){
        $user = mysqli_fetch_assoc($result);
        $dbPassword = $user['userPassword'];
        if (password_verify($password, $dbPassword)){
        session_regenerate_id();
        $_SESSION['name'] = $user['userName'];
        $_SESSION['userId'] = $user['userId'];
        $_SESSION['fingerprint'] = md5($_SERVER['HTTP_USER_AGENT'].$_SERVER['REMOTE_']);
        header("Location: index.php");  
        return $result;
    } else {
        header("Location:index.php?module=user&action=login&msg=1");  
    }
}}

?>