<?php
/* @var $this AdjuntoController */
/* @var $model Adjunto */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'adjunto-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'adjunto'); ?>
		<?php echo $form->textField($model,'adjunto',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'adjunto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textArea($model,'descripcion',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'path'); ?>
		<?php echo $form->textArea($model,'path',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'path'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ticket_idticket'); ?>
		<?php echo $form->textField($model,'ticket_idticket',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'ticket_idticket'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->