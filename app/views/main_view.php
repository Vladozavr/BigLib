
<?php if ($data['numRows'] != 0): ?>


<div class="article">
  <div class="article_container">
    <?php if ($data['imgPresent'] == true):?>
    <div class="article_img_wrap article_<?php echo $data['classWrap']?>">
      <?php for ($i=1; $i < count($data['img'])+1; ++$i):?>
      <img src="objects/objects_<?php echo $data['randomArticle'];?>/images/<?php echo $data['img'][$i-1];?>" class="art_img <?php echo $data['classImg'][$i]; ?>">
      <?php endfor; ?>
    </div>
    <?php endif; ?>
    <form method="POST" action="view.php">
      <div class="article_main_content">
        <span class="name_art_tag art_elem">Название:</span>
        <h3 class="name_art art_elem_main"><?php echo $data['name']; ?></h3>
        <input type="text" class="input_edit input_edit_name" value="<?php echo $data['name']; ?>" placeholder="Имя" name="name_edit">
        <span class="author_art_tag art_elem">Автор:</span>
        <h3 class="author_edit art_elem_main"><?php echo $data['author']; ?></h3>
        <input type="text" class="input_edit input_edit_name_author" value="<?php echo $data['author']; ?>" placeholder="Автор" name="author_edit">
        <span class="author_art_tag art_elem">Ссылка:</span>
        <h3 class="link_edit art_elem_main">
          <a href='<?php echo $data['link'];?>' class="article_links"><?php echo $data['link'];?></a>
        </h3>
        <input type="text" class="input_edit input_edit_link" value="<?php echo $data['link'];?>" placeholder="Ссылка" name="link_edit">
        <span class="author_art_tag art_elem">Файл:</span>
        <?php if($data['filePresent']==true): for ($f=1; $f < count($data['files'])+1; ++$f):?>
        <h3 class="art_elem_file art_elem_main">
          <p class="name_of_file"><?php echo $data["files"][$f-1]?></p>
          <a href="objects/objects_<?php echo $data['randomArticle'];?>/materials/<?php echo $data["files"][$f-1]?>">
            <i class="fa fa-file" aria-hidden="true"></i>
          </a>
        </h3>
        <?php endfor; endif;?>
        <span class="author_art_tag art_elem">Комментарий:</span>
          <div class="comment_wrap">
            <div class="comment art_elem_main"><?php echo $data['comment'];?></div>
              <textarea class="comment_edit" name="comment_edit"><?php echo $data['comment'];?></textarea>
              <p class="edit_ok">Ok</p>
              <input type="submit" class="input_button_submit_edit" value="<?php echo $data['id'];?>" placeholder="Автор"  name="editOk">
              <span class="edit_cancel">Cancel</span>
          </div>
    </form>
        <div class="time_wrap">
          <span class="art_elem_time">Дата:</span>
          <time class="art_time"><?php echo $data['dateOne'];?></time></br>
          <span class="art_elem_time">Время:</span>
          <time class="art_time"><?php echo $data['dateTwo'];?></time>
        </div>
      </div>
        <span class="edit_article">edit</span>
        <span class="delete_article">delete</span>
        <div class="view_all"></div>
  </div>
</div>

<div class="modal_display_delete">
  Delete this article?
  <form method="GET" action="view.php" class="del_form">
    <input type="submit" value="<?php $data['id']?>" class="input_del input_del_left" name="del_article">
  </form>
  <p class="del_answer">YES</p>
  <input type="submit" value="NO" class="input_del input_del_right">
</div>

<div class="modal_for_img">
  <span class="close_modal_for_img"></span>
    <p class="slide_button slide_button_left"><</p>
    <p class="slide_button slide_button_right">></p>
    <img src="" class="slider">
</div>
<?php endif; ?>
<?php if ($data['numRows'] == 0): ?>
<p style="text-align:center;font-size:2em;">Статьи ещё не добовлялись!</p>
<?php endif; ?>
