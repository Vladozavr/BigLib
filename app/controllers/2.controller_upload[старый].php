<?php
include_once('app/models/model_upload.php');
if (!isset($_POST["upload_it"])) {
  include_once('app/views/view_upload.php');
}

if (isset($_POST["upload_it"])) {
  uploadArticle();
}
 ?>
