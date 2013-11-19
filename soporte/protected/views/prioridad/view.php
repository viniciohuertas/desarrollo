<?php
/* @var $this PrioridadController */
/* @var $model Prioridad */

$this->breadcrumbs=array(
	'Prioridads'=>array('index'),
	$model->idprioridad,
);

$this->menu=array(
	array('label'=>'List Prioridad', 'url'=>array('index')),
	array('label'=>'Create Prioridad', 'url'=>array('create')),
	array('label'=>'Update Prioridad', 'url'=>array('update', 'id'=>$model->idprioridad)),
	array('label'=>'Delete Prioridad', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idprioridad),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Prioridad', 'url'=>array('admin')),
);
?>

<h1>View Prioridad #<?php echo $model->idprioridad; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idprioridad',
		'prioridad',
		'descripcion',
	),
)); ?>
