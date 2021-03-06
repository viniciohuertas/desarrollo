<?php
/* @var $this TicketestadoController */
/* @var $model Ticketestado */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ticketestado-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ticket_idticket'); ?>
		<?php echo $form->textField($model,'ticket_idticket',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'ticket_idticket'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estado_idestado'); ?>
		<?php echo $form->textField($model,'estado_idestado',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'estado_idestado'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->