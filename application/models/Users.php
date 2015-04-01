<?php

class Users extends MY_Model {

    public function __construct()
    {
        parent::_construct('users', 'id');
    }
}