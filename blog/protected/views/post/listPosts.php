<?php
/* @var $this PostController */

$this->breadcrumbs = array(
	'Postagens',
);
?>

<h1>
	<h1>
		<?php echo 'Postagens' ?>
	</h1>
</h1>
<div>
	<?php
	foreach ($data as $post) {
		?>
		<div id="post" class="post-container <?php echo strtolower($post->category); ?>-post">
			<h3 class="post-title">
				<a href='<?= Yii::app()->request->baseUrl; ?>/index.php?r=post&id=<?php echo $post->id; ?>'>
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