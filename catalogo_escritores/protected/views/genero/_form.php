<?php
/* @var $this GeneroController */
/* @var $model Genero */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'genero-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos marcados con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div>
		<?php echo $form->labelEx($model,'nombreGenero'); ?>
		<?php echo $form->textField($model,'nombreGenero',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nombreGenero'); ?>
	</div>

	<div class="buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Registrar' : 'Guardar',array("class"=>"btn btn-info")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->