<?php
/* @var $this EscritorController */
/* @var $model Escritor */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div>
		<?php echo $form->label($model,'id_escritor'); ?>
		<?php echo $form->textField($model,'id_escritor'); ?>
	</div>

	<div>
		<?php echo $form->label($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div>
		<?php echo $form->label($model,'apellido_paterno'); ?>
		<?php echo $form->textField($model,'apellido_paterno',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div>
		<?php echo $form->label($model,'apellido_materno'); ?>
		<?php echo $form->textField($model,'apellido_materno',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div>
		<?php echo $form->label($model,'edad'); ?>
		<?php echo $form->textField($model,'edad'); ?>
	</div>

	<div class="buttons">
		<?php echo CHtml::submitButton('Buscar',array("class"=>"btn btn-info")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->