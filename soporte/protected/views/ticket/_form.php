<?php
/* @var $this TicketController */
/* @var $model Ticket */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ticket-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'asunto'); ?>
		<?php echo $form->textField($model,'asunto',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'asunto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'texto'); ?>
		<?php echo $form->textArea($model,'texto',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'texto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'iduser'); ?>
		<?php echo $form->textField($model,'iduser',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'iduser'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'producto_idproducto'); ?>
		<?php //echo $form->textField($model,'producto_idproducto',array('size'=>10,'maxlength'=>10)); ?>
                <?php echo $form->dropDownList($model,'producto_idproducto',
                   CHtml::listData(Producto::model()->findAll(),'idproducto','producto'),
                        array(
                            'ajax'=>array(
                              'type'=>'POST',
                              //'url'=>CController::createUrl('Registro/Selectdos'),
                              //'update'=>'#'.CHtml::activeId($model,'producto_idproducto'),
                              /*'beforeSend' => 'function(){
                               $("#Registro_id_nivel_dos").find("option").remove();
                               $("#Registro_id_nivel_tres").find("option").remove();
                               }', */ 
                            ),'prompt'=>'Seleccione'                                                        
                        )
                        ); 
                ?>
		<?php echo $form->error($model,'producto_idproducto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'prioridad_idprioridad'); ?>
		<?php //echo $form->textField($model,'prioridad_idprioridad',array('size'=>10,'maxlength'=>10)); ?>
                <?php echo $form->dropDownList($model,'prioridad_idprioridad',
                   CHtml::listData(Prioridad::model()->findAll(),'idprioridad','prioridad'),
                        array(
                            'ajax'=>array(
                              'type'=>'POST',
                              //'url'=>CController::createUrl('Registro/Selectdos'),
                              //'update'=>'#'.CHtml::activeId($model,'prioridadIdprioridad'),
                              /*'beforeSend' => 'function(){
                               $("#Registro_id_nivel_dos").find("option").remove();
                               $("#Registro_id_nivel_tres").find("option").remove();
                               }', */ 
                            ),'prompt'=>'Seleccione'                                                        
                        )
                        ); 
                ?>
		<?php echo $form->error($model,'prioridad_idprioridad'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->