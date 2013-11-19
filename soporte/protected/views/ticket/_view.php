<?php
/* @var $this TicketController */
/* @var $data Ticket */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idticket')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idticket), array('view', 'id'=>$data->idticket)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asunto')); ?>:</b>
	<?php echo CHtml::encode($data->asunto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('texto')); ?>:</b>
	<?php echo CHtml::encode($data->texto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('iduser')); ?>:</b>
	<?php echo CHtml::encode($data->iduser); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('producto_idproducto')); ?>:</b>
	<?php echo CHtml::encode($data->producto_idproducto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prioridad_idprioridad')); ?>:</b>
	<?php echo CHtml::encode($data->prioridad_idprioridad); ?>
	<br />


</div>