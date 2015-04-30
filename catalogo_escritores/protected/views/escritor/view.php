<?php
/* @var $this EscritorController */
/* @var $model Escritor */

$this->breadcrumbs=array(
	'Escritores'=>array('index'),
	'Detalle',
);

$this->menu=array(
	array('label'=>'+Registrar escritor', 'url'=>array('create')),
	array('label'=>'Actualizar escritor', 'url'=>array('update', 'id'=>$model->id_escritor)),
	array('label'=>'Eliminar escritor', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_escritor),'confirm'=>'¿Está seguro que desea eliminar el registro?')),
    array('label'=>'Buscar escritor', 'url'=>array('admin')),
);
?>

<h2>Detalles de: <?php echo $model->nombre; ?><?php echo "&nbsp;"?><?php echo $model->apellido_paterno; ?><?php echo "&nbsp;"?><?php echo $model->apellido_materno; ?></h2>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions'=>array("class"=>"table table-striped"),
	'attributes'=>array(
		'id_escritor',
		'nombre',
		'apellido_paterno',
		'apellido_materno',
		'edad',
	),
)); ?>
