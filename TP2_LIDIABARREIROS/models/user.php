<?php

function user_model_insert($request){
    require(CONNEX_DIR);
    foreach($request as $key=>$value){
        $$key=mysqli_real_escape_string($con,$value);
    }
    $password = password_hash($password, PASSWORD_BCRYPT);
    $sql = "INSERT INTO user (name, email, username, password, birthday) VALUES ('$name','$email','$username','$password','$birthday')";
    mysqli_query($con, $sql);
    mysqli_close($con);
    header("Location:index.php?module=user&action=login");
}


function user_model_verify($request){
    require(CONNEX_DIR);
    foreach($request as $key=>$value){
        $$key=mysqli_real_escape_string($con,$value);
    }

    if (empty($userPassword) || empty($name) || empty($email) || empty($username) || empty($birthday)){
        header("Location: index.php?module=user&action=create&msg=1");
    }else if(strlen($name)<2 || strlen($name)>25){
        header("Location: index.php?module=user&action=create&msg=2");
    }else if(strlen($email)<1 || strlen($email)>254 || !filter_var($email, FILTER_VALIDATE_EMAIL)){
        header("Location: index.php?module=user&action=create&msg=3");
    }else if(strlen($username)<1 || strlen($username)>254 || !filter_var($email, FILTER_VALIDATE_EMAIL)){
        header("Location: index.php?module=user&action=create&msg=4");
    }else if(strlen($password)<6 || strlen($password)>20 || !preg_match("/^[a-zA-Z0-9]*/", $password)){
        header("Location: index.php?module=user&action=create&msg=5");
    }else {
        $sql = "SELECT username FROM user WHERE username = '$username'";
        $result = mysqli_query($con, $sql);
        $result = mysqli_fetch_assoc($result);
        mysqli_close($con);
        if ($result){
            header("Location: index.php?module=user&action=create&msg=6");
        }else {
            return $request;
        }
    }
}

function user_model_view($request){
    require(CONNEX_DIR);
    foreach($request as $key=>$value){
        $$key=mysqli_real_escape_string($con,$value);
    }
    $sql = "SELECT * FROM user WHERE userId = '$userId'";
    $result = mysqli_query($con, $sql);
    $result = mysqli_fetch_assoc($result);
    mysqli_close($con);
    return $result;
}

function user_model_edit($request){
    require(CONNEX_DIR);
    foreach($request as $key=>$value){
        $$key=mysqli_real_escape_string($con,$value);
    }
    $sql = "UPDATE user SET name = '$name', email = '$email', birthday = '$birthday' WHERE userId = '$userId'";
    mysqli_query($con, $sql);
    mysqli_close($con);
}

function user_model_delete($request)
 {
    require(CONNEX_DIR); 
    foreach($request as $key=>$value)
     {   
         $$key=mysqli_real_escape_string($con,$value);
     }
     $sql = "DELETE FROM user WHERE userId = '$userId'"; 
     mysqli_query($con, $sql);
     mysqli_close($con);
 }


?>