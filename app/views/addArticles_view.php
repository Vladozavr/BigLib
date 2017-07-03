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
?>
  <h1 class="caption">Add new article</h1>
  <hr>
  <div class="form_wrap_add_article">
    <form action="<?php echo $bigLibPrefix;?>/upload" method="POST" enctype="multipart/form-data">
      <span class="art_elem_desc">Раздел:</span>
      <div class="section_it_container ">
        <select name="section_it" class="section_it ">
          <?php echo $data['option']; ?>
        </select>
            </div>
            <span class=" art_elem_desc">Название:</span>
            <div class="art_elem_desc_label"><input type="text" class="input_name name_it  input_entry" placeholder="Название материала" name="name_it"></div>
              <div class="wrap_for_check"></div><div class="length_name_wrap length_input">150</div>

            <span class=" art_elem_desc">Автор:</span>
            <div class="art_elem_desc_label"><input type="text" class="input_author input_entry" placeholder="Автор материала" name="author_it"></div>
            <div class="wrap_for_check"></div><div class="length_author_wrap length_input">80</div>
            <span class=" art_elem_desc">Материал:</span>
            <div class="material_it_container ">
              <select name="material_it" class="material_it">
                <option value="0">Книга</option>
                <option value="1">Статья</option>
                <option value="2">Видео</option>
                <option value="3">Другое</option>
              </select>
            </div>
            <!--<i class="fa fa-book faForInp" aria-hidden="true"></i><i class="fa faForInp fa-database" aria-hidden="true"></i>-->
            <span class=" art_elem_desc">Ссылка:</span>
            <div class="art_elem_desc_label"><input type="text" class="input_author input_link input_entry" placeholder="Ссылка" name="link_it"></div>
            <div class="wrap_for_check"></div><div class="length_link_wrap length_input">500</div>
            <span class=" art_elem_desc">Изображение:</span>
            <input type="file" class="input_file input_file_one" name="image_it[]">
            <input type="file" class="input_file input_file_extra input_file_two" name="image_it[]">
            <input type="file" class="input_file input_file_extra input_file_three" name="image_it[]">
            <input type="file" class="input_file input_file_extra input_file_four" name="image_it[]">
            <input type="file" class="input_file input_file_extra input_file_five" name="image_it[]">
            <input type="file" class="input_file input_file_extra input_file_six" name="image_it[]">
            <input type="file" class="input_file input_file_extra input_file_seven" name="image_it[]">
            <input type="file" class="input_file input_file_extra input_file_eight" name="image_it[]">
            <input type="file" class="input_file input_file_extra input_file_nine" name="image_it[]">
            <input type="file" class="input_file input_file_extra input_file_ten" name="image_it[]">
            <div class="buttonAddImg buttonManipulation">+<!--<input type="button" class="buttonAddImg buttonManipulation" value="+" name="">--></div>
            <div class="buttonDecreaseImg buttonManipulation">-  <!--<input type="button" class="buttonDecreaseImg buttonManipulation" value="-" name="">--></div>
            <span class=" art_elem_desc">Файл:</span>
            <input type="file" class="input_file" name="file_it[]">
            <input type="file" class="input_file input_file_extra input_file_object_two" name="file_it[]">
            <input type="file" class="input_file input_file_extra input_file_object_three" name="file_it[]">
            <input type="file" class="input_file input_file_extra input_file_object_four" name="file_it[]">
            <input type="file" class="input_file input_file_extra input_file_object_five" name="file_it[]">
            <input type="file" class="input_file input_file_extra input_file_object_six" name="file_it[]">
            <input type="file" class="input_file input_file_extra input_file_object_seven" name="file_it[]">
            <input type="file" class="input_file input_file_extra input_file_object_eight" name="file_it[]">
            <input type="file" class="input_file input_file_extra input_file_object_nine" name="file_it[]">
            <input type="file" class="input_file input_file_extra input_file_object_ten" name="file_it[]">
            <div class="buttonAddObj buttonManipulation">+<!--<input type="button" class="buttonAddObj buttonManipulation" value="+" name="">--></div>
            <div class="buttonDecreaseObj buttonManipulation">-<!--<input type="button" class="buttonDecreaseObj buttonManipulation" value="-" name="">--></div>
            <span class="author_art_tag art_elem_desc">Комментарий:</span>
            <div class="button_text_format button_text_format_link"> <i class="fa fa-link" aria-hidden="true"></i></div>
            <div class="button_text_format button_text_format_prew button_text_format_center"> <i class="fa fa-align-center" aria-hidden="true"></i></div>
            <div class="button_text_format button_text_format_prew button_text_format_bold">  <i class="fa fa-bold" aria-hidden="true"></i></div>
            <div class="button_text_format button_text_format_prew button_text_format_list"><i class="fa fa-th-list" aria-hidden="true"></i></div>
            <div class="wrap_for_check"></div><div class="length_comment_wrap length_input">21000</div>
            <textarea class="comment input_entry" name="comment_it"></textarea>

          </p>


            <input type="text" name="section_var" style="display:none;" value="<?php echo $data['arrayElemTableAdd']?>">
            <button class="button_submit" data-text="Готово"><span>отправить?</span>
              <input type="submit" class="input_button_submit" value="" name="upload_it"></button>
          </form>
        </div>
        <script type="text/javascript" src="../app/views/javascripts/javascript_addArticles.js"></script>
