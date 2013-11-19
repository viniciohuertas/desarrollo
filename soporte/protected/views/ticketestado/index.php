<?php
/* @var $this TicketestadoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ticketestados',
);

$this->menu=array(
	array('label'=>'Create Ticketestado', 'url'=>array('create')),
	array('label'=>'Manage Ticketestado', 'url'=>array('admin')),
);
?>

<h1>Ticketestados</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
