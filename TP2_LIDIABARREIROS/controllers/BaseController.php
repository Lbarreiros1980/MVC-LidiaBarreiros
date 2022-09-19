<?php

function base_controller_index($request){
    require(MODEL_DIR.'/forum.php');
    $data = forum_model_view($request);
    render(VIEW_DIR.'/base/welcome.php', $data);
}

?>