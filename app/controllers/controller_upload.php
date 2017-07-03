<?php
class Controller_Upload extends Controller
{
  function __construct(){
    $this->model = new Model_Upload();
    $this->view = new View();
  }

  function action_index()
  {
    $data = $this->model->get_data();
    $this->view->generate('upload_view.php','body.php', $data);
  }
}


?>
