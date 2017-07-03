<?php
class Db
{
	public function connect(){
		include 'settings.php';
		$CONNECT = mysqli_connect(HOST,USER,PASS);
		mysqli_select_db($CONNECT, DB);
		return $CONNECT;
	}
}
?>
