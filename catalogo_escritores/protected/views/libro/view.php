<?php
/* @var $this LibroController */
/* @var $model Libro */

$this->breadcrumbs=array(
	'Libros'=>array('index'),
	'Detalle',
);

$this->menu=array(
	array('label'=>'+Registrar libro', 'url'=>array('create')),
	array('label'=>'Actualizar libro', 'url'=>array('update', 'id'=>$model->id_libro)),
	array('label'=>'Eliminar libro', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_libro),'confirm'=>'¿Seguro que desea eliminar este elemento?')),
);
?>

<h2>Detalle del libro: <?php echo $model->titulo; ?></h2>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_libro',
		'id_escritor',
		'id_genero',
		'noPaginas',
		'titulo',
	),
)); ?>
