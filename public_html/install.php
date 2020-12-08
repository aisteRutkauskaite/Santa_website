<?php
use App\App;

use Core\FileDB;

require '../bootloader.php';


App::$db = new FileDB(DB_FILE);
App::$db->createTable('users');
App::$db->insertRow('users', ['email' => 'test1', 'password' => 'test']);
App::$db->createTable('items');