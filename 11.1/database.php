<?php

$host = 'localhost';
$username = 'root';
$password = 'root';
$dbname = 'blog';

function getPosts() {
    global $host, $username, $password, $dbname;

    $db = new mysqli($host, $username, $password, $dbname);
    $records = array();

    $result = $db->query('SELECT * FROM posts');

    while ($row = $result->fetch_object()) {
        $records[] = $row;
    }

    return $records;
}