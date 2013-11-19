<?php
/* @var $this ComentariosController */
/* @var $model Comentarios */

$this->breadcrumbs=array(
	'Comentarioses'=>array('index'),
	$model->idcomentarios=>array('view','id'=>$model->idcomentarios),
	'Update',
);

$this->menu=array(
	array('label'=>'List Comentarios', 'url'=>array('index')),
	array('label'=>'Create Comentarios', 'url'=>array('create')),
	array('label'=>'View Comentarios', 'url'=>array('view', 'id'=>$model->idcomentarios)),
	array('label'=>'Manage Comentarios', 'url'=>array('admin')),
);
?>

<h1>Update Comentarios <?php echo $model->idcomentarios; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>