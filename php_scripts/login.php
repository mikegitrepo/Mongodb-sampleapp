<?php
session_start();
/*Code written by Ashish Trivedi*/

//including common mongo connection file
include('../mongo_connection.php');
$collection = $database->selectCollection('users');
//$result = $collection->find( array('username' => $_POST['post_text']));
$result = $collection->find( array('username' => $_POST['post_text']));
//creates document for inserting new post
//var_dump($result);
$user_id = '';
$username = '';
foreach ($result as $doc) {
	$user_id = $doc['_id'];
	$username = $doc['username'];
	break;
}
$_SESSION['user_id'] = $user_id;
echo $_SESSION['user_name']= $username;
