<?php

class UserModel
{

  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getUsers()
  {
    return $this->db->Query("SELECT * FROM users")->fetchAll();
  }
}
