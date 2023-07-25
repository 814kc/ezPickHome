<?php

namespace App\Admin\Controllers;

use App\Models\Note;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class NoteController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '筆記';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Note());

        $grid->column('id', __('ID'));
        $grid->column('user_id', __('用戶ID'));
        $grid->column('title', __('標題'));
        $grid->column('content', __('內文'));
        $grid->column('created_at', __('創建'));
        $grid->column('updated_at', __('更新'));

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
        $show = new Show(Note::findOrFail($id));

        $show->field('id', __('ID'));
        $show->field('user_id', __('用戶ID'));
        $show->field('title', __('標題'));
        $show->field('content', __('內文'));
        $show->field('created_at', __('創建'));
        $show->field('updated_at', __('更新'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Note());

        $form->number('user_id', __('用戶ID'));
        $form->text('title', __('標題'));
        $form->textarea('content', __('內文'));

        return $form;
    }
}
