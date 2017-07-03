<?php
class Route
{
  public function partUrl(){
    $routes = explode('/',$_SERVER['REQUEST_URI']);

    if ($routes[1] == 'biglib') {
      $firstRout = 2;
      $secondRout = 3;
      $bigLibPrefix = "/biglib";
      $bigLibPrefixServer = "biglib/";
    }else{
      $firstRout = 1;
      $secondRout = 2;
      $bigLibPrefix ="";
      $bigLibPrefixServer = "";
    }
    $params = array(
      'routes' => $routes,
      'firstRout' => $firstRout,
      'secondRout'=> $secondRout,
      'bigLibPrefix'=>$bigLibPrefix,
      'bigLibPrefixServer'=>$bigLibPrefixServer,
    );
    return $params;
  }
  static function start()
  {
    // контроллер и действие по умолчанию
    $controllerName = 'Main';
    $actionName = 'index';


    $params = self::partUrl();
    $routes = $params['routes'];
    $firstRout =  $params['firstRout'];
    $secondRout = $params['secondRout'];

    if (!empty($routes[$firstRout])) {
      $controllerName = $routes[$firstRout];
    }
    if (!empty($routes[$secondRout])) {
      $actionName = $controllerName;
    }

    if ($controllerName == 'articles_it' or $controllerName == 'articles_space' or $controllerName == 'articles_lists' or $controllerName == 'articles_marketing' or $controllerName == 'articles_blogs') {
      $controllerName = 'articles_all';
      $articleUsed = $routes[$firstRout];
    }
    if ($actionName == 'articles_it' or $actionName == 'articles_space' or $actionName == 'articles_lists' or $actionName == 'articles_marketing' or $actionName == 'articles_blogs') {
      $actionName = 'articles_all';
      $articleUsed = $routes[$secondRout];
    }

    $modelName = 'Model_'.$controllerName;
    $controllerName = 'Controller_'.$controllerName;
    $actionName = 'action_'.$actionName;

    $modelFile = $modelName.'.php';                                             //Файл модели
    $modelPath = $_SERVER['DOCUMENT_ROOT'].$params['bigLibPrefixServer']."/app/models/".$modelFile;                                      //Путь к модели

    if (file_exists($modelPath)) {
      include $_SERVER['DOCUMENT_ROOT'].$params['bigLibPrefixServer']."/app/models/".$modelFile;
    }

  $controllerFile = $controllerName.'.php';
	$controllerPath = $_SERVER['DOCUMENT_ROOT'].$params['bigLibPrefixServer']."/app/controllers/".$controllerFile;

    if(file_exists($controllerPath)){
			include $controllerPath;
		}
    $controller = new $controllerName;

		if(method_exists($controller, $actionName)){
      // вызываем действие контроллера
			$controller->$actionName();
		}
	}//Старт
}                                                                             //start()
