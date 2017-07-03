<?php
class Controller_Search extends Controller
{
  function __construct(){
    $this->model = new Model_Search();
    $this->view = new View();
  }

  function action_index()
  {
    $data = $this->model->get_data();
    $this->view->generate('search_view.php','body.php', $data);
  }
}


?>
