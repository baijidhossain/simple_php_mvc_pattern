<?php

include('system/library/controller.php');

include('system/library/database.php');

$url = $_GET['url'] ?? "";

$url = rtrim($url, '/');

$url = explode('/', $url);

if (isset($url[0]) && file_exists('app/Controllers/' . $url[0] . '.php')) {

  include 'app/Controllers/' . $url[0] . '.php';

  $obj = new $url[0]();

  $fun = $url[1] ?? "Index";

  unset($url[0]);

  unset($url[1]);

  $parameter = $url ?? [];

  call_user_func_array([$obj, $fun], $parameter);
} else {

  include 'app/Controllers/home.php';

  $obj = new Home();

  $obj->Index();
}
