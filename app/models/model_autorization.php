<?php
class Model_Autorization extends Model
{
  public function get_data()
  {
    if (empty($CONNECT)) {
      include_once('app/components/db.php');
      $CONNECT = Db::connect();
    }
    $objRoute = new Route;
    $controllerName = $objRoute::partUrl();

    if (isset($_POST['submit_login'])) {
      $loginAutoriz = $_POST['log_login'];
      $passAutoriz = $_POST['log_pass'];
      $loginAutoriz = stripslashes($loginAutoriz);
      $loginAutoriz = htmlspecialchars($loginAutoriz);
      $loginAutoriz = trim($loginAutoriz);
      $passAutoriz = stripslashes($passAutoriz);
      $passAutoriz = htmlspecialchars($passAutoriz);
      $passAutoriz = trim($passAutoriz);
      $special_symbols_main = '!$**_WehrmachtSpecialPass!**(and!($%';
      $special_symbols_add = 'htmlcssjsportfoliophppythonc/c++gamedev2D3modelingironother';
      $pass_record = hash('SHA256',$passAutoriz.$special_symbols_main.$special_symbols_add);
      $checkExistsUser = mysqli_query($CONNECT,"SELECT `login`,`pass` FROM `lib_users` WHERE `login` = '$loginAutoriz' AND `pass`='$pass_record' ");
      $numRowsCheckUser = mysqli_num_rows($checkExistsUser);
      if ($numRowsCheckUser != 0) {
        #echo '<div class="main">Вы успешно вошли!</div>';
        session_start();
        $_SESSION['login'] = $loginAutoriz;
        $_SESSION['login_on'] = 1;
        #echo ("<script type='text/javascript'>setTimeout(function(){document.location.href ='/';}, 1000);</script>");
      }else{
        #echo '<div class="main">Логин и/или пароль не совпадают!</div>';
      }
    }

    if (isset($_POST['exit_login'])) {
      session_start();
      $_SESSION['login'] = 0;
      $_SESSION['login_on'] = 0;
      session_destroy();
      header('Location: /');
    }



    $data = array('numRowsCheckUser' => $numRowsCheckUser,);
    return $data;
    #Autorization::dataLogin();
  }
}
?>
