<?php
require_once('Controller.php');

require_once('Models/PagesModel.php');
require_once('Models/CategoriesModel.php');
require_once('Models/ProductsModel.php');
require_once('Models/OrdersModel.php');

require_once('Widgets/MenuWidget.php');

class IndexController extends Controller{
	private $layout="default";

	public function pageAction(){
		// обычная типовая страница

		if (isset($_GET['id'])) {
			// запрос к базе данных

			$model = new PagesModel();
			$data = $model-> selectPageId($_GET['id']);

			if(count($data) == 0){
				Controller::render('404');
				die();
			}
			Controller::render($data['alias'], $data);
		}
		else{
			Controller::render('404');
		}
	}
	public function indexAction(){
		$model = new PagesModel();
		$data = $model-> selectPageId(4);
		Controller::render('index', $data,'index');
		if (isset($_GET['id'])) {
			switch($_GET['id']){
				case 1: Controller::render('banner', null,'index'); break;
				case 2: Controller::render('banner', $data,'home2'); break;
				
			}	
		}		
	}
	public function categoryAction(){
		// категории товаров

		// $widgets = true;

		if (isset($_GET['id'])) {
			// запрос к базе данных

			$model = new CategoriesModel();
			$data = $model-> selectPageId($_GET['id']);

			if(count($data) == 0){
				Controller::render('404');
				die();
			}
			$model = new ProductsModel();
			$data['products'] = $model->selectProductsCategory($_GET['id']);

			Controller::render("category", $data, 'default', ["виджеты из бд"]);
		}
	}
	public function error404Action(){
		// страница не найдена
		Controller::render('404');
	}

	public function cartaddAction(){
		// страница не найдена

		if(isset($_POST['id_product'])){
			$model = new OrdersModel();
			$order_id = $model -> createOrder(1);
			$model->addProductOrder($_POST["id_product"], $order_id);
		}
		header('location: ?route=index/cart&order_id='.$order_id);
	}

	public function cartAction(){
		if(isset($_GET['order_id'])){
			$model = new OrdersModel();
			$order_id = $model -> selectOrder($_GET['order_id']);
		}
		$data = null;
		Controller::render('cart', $data);
	}


}