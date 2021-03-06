<?php


namespace App\Views;


use App\App;
use Core\View;

class Navigation extends View
{
    public function render($template_path = ROOT . '/app/templates/nav.php')
    {
        return parent::render($template_path); // TODO: Change the autogenerated stub
    }

    public function __construct()
    {
        parent::__construct($this->generate());
    }

    public function generate()
    {
        $nav = ['All public wishes' => '/index.php'];

        if (App::$session->getUser()) {
            if (App::$session->getUser()['email'] === 'santa@santa.lt') {

                return $nav + [
                        'Logout' => '/logout.php',
                    ];
            } else {
                return $nav + [
                        'Make a wish' => '/admin/add.php',
                        'My wishes' => '/admin/list.php',
                        'Logout' => '/logout.php',
                    ];
            }
        } else {
            return $nav + [
                    'Register' => '/register.php',
                    'Login' => '/login.php',
                    'About' => '/about.php',
                ];
        }
    }

}