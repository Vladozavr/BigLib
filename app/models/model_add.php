<?php
class Model_Add extends Model
{
  public function get_data()
	{
    session_start();
    $arrayName = array('sssssssssssss' => 2222222);
      $arrayName2 = array('sssssssssssss' => 2222222);
    if (isset($_POST['inversion_on'])) {
      $_SESSION['inversion_on'] = 1;
      var_dump($arrayName);
    }
    if (isset($_POST['inversion_off'])) {
      $_SESSION['inversion_on'] = 0;
    }
	}//GET DATA
}//CLASS
