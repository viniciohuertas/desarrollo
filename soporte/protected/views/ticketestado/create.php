<?php
/* @var $this TicketestadoController */
/* @var $model Ticketestado */

$this->breadcrumbs=array(
	'Ticketestados'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Ticketestado', 'url'=>array('index')),
	array('label'=>'Manage Ticketestado', 'url'=>array('admin')),
);
?>

<h1>Create Ticketestado</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>