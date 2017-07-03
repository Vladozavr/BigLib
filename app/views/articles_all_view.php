<?php
$routes = explode('/',$_SERVER['REQUEST_URI']);
  if ($routes[1] == 'bigLib') {
  $firstRout = 2;
  $secondRout = 3;
  $bigLibPrefix = "/bigLib";
}else{
  $firstRout = 1;
  $secondRout = 2;
  $bigLibPrefix ="";
}
$articleUsed = $routes[$firstRout];
?>
<?php for ($j=0; $j <$data['numRows'] ; $j++):?>


<div class="article">
  <div class="article_container">
    <?php if (!empty($data['img'][$j])):?>
    <div class="article_img_wrap article_<?php echo $data['classWrap'][$j]?>">
      <?php for ($i=0; $i < count($data['img'][$j]); ++$i):?>
      <img src="../objects/objects_<?php echo $articleUsed?>/images/<?php echo $data['img'][$j][$i];?>" class="art_img <?php echo $data['classImg'][$j][$i+1]; ?>">
      <?php endfor; ?>
    </div>
    <?php endif; ?>

    <form method="POST" action="<?php echo $bigLibPrefix;?>/manipulation">
      <div class="article_main_content">
        <span class="name_art_tag art_elem">Название:</span>
        <h3 class="name_art art_elem_main"><?php echo $data['name'][$j];?></h3> <!--!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
        <input type="text" class="input_edit input_edit_name" value="<?php echo $data['name'][$j]; ?>" placeholder="Имя" name="name_edit"><!--!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
        <span class="author_art_tag art_elem">Автор:</span>
        <h3 class="author_edit art_elem_main"><?php echo $data['author'][$j]; ?></h3><!--!!!!!!!!!!!!!!!!!!!!!!-->
        <input type="text" class="input_edit input_edit_name_author" value="<?php echo $data['author'][$j]; ?>" placeholder="Автор" name="author_edit"><!--!!!!!!!!!!!!!!!!!!!!!!-->
        <span class="author_art_tag art_elem">Ссылка:</span>
        <h3 class="link_edit art_elem_main">
          <a href='<?php echo $data['link'][$j];?>' class="article_links"><?php echo $data['link'][$j];?></a><!--!!!!!!!!!!!!!!!!!!!!!!-->
        </h3>
        <input type="text" class="input_edit input_edit_link" value="<?php echo $data['link'][$j];?>" placeholder="Ссылка" name="link_edit"><!--!!!!!!!!!!!!!!!!!!!!!!-->
        <span class="author_art_tag art_elem">Файл:</span>
        <?php if (!empty($data['files'][$j])):for ($f=0; $f <count($data['files'][$j]); ++$f):?><!--!!!!!!!!!!!!!!!!!!!!!!-->
        <h3 class="art_elem_file art_elem_main">
          <p class="name_of_file"><?php echo $data["files"][$j][$f]?></p><!--!!!!!!!!!!!!!!!!!!!!!!-->
          <a href="../objects/objects_<?php echo $articleUsed?>/materials/<?php echo $data["files"][$j][$f]?>"><!--!!!!!!!!!!!!!!!!!!!!!!-->
            <i class="fa fa-file" aria-hidden="true"></i>
          </a>
        </h3>
      <?php endfor;?>
      <?php endif; ?>
        <span class="author_art_tag art_elem">Комментарий:</span>
          <div class="comment_wrap">
            <div class="comment art_elem_main"><?php echo $data['comment'][$j];?></div><!--!!!!!!!!!!!!!!!!!!!!!!-->
              <textarea class="comment_edit" name="comment_edit"><?php echo $data['comment'][$j];?></textarea><!--!!!!!!!!!!!!!!!!!!!!!!-->
              <p class="edit_ok">Ok</p>
              <input type="submit" class="input_button_submit_edit" value="<?php echo $data['id'][$j];?>" placeholder="Автор"  name="editOk"><!--!!!!!!!!!!!!!!!!!!!!!!-->
              <span class="edit_cancel">Cancel</span>
          </div>
		  <input type="text" style="display:none;" name="section_del" value="<?php echo $data['section']?>">
    </form>
        <div class="time_wrap">
          <span class="art_elem_time">Дата:</span>
          <time class="art_time"><?php echo $data['dateOne'][$j];?></time></br><!--!!!!!!!!!!!!!!!!!!!!!!-->
          <span class="art_elem_time">Время:</span>
          <time class="art_time"><?php echo $data['dateTwo'][$j];?></time><!--!!!!!!!!!!!!!!!!!!!!!!-->
        </div>
      </div>
      <?php if (isset($_SESSION['login_on'])/*== 1*/):?>
        <span class="edit_article">edit</span>
        <span class="delete_article">delete</span>
      <?php endif; ?>
        <div class="view_all"></div>
  </div>
</div>

<div class="modal_display_delete">
  Delete this article?
  <form method="POST" action="<?php echo $bigLibPrefix;?>/manipulation" class="del_form">
    <input type="submit" value="<?php echo $data['id'][$j]?>" class="input_del input_del_left" name="del_article">
    <input type="text" style="display:none;" name="section_del" value="<?php echo $data['section']?>">
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

<?php endfor;?>
<?php if ($data['numRows'] == 0): ?>
<p style="text-align:center;font-size:2em;">Статьи ещё не добовлялись!</p>
<?php endif; ?>

<form class="" action="" method="post">
  <div class="nav_line_wrap">
    <div class="nav_line">
<?php for ($pg=1; $pg <= $data['totalPages']; $pg++): if ($pg == $data['currentPage']): ?>
    <p class="select_page page_nav"><?php echo $pg;?></p>
  <?php else: ;?>
  <input type="submit" class="page_nav" name="page" value="<?php echo $pg;?>">
<?php endif; ?>
<?php endfor; ?>
    </div>
  </div>
</form>
