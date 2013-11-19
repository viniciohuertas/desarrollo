<?php
/* @var $this TicketestadoController */
/* @var $model Ticketestado */

$this->breadcrumbs=array(
	'Ticketestados'=>array('index'),
	$model->idticketestado=>array('view','id'=>$model->idticketestado),
	'Update',
);

$this->menu=array(
	array('label'=>'List Ticketestado', 'url'=>array('index')),
	array('label'=>'Create Ticketestado', 'url'=>array('create')),
	array('label'=>'View Ticketestado', 'url'=>array('view', 'id'=>$model->idticketestado)),
	array('label'=>'Manage Ticketestado', 'url'=>array('admin')),
);
?>

<h1>Update Ticketestado <?php echo $model->idticketestado; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>