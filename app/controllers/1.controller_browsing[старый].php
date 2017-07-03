<?php

include_once('app/models/model_browsing.php');

                                                                                //количество статей на страницу
$arrayOfIdForDelete=[];
$startPage = ($currentPage-1)*$onPage;                                          //значение для распознавания в запросе, с какой страницы выводить

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

outputArticles($tableInBd[1],$tableInBd[2]);
include_once('app/views/view_browsing.php');
?>
