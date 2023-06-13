<?php


class Home extends Controller
{

  function __construct()
  {
    $this->model = $this->loadModel("Home");
  }

  public function Index()
  {
    $users = $this->model->getUsers();

    $this->view("home", $users);
  }
}
