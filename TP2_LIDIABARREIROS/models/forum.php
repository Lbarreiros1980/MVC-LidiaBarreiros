<?php

function forum_model_insert($request){
    require(CONNEX_DIR);
    foreach($request as $key=>$value){
        $value = trim($value);
        $$key=mysqli_real_escape_string($con,$value);
    }
    $userId = $_SESSION['userId'];
    $sql = "INSERT INTO forum (titleForum, textForum, userId, username) VALUES ('$title','$text','$userId','$username')";
    mysqli_query($con, $sql);
    mysqli_close($con);
}

function forum_model_user($request){
    require(CONNEX_DIR);
    foreach($request as $key=>$value){
        $$key=mysqli_real_escape_string($con,$value);
    }
    $userId = $_SESSION['userId'];
    $sql = "SELECT * FROM forum WHERE userId ='$userId'";
    $result = mysqli_query($con, $sql);
    $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_close($con);
    return $result;
}

function forum_model_view($request){
    require(CONNEX_DIR);
    foreach($request as $key=>$value){
        $$key=mysqli_real_escape_string($con,$value);
    }
    $sql = "SELECT * FROM forum WHERE forumId = 'forumId'";
    $result = mysqli_query($con, $sql);
    $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_close($con);
    return $result;
}

function forum_model_forumview($request){
    require(CONNEX_DIR);
    foreach($request as $key=>$value){
        $$key=mysqli_real_escape_string($con,$value);
    }
    $sql = "SELECT * FROM forum WHERE forumId ='$id'";
    $result = mysqli_query($con, $sql);
    $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_close($con);
    return $result;
}

function forum_model_edit($request)
 {
    require(CONNEX_DIR); 
    foreach($request as $key=>$value)
     {   
         $value = trim($value);
         $$key=mysqli_real_escape_string($con,$value);
     }
     $sql = "UPDATE forum SET title = $titleForum, textForum =  $textForum WHERE forumId = 'forumId'";
     mysqli_query($con, $sql);
     mysqli_close($con);
 }

function forum_model_delete($request)
 {
    require(CONNEX_DIR); 
    foreach($request as $key=>$value)
     {   
         $$key=mysqli_real_escape_string($con,$value);
     }
     $sql = "DELETE FROM forum WHERE forumId = 'forumId'"; 
     mysqli_query($con, $sql);
     mysqli_close($con);
 }

?>

