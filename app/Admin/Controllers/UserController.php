<?php

namespace App\Admin\Controllers;

use App\Models\User;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class UserController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '用戶';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new User());

        $grid->column('id', __('ID'));
        $grid->column('name', __('名稱'));
        $grid->column('email', __('信箱'));
        $grid->column('email_verified_at', __('信箱驗證'))->date();
        // $grid->column('password', __('密碼'));
        // $grid->column('remember_token', __('token'));
        $grid->column('created_at', __('創建'))->date();
        $grid->column('updated_at', __('更新'))->date();

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
        $show = new Show(User::findOrFail($id));

        $show->field('id', __('ID'));
        $show->field('name', __('名稱'));
        $show->field('email', __('信箱'));
        $show->field('email_verified_at', __('信箱驗證'))->date();
        $show->field('password', __('密碼'));
        $show->field('remember_token', __('token'));
        $show->field('created_at', __('創建'))->date();
        $show->field('updated_at', __('更新'))->date();

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new User());
        
        $form->id('id', __('ID'));
        $form->text('name', __('名稱'));
        $form->email('email', __('信箱'));
        $form->datetime('email_verified_at', __('信箱驗證'))->default(date('Y-m-d H:i:s'));
        $form->password('password', __('密碼'));
        $form->text('remember_token', __('token'));

        return $form;
    }
}
