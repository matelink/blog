<?php
require_once 'php/header.php';
require_once 'php/functions.php';
?>
<section>
  
	<?php $posts = get_posts(); foreach ($posts as $post):?>
	<div class="blog">
		<div class="ver animated bounceInUp">
			<h1></h1>
			<img class="im1"  src="<?=$post['image']?>">
      <div>
        <a href="php/rewrite.php?id=<?=$post['id']?>">Редактировать</a>
        <br> </br>
        <a href="php/del.php?id=<?=$post['id']?>">Удалить</a>
      </div>
			<!--<p>
				<?=$post['title']?>
			</p>-->
			<h1 ><?=$post['content']?></h1>
      <!--<b><? $i+=1; echo $i; ?></b>-->
		</div>
	</div>
	<?php endforeach; ?>
		<div class="animated bounceInDown" id="zatemnenie">
      		<form method="POST" id="okno" action="php/write.php">
      			<h3>Новая статья</h3>
      				<input autocomplete="off" class="txt1" size="40" maxlength="30" required type="text" name="title" placeholder="Название статьи">
      				<input autocomplete="off" class="txt1" size="40" maxlength="300" required type="text" name="image" placeholder="Ссылка на картинку">
      				<!--<input class="upload-file"  type="file" name="file" multiple accept="image/*">-->
        			<p><textarea class="txt" required name="content" maxlength="723" minlength="50" placeholder="Содержание статьи"></textarea></p>
        			<!--<input type="hidden" name="dt" value="<?php //secho date('Y-m-d') ?>">-->
              <input  type="hidden" name="dt" value="0">
       				<input name="write" type="submit" value="Добавить">
        			<button onclick="document.getElementById('zatemnenie').style.display='none'"  class="close">Закрыть окно</button>
     		</form>
    	</div>
<script>
    document.getElementById("btn").hover = function(e){
      sleep(3)
      if  {
  document.getElementById("text1").value = "";
}   
</script> 
</section>
  
<?php include_once 'php/footer.php';
?>