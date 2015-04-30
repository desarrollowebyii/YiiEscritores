<?php
/* @var $this EscritorController */
/* @var $model Escritor */

$this->breadcrumbs=array(
	'Escritores'=>array('index'),
	'Registrar escritor',
);

?>

<h2>Registrar escritor</h2>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>