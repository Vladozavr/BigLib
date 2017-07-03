<?php
class Controller_Manipulation extends Controller
{
  function __construct(){
    $this->model = new Model_Manipulation();
    $this->view = new View();
  }

  function action_index()
  {
    $data = $this->model->get_data();
    $this->view->generate('manipulation_view.php','body.php', $data);
  }
}


?>
