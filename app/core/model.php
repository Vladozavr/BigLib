<?php
class Model{
  public function getData(){

  }
  public function dataLogin(){
    @session_start();
  if (isset($_SESSION['login_on']) /*!= 0*/){
        $userName = $_SESSION['login'];
        $timeNov = date('H');
        if ($timeNov >= 01 && $timeNov <= 05) {
          $helloText = "Доброй ночи";
        }else if($timeNov >= 5 && $timeNov <= 12){
          $helloText = "Доброе утро";
        }else if ($timeNov >= 12 && $timeNov <= 18){
          $helloText = "Добрый день";
        }else if ($timeNov >= 18 && $timeNov <= 23){
          $helloText = "Добрый вечер";
        }
        $indexData = array(
          'helloText' => $helloText,
          'userName' => $userName,);
        return $indexData;
      }
  }
}
