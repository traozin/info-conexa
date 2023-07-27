<?php
/* @var $this SiteController */

// $this->pageTitle = Yii::app()->name;
// $posts = $dataProvider->getData();
// ?>

<div id="title-container" class=" text-center m-5">
	<h1><?= CHtml::encode(Yii::app()->name); ?></h1>
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
<div id="posts-container" class="container d-flex justify-content-between align-items-around">
	

</div>
<div class="container d-flex align-items-center justify-content-center mt-3">

	<nav aria-label="Page navigation example">
		<?php $zap = $this->widget('CLinkPager', array(
			'pages' => $dataProvider->pagination,
			'htmlOptions' => array('class' => 'pagination'),
			'cssFile' => '',
			'header' => '',
			'firstPageCssClass' => 'd-none',
			'selectedPageCssClass' => 'page-item active',
			'internalPageCssClass' => 'page-item',
			'previousPageCssClass' => 'page-item',
			'nextPageCssClass' => 'page-item',
			'lastPageCssClass' => 'd-none',
			'firstPageLabel' => 'Primeiro',
			'nextPageLabel' => 'Próximo',
			'prevPageLabel' => 'Anterior',
		)); ?>
	</nav>
</div>