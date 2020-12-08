<?php

require '../bootloader.php';

use App\Controllers\LoginController;

$controller = new LoginController();
print $controller->index();


