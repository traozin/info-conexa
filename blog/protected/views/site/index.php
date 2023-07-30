<?php
/* @var $this SiteController */


$this->breadcrumbs = array(
	'Home',
);
?>

<div class="text-center m-5">
	<h1>
		<?= CHtml::encode(Yii::app()->name); ?>
	</h1>
	<div class="m-5 mb-0">
		<div>
			<h5 class="fw-normal">Somos especialistas em empresas de serviços recorrentes e</h5>
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
	// Mostrar os últimos 3 posts
	$numPosts = 3;
	$totalPosts = count($data);

	// Se houver menos de 3 posts, mostra todos, senão mostra os últimos 3
	$numToShow = min($numPosts, $totalPosts);

	for ($i = 0; $i < $numToShow; $i++) {
		$post = $data[$i];
		?>
		<div class="post-container <?php echo strtolower($post->category); ?>-post">
			<h3 class="post-title">
				<a href='<?= Yii::app()->request->baseUrl; ?>/index.php?r=post/view&id=<?php echo $post->id; ?>'>
					<strong>
						<?php echo $post->title; ?>
					</strong>
				</a>
			</h3>
			<div class="post-meta">
				<?php echo "@$post->author"; ?>
				<?php echo $post->category; ?>
				<?php echo $post->date; ?>
			</div>
			<div class="post-body">
				<?php
				// Limitar a quantidade de texto do body
				$maxBodyLength = 200;
				$body = $post->body;
				if (strlen($body) > $maxBodyLength) {
					$body = substr($body, 0, $maxBodyLength) . '...';
				}
				echo $body;
				?>
			</div>
		</div>
	<?php } ?>
</div>