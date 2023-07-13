<?php
class Widget{
	static public function pathIncudeView($file_name, $data){
		include("Views/widgets/".$file_name.".php");
		
	}
	
}