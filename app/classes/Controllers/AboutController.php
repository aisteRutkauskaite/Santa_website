<?php


namespace App\Controllers;


use App\Abstracts\Controller;
use App\App;
use App\Controllers\Base\GuestController;
use App\Views\BasePage;
use App\Views\Forms\LoginForm;
use Core\View;

class AboutController extends Controller
{
    protected  $page;

    public function __construct()
    {

        $this->page = new BasePage([
            'title' => 'About',
        ]);
    }

    function index(): ?string
    {
//        if ($this->form->validate()) {
//            $clean_inputs = $this->form->values();
//
//            App::$db->insertRow('messages', $clean_inputs);
//
//            $p = 'You sent a message';
//        }

        $content = new View([
            'title' => 'About Santa',
            'img' => 'https://secureservercdn.net/160.153.137.99/ipl.c07.myftpupload.com/wp-content/uploads/2019/12/With-sac-greener-gifts-1024x1024.jpg',
            'address' => 'Tähtikuja 1, 96930 Rovaniemi, Finland',
            'email' => 'joulupukinpaaposti@posti.fi',
//            'form' => $this->form->render(),
            'message' => $p ?? null
        ]);

        $this->page->setContent($content->render(ROOT . '/app/templates/content/about.tpl.php'));

        return $this->page->render();
    }
}

