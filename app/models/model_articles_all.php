<?php
class Model_Articles_All extends Model
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
      include_once($_SERVER['DOCUMENT_ROOT'].$bigLibPrefixServer.'/app/components/db.php');
      $CONNECT = Db::connect();
    }
    /*=============================================================================*/
    /*=============================================================================*/
    $onPage = 10;                                                                   //количество статей на страницу
    $quanityRows = mysqli_query($CONNECT,"SELECT count(*) FROM `$routes[$firstRout]` WHERE `section` = '$routes[$secondRout]'");//Подсчёт кол-ва записей
    $countArticles = mysqli_fetch_row($quanityRows);
    $totalPages = ceil($countArticles[0]/$onPage);                                  //Общее количество страниц
    if (isset($_POST['page'])) {
      $currentPage = ($_POST['page']);
    }else{
      $currentPage = 1;
    }
    $startPage = ($currentPage-1)*$onPage;

    $selectArticle = mysqli_query($CONNECT,"SELECT * FROM `$routes[$firstRout]` WHERE `section` = '$routes[$secondRout]' ORDER BY `id` DESC LIMIT $startPage,$onPage");
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
    $classWrapImg = [];
    $img = [];
    $classImg = [];
    $files = [];
    $id = [];
    $name = [];
    $author = [];
    $link = [];
    $comment = [];
    $dateOne = [];
    $dateTwo = [];
    $classWrap = [];
    for ($i=0; $i < $numRows; $i++) {
      $viewRows = mysqli_fetch_array($selectArticle);
      $arrayViewImg = [];
      $articleFiles=[];
      $d=[];
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
          #$articleFiles = $viewRows["$arrayFileArticleDB[$f]"];
        }
      }

$id[$i] = $viewRows['id'];
$name[$i] = $viewRows['name'];
$link[$i] = $viewRows['link'];
$author[$i] = $viewRows['author'];
$comment[$i] = $viewRows['comment'];
$dateOne[$i]= substr($viewRows['date'],0,10);
$dateTwo[$i] = substr($viewRows['date'],10,6);
$files[$i] = $articleFiles;
$img[$i] = $arrayViewImg;
$classWrapImg[$i] = $classWrap;
$classImg[$i] = $arrayImageArticleCount;
}//For I


     $data = array (
      'classWrap' => $classWrapImg,
      'img' => $img,
      'classImg'=>$classImg,
      'files'=>$files,
      'id'=> $id,
      'name'=> $name,
      'author'=>$author,
      'link'=>$link,
      'comment'=>$comment,
      'dateOne'=> $dateOne,
      'dateTwo'=> $dateTwo,
      'totalPages'=>$totalPages,
      'currentPage' => $currentPage,
      'startPage' => $startPage,
      'numRows' => $numRows,
	    'section'=>$routes[$firstRout],
    ); //main array

return $data;
	}//GET DATA
}
