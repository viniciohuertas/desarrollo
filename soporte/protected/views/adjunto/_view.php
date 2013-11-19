<?php
/* @var $this AdjuntoController */
/* @var $data Adjunto */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idadjunto')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idadjunto), array('view', 'id'=>$data->idadjunto)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('adjunto')); ?>:</b>
	<?php echo CHtml::encode($data->adjunto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('path')); ?>:</b>
	<?php echo CHtml::encode($data->path); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ticket_idticket')); ?>:</b>
	<?php echo CHtml::encode($data->ticket_idticket); ?>
	<br />


</div>