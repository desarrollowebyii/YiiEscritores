<?php
/* @var $this EscritorController */
/* @var $data Escritor */
?>

<div class="media">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_escritor')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_escritor), array('view', 'id'=>$data->id_escritor)); ?>
	<br />
	<div class="media-body">
		
	

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apellido_paterno')); ?>:</b>
	<?php echo CHtml::encode($data->apellido_paterno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('edad')); ?>:</b>
	<?php echo CHtml::encode($data->apellido_materno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numero_libros')); ?>:</b>
	<?php echo CHtml::encode($data->edad); ?>
	<br />

</div>
</div>