<?php
/* @var $this TicketController */
/* @var $model Ticket */

$this->breadcrumbs=array(
	'Tickets'=>array('index'),
	$model->idticket=>array('view','id'=>$model->idticket),
	'Update',
);

$this->menu=array(
	array('label'=>'List Ticket', 'url'=>array('index')),
	array('label'=>'Create Ticket', 'url'=>array('create')),
	array('label'=>'View Ticket', 'url'=>array('view', 'id'=>$model->idticket)),
	array('label'=>'Manage Ticket', 'url'=>array('admin')),
);
?>

<h1>Update Ticket <?php echo $model->idticket; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>