<?php
class Controller_Add extends Controller
{
  function __construct()
  {
    $this->model = new Model_Add();
    $this->view = new View();
  }

  function action_index()
  {
    $data = $this->model->get_data();
    $this->view->generate('add_view.php','body.php', $data);
  }
}
