<?php
/* @var $this LibroController */
/* @var $model Libro */

$this->breadcrumbs=array(
	'Libros'=>array('index'),
	'Registrar',
);

$this->menu=array(
	array('label'=>'+Registrar género', 'url'=>array('genero/create')),
);
?>

<h2>Registrar libro</h2>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>