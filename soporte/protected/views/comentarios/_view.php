<?php
/* @var $this ComentariosController */
/* @var $data Comentarios */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idcomentarios')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idcomentarios), array('view', 'id'=>$data->idcomentarios)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comentarios')); ?>:</b>
	<?php echo CHtml::encode($data->comentarios); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ticket_idticket')); ?>:</b>
	<?php echo CHtml::encode($data->ticket_idticket); ?>
	<br />


</div>