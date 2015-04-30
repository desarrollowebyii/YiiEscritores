<?php
/* @var $this EscritorController */
/* @var $model Escritor */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'escritor-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos marcados con <span class="required">*</span> son obligatorios.</p>

	<?php #echo $form->errorSummary($model); ?>

	<div>
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'apellido_paterno'); ?>
		<?php echo $form->textField($model,'apellido_paterno',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'apellido_paterno'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'apellido_materno'); ?>
		<?php echo $form->textField($model,'apellido_materno',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'apellido_materno'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'edad'); ?>
		<?php echo $form->textField($model,'edad'); ?>
		<?php echo $form->error($model,'edad'); ?>
	</div>

	<div class="buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Registrar' : 'Guardar',array("class"=>"btn btn-info")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->