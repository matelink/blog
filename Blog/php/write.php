<?php 
require_once 'db.php';
if (isset($_POST['write'])) {
$title = strip_tags(trim($_POST['title']));
$image = strip_tags(trim($_POST['image']));
$content = strip_tags(trim($_POST['content']));
$dt = $_POST['dt'];
//echo $title.'</br> '.$image.'</br>'.$content.'</br>'.$dt;
//$mysqli = @new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
$query = ("INSERT INTO `posts` (`id`, `title`, `image`, `content`, `dt`) VALUES (NULL, '$title', '$image', '$content', '$dt')");
$result = $link->query($query);
$link->close();
header("location: http://blog");
 }
