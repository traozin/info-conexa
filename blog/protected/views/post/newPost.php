<?php
/* @var $this PostController */

$this->breadcrumbs = array(
    'Nova Postagem',
);
?>

<h1 class="header-new-post">
    <?php echo 'Nova Postagem' ?>
</h1>

<div class="new-post">
    <form action="/index.php?r=post/create" method="post" class="styled-form">

        <div>
            <label for="title">Título:</label>
            <input class="input-new-post" type="text" name="title" required>
        </div>

        <div>
            <label for="author">Autor:</label>
            <input class="input-new-post" type="text" name="author" required>
        </div>

        <div>
            <label for="category">Categoria:</label>
            <select class="input-new-post" name="category" required>
                <option value="Integrações">Integrações</option>
                <option value="Serviços">Serviços</option>
                <option value="Financeiro">Financeiro</option>
                <option value="Agenda">Agenda</option>
                <option value="Parceiros">Parceiros</option>
                <option value="Outros">Outros</option>
            </select>
        </div>

        <div>
            <label for="body">Conteúdo:</label>
            <textarea class="input-new-post" rows="5" name="body" required></textarea>
        </div>


        <div class="text-center">
            <button class="styled-button" type="submit">
                <a>Adicionar Postagem</a>
            </button>
        </div>
    </form>
</div>