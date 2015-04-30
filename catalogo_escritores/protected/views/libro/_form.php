<?php
/* @var $this LibroController */
/* @var $model Libro */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'libro-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos marcados con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div>
		<?php echo $form->labelEx($model,'id_escritor'); ?>
		<?php echo $form->dropDownList($model,'id_escritor',CHtml::listData(Escritor::model()->findAll(),'id_escritor','fullname')); ?>
		<?php echo $form->error($model,'id_escritor'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'id_genero'); ?>
		<?php echo $form->dropDownList($model,'id_genero',CHtml::listData(Genero::model()->findAll(),'id_genero','nombreGenero')); ?>
		<?php echo $form->error($model,'id_genero'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'noPaginas'); ?>
		<?php echo $form->textField($model,'noPaginas'); ?>
		<?php echo $form->error($model,'noPaginas'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'titulo'); ?>
		<?php echo $form->textField($model,'titulo',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'titulo'); ?>
	</div>

	<div class="buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Registrar' : 'Guardar',array("class"=>"btn btn-info")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->