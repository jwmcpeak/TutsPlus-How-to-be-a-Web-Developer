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
    
    $sql = 'SELECT posts.*, first_name, last_name FROM posts ' .
           'INNER JOIN users ON posts.author_id = users.id ' .
           "WHERE posts.id = $id";

    $result = $db->query($sql);

    $row = $result->fetch_object();

    return $row;
}

function deletePost($id) {
    $db = getDb();

    $db->query("DELETE FROM posts WHERE id = $id");
}