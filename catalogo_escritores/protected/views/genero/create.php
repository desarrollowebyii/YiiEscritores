<?php
/* @var $this GeneroController */
/* @var $model Genero */

$this->breadcrumbs=array(
	'Generos'=>array('index'),
	'Registrar',
);

$this->menu=array(
	array('label'=>'Listar géneros', 'url'=>array('index')),
	array('label'=>'Administrar géneros', 'url'=>array('admin')),
);
?>

<h1>Registrar género</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>