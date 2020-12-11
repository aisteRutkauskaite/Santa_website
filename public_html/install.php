<?php
use App\App;

use Core\FileDB;

require '../bootloader.php';


App::$db = new FileDB(DB_FILE);
App::$db->createTable('users');
App::$db->insertRow('users', ['name'=> 'test', 'last_name'=> 'test1', 'email' => 'test1', 'password' => 'test']);
App::$db->insertRow('users', ['email' => 'santa@claus.lt', 'password' => 'santa69']);
App::$db->createTable('wishes');