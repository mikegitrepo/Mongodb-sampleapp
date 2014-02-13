<?php
session_start();
/*Code written by Ashish Trivedi*/

//including common mongo connection file
include('../mongo_connection.php');
$collection = $database->selectCollection('users');

//creates document for inserting new post
$new_post_mongo = array (
		'username' => $_POST['post_text'],
		'profile_pic' => 'xyz.jpg'
);
$userid = $collection->insert($new_post_mongo);
echo $userid;
