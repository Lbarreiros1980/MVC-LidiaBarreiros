<?php

function forum_controller_index($request){
    require(MODEL_DIR.'/forum.php');
    $data = forum_model_view($request);
    render(VIEW_DIR.'/base/welcome.php', $data);
}

function forum_controller_create(){
    require(MODEL_DIR.'/forum.php');
    render(VIEW_DIR.'/user/forumCreate.php');
}

function forum_controller_insert($request){
    require(MODEL_DIR.'/forum.php');
    forum_model_insert($request);
    header('Location:index.php');
}

function forum_controller_view($request){
    require(MODEL_DIR.'/forum.php');
    $data = forum_model_user($request);
    render(VIEW_DIR.'/user/forumUser.php', $data);
}

function forum_controller_edit($request){
    require(MODEL_DIR.'/forum.php');
    forum_model_edit($request);
    header("Location: ?module=forum&action=view");
}

function forum_controller_editView($request){
    require(MODEL_DIR.'/forum.php');
    $data = forum_model_forumview($request);
    render(VIEW_DIR.'/user/forumEdit.php', $data);
}

function forum_controller_delete($request){
    require(MODEL_DIR.'/forum.php');
    forum_model_delete($request);
    header("Location: ?module=forum&action=view");
}
?>