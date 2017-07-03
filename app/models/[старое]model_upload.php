<?php

function createOptions($arrayElemTableAdd){
  if ($arrayElemTableAdd == 'articles_it') {
    $option = '<option value="0">HTML&amp;CSS</option>
    <option value="1">JavaScript</option>
    <option value="2">Portfolio</option>
    <option value="3">PHP</option>qqa
    <option value="4">CMS</option>
    <option value="5">Python</option>
    <option value="6">C/C++</option>
    <option value="7">GameDev</option>
    <option value="8">2D/3D modeling</option>
    <option value="9">HardWare</option>
    <option value="10">Neural networks</option>
    <option value="11">Cryptography</option>
    <option value="12">Other</option>
  ';
  }
  if ($arrayElemTableAdd == 'articles_marketing') {
    $option ='
    <option value="0">Marketing</option>
    <option value="1">Advertising</option>
    <option value="2">Finance</option>
    <option value="3">Sociology</option>
    ';
  }
  if ($arrayElemTableAdd == 'articles_space') {
    $option = '
    <option value="0">KSP</option>
    <option value="1">Space Engineers</option>
    <option value="2">Space Enigine</option>
    <option value="3">Films</option>
    <option value="4">Articles</option>
    <option value="5">Sience</option>
    <option value="6">Other</option>
    ';
  }

  if ($arrayElemTableAdd == 'articles_lists') {
    $option = '
    <option value="0">Films</option>
    <option value="1">Anime</option>
    <option value="2">Literature</option>
    <option value="3">Picture</option>
    <option value="4">History</option>
    <option value="5">Painting</option>
    <option value="6">Games</option>
    <option value="7">Quotations</option>
    <option value="8">Advice</option>
    <option value="9">Reich</option>
    <option value="10">Other</option>';
  }
  return $option;
}

