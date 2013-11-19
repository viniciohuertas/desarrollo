<?php
/* @var $this PrioridadController */
/* @var $data Prioridad */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idprioridad')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idprioridad), array('view', 'id'=>$data->idprioridad)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prioridad')); ?>:</b>
	<?php echo CHtml::encode($data->prioridad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />


</div>