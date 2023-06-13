<?php

class Controller
{

  public function loadModel($model)
  {
    // Require model file

    include "app/models/" . $model . ".php";

    $model = $model . "Model";

    //  Create object of model
    return  new $model();
  }

  function view($fileName, $data = NULL)
  {

    include "app/views/" . $fileName . ".php";
  }
}
