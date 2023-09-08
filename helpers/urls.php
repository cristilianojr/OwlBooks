<?php

$BASE_URL = 'http://' . $_SERVER['SERVER_NAME'] . dirname($_SERVER['REQUEST_URI']. '?') . '/';

function get_image($endswith) {
    global $BASE_URL;
    return $BASE_URL . 'images/' . $endswith;
}

function get_post_url($id) {
    global $BASE_URL;
    return $BASE_URL . 'post.php?id=' . $id;
}
