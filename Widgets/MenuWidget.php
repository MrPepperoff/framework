<?php
include_once('Widget.php');
include_once('Models/MenuModel.php');

class MenuWidget extends Widget{
	static function render($alias, $menu_name = 'menu'){

		$model = new MenuModel();

		$data = $model->selectItems($alias);
		Widget::pathIncudeView($menu_name, $data);
	}
}