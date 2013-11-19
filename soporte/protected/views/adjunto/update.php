<?php
/* @var $this AdjuntoController */
/* @var $model Adjunto */

$this->breadcrumbs=array(
	'Adjuntos'=>array('index'),
	$model->idadjunto=>array('view','id'=>$model->idadjunto),
	'Update',
);

$this->menu=array(
	array('label'=>'List Adjunto', 'url'=>array('index')),
	array('label'=>'Create Adjunto', 'url'=>array('create')),
	array('label'=>'View Adjunto', 'url'=>array('view', 'id'=>$model->idadjunto)),
	array('label'=>'Manage Adjunto', 'url'=>array('admin')),
);
?>

<h1>Update Adjunto <?php echo $model->idadjunto; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>