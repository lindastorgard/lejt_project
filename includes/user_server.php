<?php

include 'database_connection.php';
include '../classes/User_posts.php';

$object = new User($pdo);
$user = $object->getAlluserPosts();

//Selects from database in descending order
$statement = $pdo->prepare("SELECT post_id, title, description, post_date FROM `posts` ORDER BY post_id DESC ");

//Execute it
$statement->execute();

//Fetch every row that it returns. $posts is now an Associative array
$userposts = $statement->fetchAll(PDO::FETCH_ASSOC);

?>
