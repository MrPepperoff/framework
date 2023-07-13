<?php

require_once("Model.php");

class OrdersModel extends Model{
	public function selectOrder($order_id){

		$sql = "SELECT 
						orders.id as 'order',
						orders.user_id,

						order_products.id as order_product_id,
						order_products.order_id,	
						order_products.product_id,	
						order_products.count,

						product.id	as 'product',
						product.name,	
						product.img,	
						product.description,	
						product.category_id,	
						product.price,
						product.old_price


		FROM orders INNER JOIN order_products ON orders.id = order_products.order_id 
					INNER JOIN product ON order_products.product_id = product.id
					WHERE orders.id = ".$order_id;




		// $sql = "SELECT 
		// 			orders.id AS 'order',
					
		// 			order_products.order_id,
					

		// 		FROM orders INNER JOIN order_products ON orders.id = order_products.order_id
		// 		WHERE 'order' =".$order_id;
		// 		echo $sql;
		$data = $this-> getMultiData ($sql);
	}
	
	public function createOrder($user_id = null){
		$sql = "SELECT * 
				FROM `orders` 
				WHERE user_id = '".$user_id."'";
		$data = $this-> getData ($sql);

		if(count($data) == 0){
			$sql = "INSERT INTO `orders`(user_id, date) VALUES(".$user_id.", NOW())";
			$this -> statusRequest($sql);

			$sql = "SELECT * 
				FROM `orders` 
				WHERE user_id = '".$user_id."'";
			$data = $this-> getData ($sql);

			return $data;
		}
		else{
			return $data['id'];
		}	
	}
	public function addProductOrder($product_id = null, $order_id){
		$sql = "INSERT INTO `order_products`(order_id, product_id, count) VALUES(".$order_id.",".$product_id.", 1)";
		return $this -> statusRequest($sql);
	}
}