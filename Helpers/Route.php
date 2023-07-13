<?php
require_once("Helpers/Error404.php");
class Route{
	static public function urlParse(){

		//     http://localhost/framework?route=index/index
		

		if (isset($_GET['route']) && !empty($_GET['route'])) {
			// параметры
			$routeParams = explode("/", $_GET['route']);

			if (count($routeParams) != 2) {
				
				Error404::default();
				return 0;
			}

			$controllerName = $routeParams[0];
			$actionName = $routeParams[1];

			$controllerName = ucfirst($controllerName);
			
			
			if(!file_exists("Controllers/".$controllerName."Controller.php")){
				Error404::default();
				return 0;
			}

			require_once("Controllers/".$controllerName."Controller.php");

			$actionName = ucfirst($actionName);

			if (!method_exists($controllerName."Controller", $actionName."Action")) {
				Error404::default();
				return 0;
			}

			// создание екземпляра класса и вызов его метода
			$className = $controllerName."Controller";
			$obj = new $className();
			$methodName = $actionName."Action";
			$obj->$methodName();
		}
		else{
			// вызов главной страницы
			require_once("Controllers/IndexController.php");
			$obj = new IndexController();
			$obj -> indexAction();
		}
	}
}