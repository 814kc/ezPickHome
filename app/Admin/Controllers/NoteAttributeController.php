<?php

namespace App\Admin\Controllers;

use App\Models\NoteAttribute;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class NoteAttributeController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '筆記屬性';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new NoteAttribute());

        $grid->column('value', __('value'));
        $grid->column('note_id', __('note_id'));
        $grid->column('attribute_id', __('attribute_id'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(NoteAttribute::findOrFail($id));


        $show->column('value', __('value'));
        $show->column('note_id', __('note_id'));
        $show->column('attribute_id', __('attribute_id'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new NoteAttribute());

        $form->number('value', __('value'));
        $form->number('note_id', __('note_id'));
        $form->number('attribute_id', __('attribute_id'));

        return $form;
    }
}
