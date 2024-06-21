<?php
function sanitize_input($data, $type) {
    $data = trim($data);
    $data = strip_tags($data);
    switch($type) {
        case 'string':
            $data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
            break;
        case 'email':
            $data = filter_var($data, FILTER_SANITIZE_EMAIL);
            break;
        case 'url':
            $data = filter_var($data, FILTER_SANITIZE_URL);
            break;
        case 'int':
            $data = filter_var($data, FILTER_SANITIZE_NUMBER_INT);
            break;
        case 'float':
            $data = filter_var($data, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
            break;
        default:
            $data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
    }
    return $data;
}

function insert_query($table = '', $data = []){

}

function update_query($table = '', $data = []){

}

function delete_query($table = '', $data = []){

}

function check_token(){

}

function auth(){

}