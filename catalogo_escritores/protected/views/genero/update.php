<?php
/* @var $this GeneroController */
/* @var $model Genero */

$this->breadcrumbs=array(
	'Generos'=>array('index'),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar géneros', 'url'=>array('index')),
	array('label'=>'+Registrar género', 'url'=>array('create')),
	array('label'=>'Administrar géneros', 'url'=>array('admin')),
);
?>

<h1>Actualizar datos del género <?php echo $model->nombreGenero; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>