<?php

class users_model extends db {

   public $users = null;

   public function __construct(){
    parent::__construct();
   }

   public function _Users(){
    $users = $this->_selectAll('mvc_user', '*');
    return $users;
   }

}