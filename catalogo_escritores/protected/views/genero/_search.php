<?php
/* @var $this GeneroController */
/* @var $model Genero */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div>
		<?php echo $form->label($model,'id_genero'); ?>
		<?php echo $form->textField($model,'id_genero'); ?>
	</div>

	<div>
		<?php echo $form->label($model,'nombreGenero'); ?>
		<?php echo $form->textField($model,'nombreGenero',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->