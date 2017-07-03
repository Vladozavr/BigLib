<?php
function outputArticles($firstURL,$secondURL){
  global $CONNECT;
  $onPage = 10;
  $arrayOfIdForDelete=[];
  $startPage = ($currentPage-1)*$onPage;
  $quanityRows = mysqli_query($CONNECT,"SELECT count(*) FROM `$firstURL` WHERE `section` = '$secondURL'");//Подсчёт кол-ва записей
  @$countArticles = mysqli_fetch_row($quanityRows);
  $totalPages = ceil($countArticles[0]/$onPage);                                  //Общее количество страниц
  if (isset($_GET['page'])) {
    $currentPage = ($_GET['page']);                                               //установка целевой, открытой страницы
  }else{
    $currentPage = 1;
  }

  if ($URL_Path != '/') {
    $selectArticle = mysqli_query($CONNECT,"SELECT * FROM `$firstURL` WHERE `section` = '$secondURL' ORDER BY `id` DESC LIMIT $startPage,$onPage");//Запрос для вывода страниц
  } else if ($URL_Path == '/') {
    $selectArticle = mysqli_query($CONNECT,"SELECT * FROM `articles_lists` WHERE `section` = 'Quotations' ORDER BY RAND() LIMIT 1");
    $firstURL = 'articles_lists';
  }
  @$numRows = mysqli_num_rows($selectArticle);                                     //Преобразование запроса для подсчёта статей, для вывода в цикле

  if (!$numRows || $numRows == 0) {
    $numRows = 0;
  }

  $arrayImageArticleDB = array(                                                   // Массив содержащий названия столба БД содержащего изобажение для вывода
    '1' => 'img_one',
    '2' => 'img_two',
    '3' => 'img_three',
    '4' => 'img_four',
    '5' => 'img_five',
    '6' => 'img_six',
    '7' => 'img_seven',
    '8' => 'img_eight',
    '9' => 'img_nine',
    '10' => 'img_ten'
  );
  $arrayImageArticleCount = array(                                                //Массив для класса одного изображения
    '1' => 'one',
    '2' => 'two',
    '3' => 'three',
    '4' => 'four',
    '5' => 'five',
    '6' => 'six',
    '7' => 'seven',
    '8' => 'eight',
    '9' => 'nine',
    '10' =>'ten'
  );
  $arrayImageArticleClass = array(                                                // Массив содержащий названия классов для обёрток изобажений
    '1' => 'img_block_one',
    '2' => 'img_block_two',
    '3' => 'img_block_three',
    '4' => 'img_block_four',
    '5' => 'img_block_five',
    '6' => 'img_block_six',
    '7' => 'img_block_seven',
    '8' => 'img_block_eight',
    '9' => 'img_block_nine',
    '10'=> 'img_block_ten'
  );

  $arrayFileArticleDB = array(
    '1' => 'file_one',
    '2' => 'file_two',
    '3' => 'file_three',
    '4' => 'file_four',
    '5' => 'file_five',
    '6' => 'file_six',
    '7' => 'file_seven',
    '8' => 'file_eight',
    '9' => 'file_nine',
    '10'=> 'file_ten'
  );
/*============НАЧАЛО ВЫВОДА===============*/
for ($i=0; $i < $numRows; $i++) {
  $flagImageClass = false;                                                      //Переменная для единичного объявления класса для обёртки изображений
  $arrayViewImg = [];                                                           //Объявление массива для найденных изображений
  $imgReadyForOutput = false;                                                   //флажок о готовности вывода изображений
  $viewRows = mysqli_fetch_array($selectArticle);                               //!!!!!!!!!! массив для вывода данных статьи
  array_push($arrayOfIdForDelete, $viewRows["id"]);                             //Занесение ID статей на страницы, для удаления

  for ($m=0; $m < 11; $m++) {                                                   //0000000000 Подготовка и инициализация данных для изображений
    if (!empty($viewRows["$arrayImageArticleDB[$m]"])) {                        //?????????? Проверка наличия изображений в базе данных
      array_push($arrayViewImg, $viewRows["$arrayImageArticleDB[$m]"]);         //Занесение в массив, найденных изображений
      $articleClass = count($arrayViewImg);                                     //подсчёт изображений, для правильного объявления класса-обёртки
      $imgReadyForOutput = true;                                                //установка флажка, о готовности вывода изображений
    }
  }
  if ($imgReadyForOutput == true) {                                             //?????????? Если изображения готовы к выводу
    for ($j=0; $j < 11; $j++) {                                                 //0000000000 Цикл вывода самих изображений
      if ($flagImageClass == false) {                                           //?????????? Единичное объявление класса для обёртки-изображений
        $wrapImg = $arrayImageArticleClass[$articleClass];
        $flagImageClass = true;
      }
      if (!empty($viewRows["$arrayImageArticleDB[$j]"])) {                      //Создание самих изображений
        #$img = '<img src="../objects/objects_'.$firstURL.'/images/'.$viewRows["$arrayImageArticleDB[$j]"].'" class="art_img '.$arrayImageArticleCount[$j].'"/>'
        #echo '<img src="../objects/objects_'.$firstURL.'/images/'.$viewRows["$arrayImageArticleDB[$j]"].'" class="art_img '.$arrayImageArticleCount[$j].'"/>';
      }
    }
  }
  if ($flagImageClass == true) {                                                // Закрытие обёртки изображений
    echo '</div>';
  }                                                                             //Окончание вывода изображений

  echo'
  <form method="POST" action="view.php">
  <div class="article_main_content">
  <span class="name_art_tag art_elem">Название:</span>
  <h3 class="name_art art_elem_main">'.$viewRows["name"].'</h3><input type="text" class="input_edit input_edit_name" value="'.$viewRows["name"].'" placeholder="Имя" name="name_edit">
  <span class="author_art_tag art_elem">Автор:</span>
  <h3 class="author_edit art_elem_main">'.$viewRows["author"].'</h3><input type="text" class="input_edit input_edit_name_author" value="'.$viewRows["author"].'" placeholder="Автор" name="author_edit">

  <span class="author_art_tag art_elem">Ссылка:</span>
  <h3 class="link_edit art_elem_main"><a href='.$viewRows["link"].' class="article_links">'.$viewRows["link"].'</a></h3><input type="text" class="input_edit input_edit_link" value="'.$viewRows["link"].'" placeholder="Ссылка" name="link_edit">
  <span class="author_art_tag art_elem">Файл:</span>';
  for ($f=0; $f < 11; $f++) {                                                   //формирование файлов
    if (!empty($viewRows["$arrayFileArticleDB[$f]"])) {
      echo '<h3 class="art_elem_file art_elem_main"><p class="name_of_file">'.$viewRows["$arrayFileArticleDB[$f]"].'</p><a href="../objects/objects_'.$tableInBd[1].'/materials/'.$viewRows["$arrayFileArticleDB[$f]"].'"><i class="fa fa-file" aria-hidden="true"></i></a></h3>';
    }
  }
  echo '
  <span class="author_art_tag art_elem">Комментарий:</span>
  <div class="comment_wrap">
  <div class="comment art_elem_main">'.$viewRows["comment"].'</div>
  <textarea class="comment_edit" name="comment_edit">'.$viewRows["comment"].'</textarea>
  <p class="edit_ok">Ok</p>
  <input type="submit" class="input_button_submit_edit" value="'.$viewRows["id"].'" placeholder="Автор"  name="editOk">
  <span class="edit_cancel">Cancel</span>
  </form>
  </div>
  <div class="time_wrap">
  <span class="art_elem_time">Дата:</span>
    <time class="art_time">'.substr($viewRows["date"],0,10).'</time></br>
  <span class="art_elem_time">Время:</span>
    <time class="art_time">'.substr($viewRows["date"],10,6).'</time>
  </div>
  </div>';
  session_start();
  if ($_SESSION['login_on'] == true) {
    echo'
  <span class="edit_article">edit</span>
  <span class="delete_article">delete</span>';
}
  echo '<div class="view_all"></div>';
  echo'
  </div>
  </div>';
                                                                                //Модальное окно для удаления
  echo '
  <div class="modal_display_delete">
  Delete this article?'.$viewRows["id"].'
  <form method="GET" action="view.php" class="del_form">
  <input type="submit" value="'.$viewRows["id"].'" class="input_del input_del_left" name="del_article">
  </form>
  <p class="del_answer">YES</p>
  <input type="submit" value="NO" class="input_del input_del_right">
  </div>';
}
}
?>
