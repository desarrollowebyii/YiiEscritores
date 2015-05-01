<?php
/* @var $this GeneroController */
/* @var $model Genero */

$this->breadcrumbs=array(
	'Géneros'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'+Registrar género', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#genero-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar registro de géneros</h1>



<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'genero-grid',
	'itemsCssClass'=>"table table-striped",
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_genero',
		'nombreGenero',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