function uploadArticle(){                                                       /*UPLOAD*/
  global $CONNECT;
  $variableIndicateSection = $_POST['upload_it'];
  $sectionIt = $_POST['section_it'];
  if ($variableIndicateSection == 'articles_it') {                              // Выбор секции для БД
    switch ($sectionIt) {
      case '0':
        $sectionIt = 'htmlAndCss';
        break;
      case '1':
        $sectionIt = 'JS';
        break;
      case '2':
        $sectionIt = 'Portfolio';
        break;
      case '3':
        $sectionIt = 'PHP';
        break;
      case '4':
        $sectionIt = 'CMS';
        break;
      case '5':
        $sectionIt = 'Python';
        break;
      case '6':
        $sectionIt = 'CAndC++';
        break;
      case '7':
        $sectionIt = 'GameDev';
        break;
      case '8':
        $sectionIt = '2Dand3Dmodeling';
        break;
      case '9':
        $sectionIt = 'Hardware';
        break;
      case '10':
        $sectionIt = 'NeuralNetworks';
        break;
      case '11':
        $sectionIt = 'Cryptography';
        break;
      case '12':
        $sectionIt = 'Other_it';
        break;
    }
  }else if($variableIndicateSection == 'articles_marketing'){
    switch ($sectionIt) {
      case '0':
        $sectionIt = 'Marketing';
        break;
      case '1':
        $sectionIt = 'Advertising';
        break;
      case '2':
        $sectionIt = 'Finance';
        break;
      case '3':
        $sectionIt = 'Sociology';
        break;
    }
  }else if($variableIndicateSection == 'articles_space'){
    switch ($sectionIt) {
      case '0':
        $sectionIt = 'KSP';
        break;
      case '1':
        $sectionIt = 'Space_Engineers';
        break;
      case '2':
        $sectionIt = 'Space_Enigine';
        break;
      case '3':
        $sectionIt = 'Films_space';
        break;
      case '4':
        $sectionIt = 'Articles';
        break;
      case '5':
        $sectionIt = 'Sience';
        break;
      case '6':
        $sectionIt = 'Other';
        break;
    }
  }else if($variableIndicateSection == 'articles_lists'){
    switch ($sectionIt) {
      case '0':
        $sectionIt = 'Films';
        break;
      case '1':
        $sectionIt = 'Anime';
        break;
      case '2':
        $sectionIt = 'Literature';
        break;
      case '3':
        $sectionIt = 'Picture';
        break;
      case '4':
        $sectionIt = 'History';
        break;
      case '5':
        $sectionIt = 'Painting';
        break;
      case '6':
        $sectionIt = 'Games';
        break;
      case '7':
        $sectionIt = 'Quotations';
        break;
      case '8':
        $sectionIt = 'Advice';
        break;
      case '9':
        $sectionIt = 'Reich';
        break;
      case '10':
        $sectionIt = 'Other';
        break;
    }
  }
  /*_____________________________________________________________________________________________________*/
  $nameIt = $_POST['name_it'];                                                  // Выбор названия для БД
  $authorIt = $_POST['author_it'];                                              // Выбор автора для БД
  $materialIt = $_POST['material_it'];                                          // Выбор материала для БД
  switch ($materialIt) {
    case '0':
      $materialIt = 'Книга';
      break;
    case '1':
      $materialIt = 'Статья';
      break;
    case '2':
      $materialIt = 'Видео';
      break;
    case '3':
      $materialIt = 'Другое';
      break;
  }
  $linkIt = $_POST['link_it'];                                                  // Выбор ссылки для БД
  $commentIt = $_POST['comment_it'];                                            // Выбор комментария для БД
  //$commentIt = strip_tags($commentIt,'<a><p><iframe>');                       // Экранирование тегов, кроме ссылок
  $commentIt = mysqli_real_escape_string($CONNECT,$commentIt);
  $commentItlength = mb_strlen($commentIt);
  if ($commentItlength > 21000) {
    echo "<div class='main'>Максимальное количество символов комментария 21 000. Запись не возможна</div>";
    echo "Количество символов = ".$commentItlength;
    exit();
  }
  if (mb_strlen($nameIt) > 150) {
    echo "<div class='main' style='text-align:center;'>Максимальное количество символов имени 150. Запись не возможна</div>";
    echo mb_strlen($nameIt);
    exit();
  }
  if (mb_strlen($authorIt) > 80) {
    echo "<div class='main' style='text-align:center;'>Максимальное количество символов автора 80. Запись не возможна</div>";
    exit();
  }
  if (mb_strlen($linkIt) > 500) {
    echo "<div class='main' style='text-align:center;'>Максимальное количество символов ссылки 500. Запись не возможна</div>";
    exit();
  }
  $dateAddIt = date('Y-m-d, H:i');                                              // Выбор даты для БД

/*===загрузк изображения===*/
//ОСНОВНЫЕ ПЕРЕМЕННЫЕ
$pathUpdDirImageIt = './objects/objects_'.$variableIndicateSection.'/images/';
$pathUpdDirFileIt = './objects/objects_'.$variableIndicateSection.'/materials/';

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


  $blacklist = array("php", "phtml", "php3", "php4", "html", "htm","sql");      // Чёрный список файлов
  foreach ($_FILES['image_it']['error'] as $k => $v) {                          //ИЗОБРАЖЕНИЯ
    if ($error == UPLOAD_ERR_OK) {                                              //?????????? Если код ошибки == 0, происходит загрузка
      $partsFileImage = explode(".", $_FILES['image_it']['name'][$k]);          // Имя изображения разбивается от точки
      $expansionImage = array_pop($partsFileImage);                             // Извлекается формат изображния
      if (in_array($expansionImage,$blacklist)){                                //?????????? Если присутствуют файлы из чёрного списка
        echo ("<div class='main'>Присутствует, вероятно, вредоносный файл</div>");
        exit;
      }
      $fileToCheckExists = "./objects/objects_".$variableIndicateSection."/images/".$_FILES['image_it']['name'][$k]."";
      if (file_exists($fileToCheckExists) AND !empty($_FILES['image_it']['name'][$k])) {
        echo "<div class='main'>Один из загружаемых файлов уже есть на сервере! Переименуйте его, и повторите попытку.</div>";
        exit;
      }
      $uploadImageItState = move_uploaded_file($_FILES['image_it']['tmp_name'][$k], $pathUpdDirImageIt.$_FILES['image_it']['name'][$k]);
      if($_FILES['file_it']['error'][$k] != UPLOAD_ERR_NO_FILE){
        echo  $_FILES['image_it']['error'][$k];
      }
    }
  }



  foreach ($_FILES['file_it']['error'] as $k => $v) {                           //ФАЙЛЫ
    if ($error == UPLOAD_ERR_OK) {
      $partsFile=explode(".", $_FILES['file_it']['name'][$k]);
      $expansionFile = array_pop($partsFile);
      if (in_array($expansionFile,$blacklist)){
        echo ("<div class='main'>Присутствует, вероятно, вредоносный файл</div>");
        exit;
      }
      $fileToCheck = "objects/objects_".$variableIndicateSection."/materials/".$_FILES['file_it']['name'][$k]."";
      if (file_exists($fileToCheck) AND !empty($_FILES['file_it']['name'][$k])) {
        echo "<div class='main'>Один из загружаемых файлов уже есть на сервере! Переименуйте его, и повторите попытку.</div>";
        exit;
      }
      $uploadFileItState = move_uploaded_file($_FILES['file_it']['tmp_name'][$k], $pathUpdDirFileIt.$_FILES['file_it']['name'][$k]);
      if($_FILES['file_it']['error'][$k] != UPLOAD_ERR_NO_FILE){
          echo  $_FILES['file_it']['error'][$k];
        }
      }
    }

  $recordToDB = mysqli_query($CONNECT,"INSERT INTO `$variableIndicateSection`(
  `date`,
  `section`,
  `article`,
  `name`,
  `author`,
  `material`,
  `link`,
  `img_one`,
  `img_two`,
  `img_three`,
  `img_four`,
  `img_five`,
  `img_six`,
  `img_seven`,
  `img_eight`,
  `img_nine`,
  `img_ten`,
  `file_one`,
  `file_two`,
  `file_three`,
  `file_four`,
  `file_five`,
  `file_six`,
  `file_seven`,
  `file_eight`,
  `file_nine`,
  `file_ten`,
  `comment`) VALUES (
  '".$dateAddIt."',
  '".$sectionIt."',
  '".$articleSection."',
  '".$nameIt."',
  '".$authorIt."',
  '".$materialIt."',
  '".$linkIt."',
  '".$_FILES['image_it']['name'][0]."',
  '".$_FILES['image_it']['name'][1]."',
  '".$_FILES['image_it']['name'][2]."',
  '".$_FILES['image_it']['name'][3]."',
  '".$_FILES['image_it']['name'][4]."',
  '".$_FILES['image_it']['name'][5]."',
  '".$_FILES['image_it']['name'][6]."',
  '".$_FILES['image_it']['name'][7]."',
  '".$_FILES['image_it']['name'][8]."',
  '".$_FILES['image_it']['name'][9]."',
  '".$_FILES['file_it']['name'][0]."',
  '".$_FILES['file_it']['name'][1]."',
  '".$_FILES['file_it']['name'][2]."',
  '".$_FILES['file_it']['name'][3]."',
  '".$_FILES['file_it']['name'][4]."',
  '".$_FILES['file_it']['name'][5]."',
  '".$_FILES['file_it']['name'][6]."',
  '".$_FILES['file_it']['name'][7]."',
  '".$_FILES['file_it']['name'][8]."',
  '".$_FILES['file_it']['name'][9]."',
  '".$commentIt."')");

  if ($recordToDB) {
    echo '<div class="main" style="text-align:center;">Статья - <b>'.$nameIt.'</b>, успешно добавлена!<br><br><a href="http://localhost/'.$variableIndicateSection.'/'.$sectionIt.'">Перейти</a><br><br><a href="http://localhost/addArticles/'.$variableIndicateSection.'">Добавить ещё</a></div>';
  }else{
    echo "Произошла ошибка:</br>";
    echo mysqli_error($CONNECT)."</br>";
    echo mysqli_errno($CONNECT);
  }
}/*FUNCTION*/
?>
