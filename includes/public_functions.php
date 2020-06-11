<?php 
/*******************************
* Returns all published posts
*******************************/
function getPublishedPosts() {
	// use global $conn object in function
	global $conn;
	$sql = "SELECT * FROM posts WHERE published=true";
	$result = mysqli_query($conn, $sql);

	// Fetch all posts as an associatibe array called $posts
	$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

	return $posts;
}

// More functions to come here

?>