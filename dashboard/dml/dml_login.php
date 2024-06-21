<?php
include_once("../../library/global.php");

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $username = htmlspecialchars(sanitize_input($_POST['username'], 'string'));
    $password = htmlspecialchars(sanitize_input($_POST['password'], 'string'));

    $data_single = [
        'name' => 'Febrian',
        'email' => 'john@example.com',
        'age' => 30
    ];

    $data_multiple = [
        ['name' => 'Jane Doe', 'email' => 'jane@example.com', 'age' => 25],
        ['name' => 'Bill Smith', 'email' => 'bill@example.com', 'age' => 28]
    ];

    $result = insert_query('users', $data_single);
    if(!$result) return false;

    $result = insert_query('users', $data_multiple);
    if(!$result) return false;
}