<?php
/* @var $this GeneroController */
/* @var $model Genero */

$this->breadcrumbs=array(
	'Generos'=>array('index'),
	$model->nombreGenero,
);

$this->menu=array(
	array('label'=>'Listar géneros', 'url'=>array('index')),
	array('label'=>'+Registrar género', 'url'=>array('create')),
	array('label'=>'Actualizar género', 'url'=>array('update', 'id'=>$model->id_genero)),
	array('label'=>'Eliminar género', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_genero),'confirm'=>'¿Desea eliminar este elemento?')),
);
?>

<h1>Registro del género: <?php echo $model->nombreGenero; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_genero',
		'nombreGenero',
	),
)); ?>
