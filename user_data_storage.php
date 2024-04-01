<?php
session_start();
$user_list = [
    ['login' => 'Olga', 'password' => password_hash(123,PASSWORD_DEFAULT)], 
    ['login' => 'Marina', 'password' => password_hash(123,PASSWORD_DEFAULT)], 
    ['login' => 'Milana', 'password' => password_hash(123,PASSWORD_DEFAULT)], 
];