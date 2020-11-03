<?php

$host = 'localhost';
$username = 'root';
$password = 'root';
$dbname = 'blog';

function getDb() {
    global $host, $username, $password, $dbname;

    $db = new mysqli($host, $username, $password, $dbname);

    return $db;
}

function getPosts() {
    $db = getDb();

    $records = array();

    $result = $db->query('SELECT * FROM posts');

    while ($row = $result->fetch_object()) {
        $records[] = $row;
    }

    return $records;
}

function getPost($id) {
    $db = getDb();
    

    $result = $db->query('SELECT * FROM posts WHERE id = ' . $id);

    $row = $result->fetch_object();

    return $row;
}