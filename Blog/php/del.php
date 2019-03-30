<?php
require_once 'db.php';
$id = $_GET['id'];
$query1 = ("DELETE FROM posts WHERE id = $id");
$result = $link->query($query1);
$link->close();
header("location: http://blog");