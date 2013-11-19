<?php
/* @var $this AdjuntoController */
/* @var $model Adjunto */

$this->breadcrumbs=array(
	'Adjuntos'=>array('index'),
	$model->idadjunto,
);

$this->menu=array(
	array('label'=>'List Adjunto', 'url'=>array('index')),
	array('label'=>'Create Adjunto', 'url'=>array('create')),
	array('label'=>'Update Adjunto', 'url'=>array('update', 'id'=>$model->idadjunto)),
	array('label'=>'Delete Adjunto', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idadjunto),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Adjunto', 'url'=>array('admin')),
);
?>

<h1>View Adjunto #<?php echo $model->idadjunto; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idadjunto',
		'adjunto',
		'descripcion',
		'path',
		'ticket_idticket',
	),
)); ?>
