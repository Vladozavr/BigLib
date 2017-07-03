
<form action="../Registration" method="post" class="registration_form">
  <input type="text" name="login" value="" placeholder="Введите ваш логин">
  <input type="password" name="password" value="" placeholder="Введите ваш пароль">
  <input type="password" name="password_two" value="" placeholder="Подтвердите пароль">
  <input type="text" name="email_regist" value="" placeholder="Введите ваш e-mail">
  <input type="submit" name="regStart" value="Зарегестрироваться">
</form>

<?php


  if (isset($data['comparison'])) {
    echo $data['comparison'];
  }
  if (isset($data['notAll'])) {
    echo $data['notAll'];
  }
  if (isset($data['ext'])) {
    echo $data['ext'];
  }
  if (isset($data['regEnd'])) {
    echo $data['regEnd'];
  }
