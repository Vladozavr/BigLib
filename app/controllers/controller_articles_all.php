<?php
class Controller_Articles_All extends Controller
{
  function __construct()
  {
    $this->model = new Model_Articles_All();
    $this->view = new View();
  }

  function action_articles_all()
  {
    $data = $this->model->get_data();
    $this->view->generate('articles_all_view.php','body.php', $data);
  }
}
