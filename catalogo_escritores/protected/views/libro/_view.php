<?php
/* @var $this LibroController */
/* @var $data Libro */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_libro')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_libro), array('view', 'id'=>$data->id_libro)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_escritor')); ?>:</b>
	<?php echo CHtml::encode($data->id_escritor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_genero')); ?>:</b>
	<?php echo CHtml::encode($data->id_genero); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('noPaginas')); ?>:</b>
	<?php echo CHtml::encode($data->noPaginas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('titulo')); ?>:</b>
	<?php echo CHtml::encode($data->titulo); ?>
	<br />


</div>