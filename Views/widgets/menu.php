<style>
	li{
		display: inline-block;
	}
</style>
<ul>
	

<?php

foreach($data as $item){
	echo "<li><a href='http://localhost/framework/{$item['href']}'>{$item['name']}</a></li>";
}
?>

</ul>