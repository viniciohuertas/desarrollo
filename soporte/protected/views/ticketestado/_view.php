<?php
/* @var $this TicketestadoController */
/* @var $data Ticketestado */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idticketestado')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idticketestado), array('view', 'id'=>$data->idticketestado)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ticket_idticket')); ?>:</b>
	<?php echo CHtml::encode($data->ticket_idticket); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado_idestado')); ?>:</b>
	<?php echo CHtml::encode($data->estado_idestado); ?>
	<br />


</div>