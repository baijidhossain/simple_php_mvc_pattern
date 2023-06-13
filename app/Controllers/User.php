<?php



class User extends Controller
{

  function __construct()
  {
    $this->model = $this->loadModel("User");
  }

  public function Index()
  {
    $users = $this->model->getUsers();

    $this->view("user", $users);
  }
}
