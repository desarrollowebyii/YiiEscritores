<?php
/* @var $this GeneroController */
/* @var $model Genero */

$this->breadcrumbs=array(
	'Géneros'=>array('index'),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar géneros', 'url'=>array('index')),
	array('label'=>'+Registrar género', 'url'=>array('create')),
);
?>

<h1>Actualizar datos del género <?php echo $model->nombreGenero; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>