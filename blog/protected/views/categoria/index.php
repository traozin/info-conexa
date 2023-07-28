<?php
/* @var $this CategoriaController */

$this->breadcrumbs=array(
	'Categoria',
);
?>

<div> 
	<?php foreach($data as $item): ?>
		<div>
			<h2><?php echo $item->name; ?></h2>
			<p><?php echo $item->description; ?></p>
		</div>
	<?php endforeach; ?>
</div>