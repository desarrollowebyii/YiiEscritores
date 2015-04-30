<?php
/* @var $this EscritorController */
/* @var $model Escritor */

$this->breadcrumbs=array(
	'Escritores'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'+Registrar escritor', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#escritor-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h2>Administrar escritores</h2>

<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'escritor-grid',
	'itemsCssClass'=>"table table-striped",
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		// 'id_escritor',
		'nombre',
		'apellido_paterno',
		'apellido_materno',
		'edad',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
