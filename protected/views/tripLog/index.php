<?php
/* @var $this TripLogController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Trip Logs',
);

$this->menu=array(
	array('label'=>'Create TripLog','url'=>array('create')),
	array('label'=>'Manage TripLog','url'=>array('admin')),
);
?>

<h1>Trip Logs</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>