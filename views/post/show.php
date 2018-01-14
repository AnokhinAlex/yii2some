<?php
/**
 * Created by PhpStorm.
 * User: pc
 * Date: 12.01.18
 * Time: 15:54
 */
?>
<h1>Show</h1>

<?php //var_dump($cats->products)?>
<?php //var_dump($cats)?>
<?php //die;?>
<?php //echo "<pre>"?>
<?php foreach($cats as $cat){
	echo '<ul>';
	echo    '<li>' . $cat->title . '</li>';
		$products = $cat->products;
		foreach ($products as $product){
			echo '<ul>';
			echo    '<li>' . $product->title . '</li>';
			echo '</ul>';
		}
	echo '</ul>';
}?>
<?php //var_dump($cats)?>
<?php //var_dump($cats->products)?>
<?php// var_dump($cats)?>


<button class="btn btn-success">Click</button>
<?php $this->registerJsFile('@web/js/myjs.js',['depends' => 'yii\web\YiiAsset']) ?>

