<?php
/* @var $this SiteController */


$this->breadcrumbs = array(
	'Home',
);
?>

<div class=" text-center m-5">
	<h1>
		<?= CHtml::encode(Yii::app()->name); ?>
	</h1>
	<div class="m-5 mb-0">
		<div>
			<h5 class="fw-normal ">Somos especialistas em empresas de serviços recorrentes e</h5>
		</div>
		<div>
			<h5 class="fw-normal">queremos compartilhar tudo que estamos aprendendo. </h5>
		</div>
		<div>
			<h5 class="fw-normal">Vamos Juntos?</h2>
		</div>
	</div>
</div>

<h1>Últimos Posts</h1>
<div>
	<?php
	// Mostrar os últimos 5 posts
	$numPosts = 5;
	$totalPosts = count($data);

	// Se houver menos de 5 posts, mostra todos, senão mostra os últimos 5
	$numToShow = min($numPosts, $totalPosts);

	for ($i = 0; $i < $numToShow; $i++) {
		$post = $data[$i];
		?>
		<div>
			<h3>
				<?php echo $post->title; ?>
			</h3>
			<h5>
				<?php echo $post->author; ?>
				<?php echo $post->category; ?>
				<?php echo $post->date; ?>
			</h5>
			<h7>
				<?php echo $post->body; ?>
			</h7>
		</div>
	<?php } ?>
</div>