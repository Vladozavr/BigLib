<?php
class Model_Search extends Model
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

    /*=============================================================================*/




    if (isset($_POST['searchQuery'])) {
      $refSearch = $_SERVER['HTTP_REFERER'];                                      // предыдущая страница, откуда пришёл запрос
      $refSearch = explode('/',$refSearch);                                       // разбиение для указания таблицы БД для поиска
      $searchName = $_POST['searchQuery'];
      $searchBy = $_POST['search_by'];

      if ($_POST['articleSelect'] == 'All') {
        $selectArticle = mysqli_query($CONNECT,
        "SELECT * FROM `articles_it` WHERE (`$searchBy` LIKE '%$searchName%')UNION
        SELECT * FROM `articles_lists` WHERE (`$searchBy` LIKE '%$searchName%') UNION
        SELECT * FROM `articles_marketing` WHERE (`$searchBy` LIKE '%$searchName%') UNION
        SELECT * FROM `articles_space` WHERE (`$searchBy` LIKE '%$searchName%')");
      }else{
        $searcArticle = $_POST['articleSelect'];
        $selectArticle = mysqli_query($CONNECT,"SELECT * FROM `$searcArticle` WHERE `$searchBy` LIKE '%$searchName%'");
      }
      $numRows = mysqli_num_rows($selectArticle);
    }

    $onPage = 10;                                                                   //количество статей на страницу
    @$quanityRows = mysqli_query($CONNECT,"SELECT count(*) FROM `$searcArticle` WHERE `section` = '$routes[$secondRout]'");//Подсчёт кол-ва записей
  @  $countArticles = mysqli_fetch_row($quanityRows);
    $totalPages = ceil($countArticles[0]/$onPage);                                  //Общее количество страниц
    if (isset($_POST['page'])) {
      $currentPage = ($_POST['page']);
    }else{
      $currentPage = 1;
    }
    $startPage = ($currentPage-1)*$onPage;
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

    for ($i=0; $i < $numRows; $i++) {
      $viewRows = mysqli_fetch_array($selectArticle);
      $arrayViewImg = [];
      $articleFiles=[];
      $d=[];
      $imgPresent = false;
      $filePresent = false;
      for ($m=1; $m < 11; $m++) {
        if (!empty($viewRows["$arrayImageArticleDB[$m]"])) {
          array_push($arrayViewImg, $viewRows["$arrayImageArticleDB[$m]"]);
          $articleClass = count($arrayViewImg);
          $classWrap = $arrayImageArticleClass[$articleClass];
          $classNameImg = $arrayImageArticleCount[$articleClass];
          $imgPresent = true;
        }
      }
      for ($f=1; $f < 11; $f++) {
        if (!empty($viewRows["$arrayFileArticleDB[$f]"])) {
          $filePresent = true;
          array_push($articleFiles, $viewRows["$arrayFileArticleDB[$f]"]);
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
  $section[$i] = $viewRows['article'];
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
   'section'=>$section,
 ); //main array
  }//For I




  return @$data;
  //GET DATA
}
}
?>
