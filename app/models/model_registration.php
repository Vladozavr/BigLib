<?php
class Model_Registration extends Model
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
    if (isset($_POST['regStart'])) {
    $registrationStart = true;
    $data = array('registrationStart'=>$registrationStart);
    if (isset($_POST['login']))
    {
      $login = $_POST['login'];
        if ($login == '')
        {
          unset($login);
        }
      }
//ПАРОЛЬ
    if (isset($_POST['password']))
    {
      $password=$_POST['password'];
        if ($password =='')
        {
          unset($password);
        }
      }
      if (isset($_POST['password_two']))
      {
        $passwordTwo = $_POST['password_two'];
        if ($passwordTwo == '')
        {
          unset($password_two);
        }
      }
      if ($password != $passwordTwo) {
        $comparison = 'Пароли не совпадают!';
        $data = array('comparison' => $comparison);
        return $data;

      }
//E-Mail
      if (isset($_POST['email_regist']))
      {
        $email=$_POST['email_regist'];
          if ($email == '') {
            unset($email);
          }
      }
//ПРОВЕРКА

 if (empty($login) or empty($password))
    {
    $notAll = 'Вы ввели не всю информацию!';
    $data = array('notAll' => $notAll);
    return $data;
    }

//ОБРАБОТКА
    $login = stripslashes($login);
    $login = htmlspecialchars($login);
    $password = stripslashes($password);
    $password = htmlspecialchars($password);
    $email = stripslashes($email);
    $email = htmlspecialchars($email);

    $login = trim($login);
    $password = trim($password);
    $email = trim($email);




    $resultRegist = mysqli_query($CONNECT,"SELECT `login`,`email` FROM `lib_users` WHERE `login`='$login' OR `email`='$email'");
    @$numRegist = mysqli_num_rows($resultRegist);
    if (!$numRegist == 0)
    {
      $ext = 'Извините, введённый вами логин или E-mail уже зарегистрирован. Введите другой логин/e-mail.';
      $data = array('ext' => $ext);
      return $data;
    }
    else
    {
// СОХРАНЕНИЕ ДАННЫХ

//"создание" пароля
    $special_symbols_main = '!$**_WehrmachtSpecialPass!**(and!($%';
    $special_symbols_add = 'htmlcssjsportfoliophppythonc/c++gamedev2D3modelingironother';
  /*function generate_special_hash(){
      $special_symbols_add = '';
      $length_special_symbols_add = rand(5,10);
      for ($i=0; $i < $length_special_symbols_add; $i++) {
        $special_symbols_add = chr(rand(33,126));
      }
      return $special_symbols_add;
    }*/
    $pass_record = hash('SHA256',$password.$special_symbols_main.$special_symbols_add);


    $save_user = mysqli_query ($CONNECT,"INSERT INTO `lib_users` (`login`,`pass`,`email`) VALUES('$login','$pass_record','$email')");
    if ($save_user)
    {
    $regEnd = 'Вы успешно зарегистрированы! Теперь можно авторизироваться.';
    $data = array('regEnd' => $regEnd);
      return $data;
    //echo ("<script type='text/javascript'>setTimeout(function(){document.location.href ='/';}, 3000);</script>");
    }
 else
    {
    echo "<div class='main'>Ошибка сервера, приносим извенения за неудобства.</div>";
    }
    }

    }
/*
    return $data = array(
      'comparison' => $comparison,
      'notAll' => $notAll,
      'ext' => $ext,
      'regEnd' => $regEnd
  );*/


}
}
