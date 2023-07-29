<?php
/* @var $this PostController */

$this->breadcrumbs = array(
	'Postagem',
);
?>

<title>Página de Postagem</title>

<body>
	<h3 class="post-title">
		<strong>
			<?php echo $data->title; ?>
		</strong>
	</h3>
	<div class="post-meta">
		<?php echo "@$data->author"; ?>
		<?php echo $data->category; ?>
		<?php echo $data->date; ?>
	</div>
	<div class="post-body">
		<?php echo $data->body; ?>
	</div>

	<!-- Sessão de Comentários -->
	<div class="comment-section">
		<div class="comment-title">Comentários</div>

		<?php foreach ($data->comments as $comment) { ?>
			<div class="comment-container">
				<div class="comment-meta">
					<?php echo $comment->author; ?>
				</div>
				<div class="comment-body">
					<?php echo $comment->body; ?>
				</div>
			</div>
		<?php } ?>

		<!-- Formulário de Novo Comentário -->
		<div class="comment-form">
			<form action="/index.php?r=comentario/create" method="post">
				<label for="author">Usuário:</label>
				<input type="text" name="author" required>

				<label for="comment">Comentário:</label>
				<textarea name="comment" required></textarea>

				<input type="hidden" name="idPost" value="<?php echo $data->id; ?>">

				<button type="submit">Adicionar Comentário</button>
			</form>
		</div>
	</div>
</body>
