<?php
function get_posts() {
	require_once 'db.php';
	$sql = "SELECT * FROM posts ";
	$result = mysqli_query($link, $sql);
	$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
	//return $posts;
	return (array_reverse($posts));
	$link->close();
}
