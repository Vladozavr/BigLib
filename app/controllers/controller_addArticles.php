<?php
class Controller_AddArticles extends Controller
{
  function __construct(){
    $this->model = new Model_AddArticles();
    $this->view = new View();
  }

  function action_addArticles()
  {
    $data = $this->model->get_data();
    $this->view->generate('addArticles_view.php','body.php', $data);
  }
}

?>
