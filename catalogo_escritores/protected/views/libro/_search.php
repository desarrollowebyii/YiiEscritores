<?php
/* @var $this LibroController */
/* @var $model Libro */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div>
		<?php echo $form->label($model,'id_libro'); ?>
		<?php echo $form->textField($model,'id_libro'); ?>
	</div>

	<div>
		<?php echo $form->label($model,'id_escritor'); ?>
		<?php echo $form->textField($model,'id_escritor'); ?>
	</div>

	<div>
		<?php echo $form->label($model,'id_genero'); ?>
		<?php echo $form->textField($model,'id_genero'); ?>
	</div>

	<div>
		<?php echo $form->label($model,'noPaginas'); ?>
		<?php echo $form->textField($model,'noPaginas'); ?>
	</div>

	<div>
		<?php echo $form->label($model,'titulo'); ?>
		<?php echo $form->textField($model,'titulo',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->