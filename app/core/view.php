<?php
class View{
  function generate($contentView, $templateView, $data = null){
     $aut = new Model;
     $indexData = $aut->dataLogin();
     include 'app/views/body.php';#.$templateView;
    /*
		if(is_array($data)) {
			// преобразуем элементы массива в переменные
			extract($data);
		}
		*/
  }
}
/*
$contentFile — виды отображающие контент страниц;
$templateFile — общий для всех страниц шаблон;
$data — массив, содержащий элементы контента страницы. Обычно заполняется в модели.
*/
