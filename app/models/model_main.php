<?php
class Model_Main extends Model
{
  public function get_data()
	{
    $objRoute = new Route;
    $params = $objRoute::partUrl();
    $bigLibPrefix = $params['bigLibPrefix'];

    if (empty($CONNECT)) {
      include_once('app/components/db.php');
      $CONNECT = Db::connect();
    }
    $arrayOfArticles = array(0 => 'articles_it',1 => 'articles_space', 2 => 'articles_marketing',3 => 'articles_lists');
    $randomNumber = rand(0,3);
    $randomArticle = $arrayOfArticles[$randomNumber];
    $selectArticle = mysqli_query($CONNECT,"SELECT * FROM `$randomArticle` /*WHERE `section` = 'Quotations'*/ ORDER BY RAND() LIMIT 1");
    $numRows = mysqli_num_rows($selectArticle);                                     //Преобразование запроса для подсчёта статей, для вывода в цикле

    $arrayImageArticleDB = array(                                                   // Массив содержащий названия столба БД содержащего изобажение для вывода
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
      9 => 'file_ten'
    );
    $classWrap = [];
    for ($i=0; $i < $numRows; $i++) {

      $viewRows = mysqli_fetch_array($selectArticle);
      $arrayViewImg = [];
      $articleFiles=[];
      $imgPresent = false;
      $filePresent = false;
      for ($m=0; $m < 10; $m++) {
        if (!empty($viewRows["$arrayImageArticleDB[$m]"])) {
          array_push($arrayViewImg, $viewRows["$arrayImageArticleDB[$m]"]);
          $articleClass = count($arrayViewImg);
          $classWrap = $arrayImageArticleClass[$articleClass];
          $classNameImg = $arrayImageArticleCount[$articleClass];
          $imgPresent = true;
        }
      }
      for ($f=0; $f < 10; $f++) {                                                   //формирование файлов
        if (!empty($viewRows["$arrayFileArticleDB[$f]"])) {
          $filePresent = true;
          array_push($articleFiles, $viewRows["$arrayFileArticleDB[$f]"]);
        }
      }
      $id = $viewRows['id'];
      $name = $viewRows['name'];
      $link = $viewRows['link'];
      $author = $viewRows['author'];
      $comment = $viewRows['comment'];
      $files = $articleFiles;
      $img = $arrayViewImg;
      $classWrapImg = $classWrap;
      $classImg = $arrayImageArticleCount;
      $dateOne = substr($viewRows['date'],0,10);
      $dateTwo = substr($viewRows['date'],10,6);
      $data = array (
        'imgPresent' => $imgPresent,
        'classWrap' => $classWrap,
        'img' => $arrayViewImg,
        'classImg'=>$arrayImageArticleCount,
        'filePresent'=>$filePresent,
        'files'=>$articleFiles,
        'id'=> $viewRows['id'],
        'name'=> $viewRows['name'],
        'author'=>$viewRows['author'],
        'link'=>$viewRows['link'],
        'comment'=>$viewRows['comment'],
        'dateOne'=> $dateOne,
        'dateTwo'=> $dateTwo,
        'bigLibPrefix' => $bigLibPrefix,
        'randomArticle' => $randomArticle,
        'numRows' => $numRows
      );//main array
    }// For I
    return @$data;
	}//GET DATA
}//CLASS
