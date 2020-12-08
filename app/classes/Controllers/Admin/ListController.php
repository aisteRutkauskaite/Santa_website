<?php


namespace App\Controllers\Admin;


use App\App;
use App\Controllers\Base\AuthController;
use App\Views\BasePage;
use App\Views\Forms\Admin\AddForm;
use App\Views\Forms\Admin\DeleteForm;
use Core\Views\Form;
use Core\Views\Link;
use Core\Views\Table;

class ListController extends AuthController
{
    protected $page;
    protected $link;
    protected $table;

    public function __construct()
    {
        parent::__construct();
        $this->page = new BasePage([
            'title' => 'LIST'
        ]);
    }

    public function index()
    {

        if (Form::action()) {
            $deleteForm = new DeleteForm();

            if ($deleteForm->validate()) {
                $clean_inputs = $deleteForm->values();

                App::$db->deleteRow('items', $clean_inputs['row_id']);
            }
        }
        $rows = App::$db->getRowsWhere('items');

        foreach ($rows as $id => $row) {
            $this->link = new Link([
                'link' => "/admin/edit.php?id={$id}",
                'text' => 'Edit'
            ]);

            $rows[$id]['link'] = $this->link->render();

            $deleteForm = new DeleteForm($id);
            $rows[$id]['delete'] = $deleteForm->render();
        }

        $this->table = new Table([
            'headers' => [
                'Item',
                'Price',
                'Image url',
                'Description',
                'Options'
            ],
            'rows' => $rows
        ]);

        $this->page->setContent($this->table->render());
        return $this->page->render();
    }
}


