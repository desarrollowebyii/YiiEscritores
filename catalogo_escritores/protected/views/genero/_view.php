<?php
/* @var $this GeneroController */
/* @var $data Genero */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_genero')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_genero), array('view', 'id'=>$data->id_genero)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombreGenero')); ?>:</b>
	<?php echo CHtml::encode($data->nombreGenero); ?>
	<br />


</div>