<?php
/* @var $this EscritorController */
/* @var $model Escritor */

$this->breadcrumbs=array(
	'Escritores'=>array('index'),
	'Administrar'=>array('admin'),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'+Registrar escritor', 'url'=>array('create')),
	array('label'=>'Administrar escritores', 'url'=>array('admin')),
);
?>

<h2>Actualizar datos del escritor</h2>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>