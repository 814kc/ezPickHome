<?php

namespace App\Admin\Controllers;

use App\Models\Attribute;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class AttributeController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '屬性';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Attribute());
        
        $grid->column('id', __('ID'));
        $grid->column('name', __('屬性名'));
        $grid->column('is_default', __('預設'))->bool(['1' => true, '0' => false]);
        $grid->column('is_rating', __('評分項'))->bool(['1' => true, '0' => false]);
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
        $show = new Show(Attribute::findOrFail($id));

        $show->column('id', __('ID'));
        $show->column('name', __('屬性名'));
        $show->column('is_default', __('預設'));
        $show->column('is_rating', __('評分項'));
        $show->column('created_at', __('創建'));
        $show->column('updated_at', __('更新'));



        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Attribute());

        $form->text('name', __('屬性名'));
        $form->RadioButton('is_default', __('預設'));
        $form->RadioButton('is_rating', __('評分項'));

        return $form;
    }
}
