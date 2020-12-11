<?php


namespace App\Controllers\Admin;


use App\App;
use App\Controllers\Base\AuthController;
use App\Views\BasePage;
use App\Views\Forms\Admin\AddForm;
use App\Views\Forms\LoginForm;

class AddController extends AuthController
{
    protected $form;
    protected $page;

    public function __construct()
    {
        parent::__construct();
        $this->form = new AddForm();
        $this->page = new BasePage([
            'title' => 'ADD'
        ]);
    }

    public function index()
    {
        if ($this->form->validate()) {
            $clean_inputs = $this->form->values();
            $wishes = App::$db->getRowsWhere('wishes');
            $wish_count = 0;

            foreach ($wishes as $wish) {
                if ($_SESSION['email'] === $wish['email']) {
                    $wish_count++;
                }
            }

            if ($wish_count < 3) {
                App::$db->insertRow('wishes', $clean_inputs + [
                        'email' => $_SESSION['email'],
                        'fulfilled' => 'false'
                    ]);
            }
        }
        $this->page->setContent($this->form->render());
        return $this->page->render();
    }
}






