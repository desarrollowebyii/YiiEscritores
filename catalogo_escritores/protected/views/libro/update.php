<?php
/* @var $this LibroController */
/* @var $model Libro */

$this->breadcrumbs=array(
	'Libros'=>array('index'),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'+Registrar libro', 'url'=>array('create')),
	array('label'=>'Administrar libros', 'url'=>array('admin')),
);
?>

<h2>Actualizar datos del libro: <?php echo $model->titulo; ?></h2>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>