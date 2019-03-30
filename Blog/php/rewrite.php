<?php
require_once 'db.php';
$id = $_GET['id'];
$query = ("SELECT title, image, content, dt FROM posts WHERE id='$id'");
$result = $link->query($query);
$post = mysqli_fetch_assoc($result);
if (isset($_POST['save'])){
$title = strip_tags(trim($_POST['title']));
$image = strip_tags(trim($_POST['image']));
$content = strip_tags(trim($_POST['content']));
$dt = $_POST['dt'];
$id =  strip_tags(trim($_GET['id']));
$query1 = ("UPDATE posts SET title = '$title', image = '$image', content = '$content', dt = '$dt' WHERE id = '$id'");
$result1 = $link->query($query1);
$link->close();
header("location: http://blog");
}
?>




<form method="POST" id="okno" action="rewrite.php?id=<?php echo $id;?>">
            <h3>Новая статья</h3>
              <input value="<? echo $post[title];?>" class="txt1" size="40" maxlength="30" required type="text" name="title" placeholder="Название статьи">
              <input value="<? echo $post[image];?>" class="txt1" size="40" maxlength="300" required type="text" name="image" placeholder="Ссылка на картинку">
              <!--<input class="upload-file"  type="file" name="file" multiple accept="image/*">-->
              <p><textarea class="txt" required name="content" maxlength="723" minlength="50" placeholder="Содержание статьи"><? echo $post[content];?></textarea></p>
              <!--<input type="hidden" name="dt" value="<?php //secho date('Y-m-d') ?>">-->
              <input type="hidden" name="dt" value="0">
              <input name="save" type="submit" value="Сохранить">
</form>

      		