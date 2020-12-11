<?php


namespace App\Controllers\Admin;


use App\App;
use App\Controllers\Base\AuthController;
use App\Views\BasePage;
use App\Views\Forms\Admin\AddForm;
use App\Views\Forms\Admin\DeleteForm;
use App\Views\Tables\Admin\ProductsTable;
use Core\Views\Form;
use Core\Views\Link;
use Core\Views\Table;

class ListController extends AuthController
{
    protected DeleteForm $form;
    protected BasePage $page;



    public function __construct()
    {
        parent::__construct();
        $this->form = new DeleteForm();
        $this->page = new BasePage([
            'title' => 'Wishes list'
        ]);
    }

    public function editList()
    {
        if (Form::action()) {

            if ($this->form->validate()) {
                $clean_inputs = $this->form->values();

                App::$db->deleteRow('wishes', $clean_inputs['row_id']);
            }
        }

        $table = new ProductsTable();

        $this->page->setContent($table->render());
        return $this->page->render();
    }
}


