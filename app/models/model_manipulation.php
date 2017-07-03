<?php
class Model_Manipulation extends Model
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
    $arrayImageArticleDB = array(
      0 => 'img_one',
      1 => 'img_two',
      2 => 'img_three',
      3 => 'img_four',
      4 => 'img_five',
      5 => 'img_six',
      6 => 'img_seven',
      7 => 'img_eight',
      8 => 'img_nine',
      9 => 'img_ten'
    );
    $arrayFileArticleDB = array(
      0 => 'file_one',
      1 => 'file_two',
      2 => 'file_three',
      3 => 'file_four',
      4 => 'file_five',
      5 => 'file_six',
      6 => 'file_seven',
      7 => 'file_eight',
      8 => 'file_nine',
      9=> 'file_ten'
    );
    /*=============================================================================*/
    if(isset($_POST['del_article'])){                                                //Удаление статьи
      $section = $_POST['section_del'];
      $idDelete =  $_POST['del_article'];                                       // TODO: mysql_escape_string
      $idDelete = (int)$idDelete;
      $queryDeleteImage = mysqli_query($CONNECT, "SELECT * FROM `$section` WHERE `id` = '$idDelete'");
      $numRowsDelete = mysqli_num_rows($queryDeleteImage);
      for ($i=0; $i < $numRowsDelete; $i++) {
        $arrayImg = [];
        $arrayFile = [];
        $queryDeleteImageResult = mysqli_fetch_array($queryDeleteImage);
          for ($j=0; $j < 10; $j++) {
            array_push($arrayImg,$queryDeleteImageResult["$arrayImageArticleDB[$j]"]);
            $deleteImage = $queryDeleteImageResult["$arrayImageArticleDB[$j]"];
            if (!empty($deleteImage)) {
              unlink($_SERVER['DOCUMENT_ROOT'].$bigLibPrefixServer.'/objects/objects_'.$section.'/images/'.$deleteImage);
            }
            array_push($arrayFile,$queryDeleteImageResult["$arrayFileArticleDB[$j]"]);
            $deleteFile = $queryDeleteImageResult["$arrayFileArticleDB[$j]"];
            if (!empty($deleteFile)) {
              unlink($_SERVER['DOCUMENT_ROOT'].$bigLibPrefixServer.'/objects/objects_'.$section.'/materials/'.$deleteFile);
            }
        }//For J
      }//For I
        $queryDelete = mysqli_query($CONNECT,"DELETE FROM `$section` WHERE `id` = '$idDelete'");
        if ($queryDelete) {
          header("Location: ".$_SERVER['HTTP_REFERER']);
        }else{
          $mysqliError = mysqli_error($CONNECT);
          $mysqliErrno = mysqli_errno($CONNECT);
          $data = array(
            'articleUpload' => false,
            'mysqliError' => $mysqliError,
            'mysqliErrno' => $mysqliErrno,
          );
        }
      }//if ISSET

    /*Elit*/
    if (isset($_POST['editOk'])) {                                                  //Редактирование статьи
      $idEdit = $_POST['editOk'];
      $section = $_POST['section_del'];
      if (!empty($_POST['name_edit'])) {
        $newName = $_POST['name_edit'];
      }/*else if(!empty($viewRows["name"])){
        $newName = $viewRows["name"];
      }*/
      if (!empty($_POST['author_edit'])) {
        $newAuthor = $_POST['author_edit'];
      }/*else if(!empty($viewRows["author"])){
        $newAuthor = $viewRows["author"];
      }*/
      if (!empty($_POST['link_edit'])) {
        $newLink = $_POST['link_edit'];
      }/*else if(!empty($viewRows["link"])){
        $newLink = $viewRows["link"];
      }*/
      if (!empty($_POST['comment_edit'])) {
        $newComment = $_POST['comment_edit'];
      }/*else if(!empty($viewRows["comment"])){
        $newComment = $viewRows["comment"];
      }*/
    //ELSE вставка старого значения

      $queryEdit = mysqli_query($CONNECT,"UPDATE `$section` SET `name` = '$newName',`author`='$newAuthor',`link`='$newLink',`comment`='$newComment' WHERE `id` = '$idEdit'");
      if ($queryEdit) {
        header("Location: ".$_SERVER['HTTP_REFERER']);
      }else{
        $mysqliError = mysqli_error($CONNECT);
        $mysqliErrno = mysqli_errno($CONNECT);
        $data = array(
          'articleUpload' => false,
          'mysqliError' => $mysqliError,
          'mysqliErrno' => $mysqliErrno,
        );
      }
    }
    return $data;


  }//GET DATA
}
?>
