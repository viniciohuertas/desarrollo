<?php
/* @var $this PrioridadController */
/* @var $model Prioridad */

$this->breadcrumbs=array(
	'Prioridads'=>array('index'),
	$model->idprioridad=>array('view','id'=>$model->idprioridad),
	'Update',
);

$this->menu=array(
	array('label'=>'List Prioridad', 'url'=>array('index')),
	array('label'=>'Create Prioridad', 'url'=>array('create')),
	array('label'=>'View Prioridad', 'url'=>array('view', 'id'=>$model->idprioridad)),
	array('label'=>'Manage Prioridad', 'url'=>array('admin')),
);
?>

<h1>Update Prioridad <?php echo $model->idprioridad; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>