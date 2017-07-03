<?php
class Model_AddArticles extends Model
{
  public function get_data()
  {
    /*=============================================================================*/
    $objRoute = new Route;
    $params  = $objRoute::partUrl();
    $bigLibPrefix = $params['bigLibPrefix'];
    $firstRout = $params['firstRout'];
    $secondRout = $params['secondRout'];
    $bigLibPrefixServer = $params['bigLibPrefixServer'];
    $routes = $params['routes'];
    /*=============================================================================*/
    if ($routes[$secondRout] == 'articles_it') {
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
    if ($routes[$secondRout] == 'articles_marketing') {
      $option ='
      <option value="0">Marketing</option>
      <option value="1">Advertising</option>
      ';
    }
    if ($routes[$secondRout] == 'articles_space') {
      $option = '
      <option value="0">Films</option>
      <option value="1">Articles</option>
      <option value="2">Other</option>
      ';
    }

    if ($routes[$secondRout] == 'articles_lists') {
      $option = '
      <option value="0">Films</option>
      <option value="1">Literature</option>
      <option value="2">Picture</option>
      <option value="3">Painting</option>';
    }



     $data = array (
      'option' => $option,
      'arrayElemTableAdd'=>$routes[$secondRout]
    );

  return $data;
  }//GET DATA
}
?>
