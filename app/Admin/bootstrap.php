<?php

use App\Admin\Grid\Tools\SwitchGridMode;
use Dcat\Admin\Admin;
use Dcat\Admin\Grid;
use Dcat\Admin\Form;
use Dcat\Admin\Grid\Filter;
use Dcat\Admin\Layout\Navbar;
use Dcat\Admin\Show;
use Dcat\Admin\Repositories\Repository;
use App\Admin\Extensions\Form\WangEditor;

/**
 * Dcat-admin - admin builder based on Laravel.
 * @author jqh <https://github.com/jqhph>
 *
 * Bootstraper for Admin.
 *
 * Here you can remove builtin form field:
 *
 * extend custom field:
 * Dcat\Admin\Form::extend('php', PHPEditor::class);
 * Dcat\Admin\Grid\Column::extend('php', PHPEditor::class);
 * Dcat\Admin\Grid\Filter::extend('php', PHPEditor::class);
 *
 * Or require js and css assets:
 * Admin::css('/packages/prettydocs/css/styles.css');
 * Admin::js('/packages/prettydocs/js/main.js');
 *
 */

// 覆盖默认配置
config(['admin' => user_admin_config()]);
config(['app.locale' => config('admin.lang') ?: config('app.locale')]);

config([
    'admin.logo' => '<img src="'.admin_setting('url').'storage/'.admin_setting('logo').'" width="35"> &nbsp;'.admin_setting('name'),
    'admin.logo-mini' => '<img src="'.admin_setting('url').'storage/'.admin_setting('logo').'" >',
    'admin.name' => admin_setting('name','心选折扣仓'),
    'admin.url' => admin_setting('url'),
]);

Admin::navbar(function (Navbar $navbar) {
    $method = config('admin.layout.horizontal_menu') ? 'left' : 'right';

    // ajax请求不执行
    if (! Dcat\Admin\Support\Helper::isAjaxRequest()) {
        $navbar->$method(App\Admin\Actions\AdminSetting::make()->render());
    }
});

// 注册前端组件别名
Admin::asset()->alias('@wang-editor', [
    'js' => ['https://xz.xingzan66.com/js/wangEditor.min.js'],
]);

Form::extend('editor', WangEditor::class);
