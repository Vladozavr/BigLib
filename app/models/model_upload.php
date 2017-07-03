<?php
class Model_Upload extends Model
{
  public function get_data()
  {
    $objRoute = new Route;
    $params = $objRoute::partUrl();
    $bigLibPrefix = $params['bigLibPrefix'];
    $firstRout = $params['firstRout'];
    $secondRout = $params['secondRout'];
    $bigLibPrefixServer = $params['bigLibPrefixServer'];
    $routes = $params['routes'];
    if (empty($CONNECT)) {
      include_once('app/components/db.php');
      $CONNECT = Db::connect();
    }
    /*=============================================================================*/
    if (isset($_POST["upload_it"])) {
      $variableIndicateSection = $_POST['section_var'];
      if ($variableIndicateSection == 'articles_it') {
        $sectionIt = $_POST['section_it'];                                            // Выбор секции для БД
        $articleSection = 'articles_it';
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
    $sectionIt = $_POST['section_it'];                                            // Выбор секции для БД
    $articleSection = 'articles_marketing';
    switch ($sectionIt) {
      case '0':
        $sectionIt = 'Marketing';
        break;
      case '1':
        $sectionIt = 'Advertising';
        break;
    }
  }else if($variableIndicateSection == 'articles_space'){
    $sectionIt = $_POST['section_it'];                                            // Выбор секции для БД
    $articleSection = 'articles_space';
    switch ($sectionIt) {
      case '0':
        $sectionIt = 'Films_space';
        break;
      case '1':
        $sectionIt = 'Articles';
        break;
      case '2':
        $sectionIt = 'Other';
        break;
    }
  }else if($variableIndicateSection == 'articles_lists'){
    $sectionIt = $_POST['section_it'];                                            // Выбор секции для БД
    $articleSection = 'articles_lists';
    switch ($sectionIt) {
      case '0':
        $sectionIt = 'Films';
        break;
      case '1':
        $sectionIt = 'Literature';
        break;
      case '3':
        $sectionIt = 'Picture';
        break;
      case '4':
        $sectionIt = 'Painting';
        break;
    }
  };
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
  //$commentIt = strip_tags($commentIt,'<a><p><iframe>');                         // Экранирование тегов, кроме ссылок
  $commentIt = mysqli_real_escape_string($CONNECT,$commentIt);
  $commentItlength = mb_strlen($commentIt);
  if ($commentItlength > 21000) {
    $mesage = "Максимальное количество символов комментария 21 000. Запись не возможна. Количество символов = ".$commentItlength;
    $data = array('errUser' => true,'mesage' => $mesage );
    return $data;
    exit();
  }
  if (mb_strlen($nameIt) > 150) {
    $mesage = "Максимальное количество символов имени 150. Запись не возможна";
    echo mb_strlen($nameIt);
    $data = array('errUser' => true,'mesage' => $mesage );
    return $data;
    exit();
  }
  if (mb_strlen($authorIt) > 80) {
    $mesage = "Максимальное количество символов автора 80. Запись не возможна";
    $data = array('errUser' => true,'mesage' => $mesage );
    return $data;
    exit();
  }
  if (mb_strlen($linkIt) > 500) {
    $mesage = "Максимальное количество символов ссылки 500. Запись не возможна.";
    $data = array('errUser' => true,'mesage' => $mesage );
    return $data;
    exit();
  }
  $dateAddIt = date('Y-m-d, H:i');                                              // Выбор даты для БД

/*===загрузк изображения===*/
//ОСНОВНЫЕ ПЕРЕМЕННЫЕ
$pathUpdDirImageIt =  $_SERVER['DOCUMENT_ROOT'].$bigLibPrefixServer.'/objects/objects_'.$variableIndicateSection.'/images/';
$pathUpdDirFileIt =  $_SERVER['DOCUMENT_ROOT'].$bigLibPrefixServer.'/objects/objects_'.$variableIndicateSection.'/materials/';

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

//ИЗОБРАЖЕНИЯ
$blacklist = array("php", "phtml", "php3", "php4", "html", "htm");              // Чёрный список файлов
$typesFiles = array('.gif','jpg','png','jpeg','image/gif','gif');                                   // Допускаемые типы изображений
foreach ($_FILES['image_it']['error'] as $k => $v) {
  #if ($error == UPLOAD_ERR_OK) {                                                //?????????? Если код ошибки == 0, происходит загрузка
    $partsFileImage=explode(".", $_FILES['image_it']['name'][$k]);              // Имя изображения разбивается от точки
    $expansionImage = array_pop($partsFileImage);                               // Извлекается формат изображния
    /*if (!in_array($expansionImage,$typesFiles)) {                               //?????????? Если нет допустимых форматов файлов
      echo ("<div class='main'>Выбранный(ые) типы файлов не доступены для загрузки. Поддерживаемые типы файлов: jpg,png.</div>");
      echo $typesFiles[0];
      exit;
    }else */if (in_array($expansionImage,$blacklist)){                            //?????????? Если присутствуют файлы из чёрного списка
      $mesage = "Присутствует, вероятно, вредоносный файл";
      $data = array('errUser' => true,'mesage' => $mesage );
      return $data;
      exit;
    }else{
      if (empty($_FILES['image_it']['name'][$k])) {                             ////?????????? Если значение не установленно, значение переменной снимается
        unset($_FILES['image_it']['name'][$k]);
      }
      /*$sqlExistCheck = mysqli_query($CONNECT,"SELECT `$arrayImageArticleDB[$k]` FROM `$variableIndicateSection`
        WHERE `img_one` = '".$_FILES['image_it']['name'][$k]."' OR `img_two` = '".$_FILES['image_it']['name'][$k]."' OR `img_three` = '".$_FILES['image_it']['name'][$k]."' OR
      `img_four` = '".$_FILES['image_it']['name'][$k]."' OR `img_five` = '".$_FILES['image_it']['name'][$k]."' OR `img_six` = '".$_FILES['image_it']['name'][$k]."' OR `img_seven` = '".$_FILES['image_it']['name'][$k]."' OR
      `img_eight` = '".$_FILES['image_it']['name'][$k]."' OR `img_nine` = '".$_FILES['image_it']['name'][$k]."' OR `img_ten` = '".$_FILES['image_it']['name'][$k]."'");*/
/*
      $sqlExistCheck = mysqli_query($CONNECT,"SELECT * FROM `$variableIndicateSection` WHERE `$arrayImageArticleDB[$k]` NOT LIKE '".$_FILES['image_it']['name'][$k]."'");
      $rd = mysqli_num_rows($sqlExistCheck);
      if ($rd > 0) {
        echo "<div class='main'>Один из загружаемых файлов уже есть на сервере!".$rd." Переименуйте его, и повторите попытку.</div>";
        exit;
      }*/
        @$fileToCheckExists = $_SERVER['DOCUMENT_ROOT']."/objects/objects_".$variableIndicateSection."/images/".$_FILES['image_it']['name'][$k]."";
      if (file_exists($fileToCheckExists) AND !empty($_FILES['image_it']['name'][$k])) {
        $mesage = 'Один из загружаемых файлов уже есть на сервере! Переименуйте его, и повторите попытку';
        $data = array('errUser' => true,'mesage' => $mesage );
        return $data;
        exit;
      }

      @$uploadImageItState = move_uploaded_file($_FILES['image_it']['tmp_name'][$k], $pathUpdDirImageIt.$_FILES['image_it']['name'][$k]);//Загрузка изображения
      if ($uploadImageItState) {
        #echo ("<div class='main' style='text-align:center;'>Файл: <b>".$_FILES['image_it']['name'][$k]."</b> отправлен!<br><br><img style='width:100px;' src='".$pathUpdDirImageIt.$_FILES['image_it']['name'][$k]."'></div>");
      }else if($_FILES['file_it']['error'][$k] != UPLOAD_ERR_NO_FILE){
        $mesage = $_FILES['image_it']['error'][$k];
      }
    }
  #}
}


                                                                                //ФАЙЛЫ
foreach ($_FILES['file_it']['error'] as $k => $v) {
  #if ($error == UPLOAD_ERR_OK) {
    $partsFile=explode(".", $_FILES['file_it']['name'][$k]);
    $expansionFile = array_pop($partsFile);
    if (in_array($expansionFile,$blacklist)){
      $mesage = "Присутствует, вероятно, вредоносный файл";
      $data = array('errUser' => true,'mesage' => $mesage );
      return $data;
      exit;
    }else {
      $fileToCheck =  $_SERVER['DOCUMENT_ROOT']."/objects/objects_".$variableIndicateSection."/materials/".$_FILES['file_it']['name'][$k]."";
      if (file_exists($fileToCheck) AND !empty($_FILES['file_it']['name'][$k])) {
        $mesage = 'Один из загружаемых файлов уже есть на сервере! Переименуйте его, и повторите попытку.';
        $data = array('errUser' => true,'mesage' => $mesage );
        return $data;
        exit;
      }
      $uploadFileItState = move_uploaded_file($_FILES['file_it']['tmp_name'][$k], $pathUpdDirFileIt.$_FILES['file_it']['name'][$k]);
      if ($uploadFileItState ) {
        #echo ("<div class='main' style='text-align:center;'>Файл: <b>".$_FILES['file_it']['name'][$k]."</b> отправлен!</div>");
      }else if($_FILES['file_it']['error'][$k] != UPLOAD_ERR_NO_FILE){
        $mesage = $_FILES['file_it']['error'][$k];
      }
    }
  #}
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
`comment`
) VALUES ('".$dateAddIt."',
'".$sectionIt."',
'".$articleSection."',
'".$nameIt."',
'".$authorIt."',
'".$materialIt."',
'".$linkIt."',
'".@$_FILES['image_it']['name'][0]."',
'".@$_FILES['image_it']['name'][1]."',
'".@$_FILES['image_it']['name'][2]."',
'".@$_FILES['image_it']['name'][3]."',
'".@$_FILES['image_it']['name'][4]."',
'".@$_FILES['image_it']['name'][5]."',
'".@$_FILES['image_it']['name'][6]."',
'".@$_FILES['image_it']['name'][7]."',
'".@$_FILES['image_it']['name'][8]."',
'".@$_FILES['image_it']['name'][9]."',
'".@$_FILES['file_it']['name'][0]."',
'".@$_FILES['file_it']['name'][1]."',
'".@$_FILES['file_it']['name'][2]."',
'".@$_FILES['file_it']['name'][3]."',
'".@$_FILES['file_it']['name'][4]."',
'".@$_FILES['file_it']['name'][5]."',
'".@$_FILES['file_it']['name'][6]."',
'".@$_FILES['file_it']['name'][7]."',
'".@$_FILES['file_it']['name'][8]."',
'".@$_FILES['file_it']['name'][9]."',
'".$commentIt."')");

  if ($recordToDB) {
    $data = array(
      'articleUpload' => true,
      'name' => $nameIt,
      'variableIndicateSection' => $variableIndicateSection,
      'sectionIt' => $sectionIt,
      'mesage'=>$mesage,
    );
  }else{
    $mysqliError = mysqli_error($CONNECT);
    $mysqliErrno = mysqli_errno($CONNECT);
    $data = array(
      'articleUpload' => false,
      'mysqliError' => $mysqliError,
      'mysqliErrno' => $mysqliErrno,
      'mesage' => $mesage
    );
  }
  return $data;
}
}//getData
}//class

 ?>
