<?php

require_once('Model.php');

class ProductsModel extends Model{
	public function selectProductsCategory($id_category){

		$sql = "SELECT * FROM `product` WHERE category_id=".$id_category;

		$data = $this-> getMultiData($sql);

		return $data;
	}
}