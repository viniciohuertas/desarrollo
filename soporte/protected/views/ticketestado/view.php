<?php
/* @var $this TicketestadoController */
/* @var $model Ticketestado */

$this->breadcrumbs=array(
	'Ticketestados'=>array('index'),
	$model->idticketestado,
);

$this->menu=array(
	array('label'=>'List Ticketestado', 'url'=>array('index')),
	array('label'=>'Create Ticketestado', 'url'=>array('create')),
	array('label'=>'Update Ticketestado', 'url'=>array('update', 'id'=>$model->idticketestado)),
	array('label'=>'Delete Ticketestado', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idticketestado),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Ticketestado', 'url'=>array('admin')),
);
?>

<h1>View Ticketestado #<?php echo $model->idticketestado; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idticketestado',
		'ticket_idticket',
		'estado_idestado',
	),
)); ?>
