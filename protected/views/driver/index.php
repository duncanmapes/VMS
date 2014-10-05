<?php
/* @var $this DriverController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Drivers',
);

$this->menu=array(
	array('label'=>'Create Driver','url'=>array('create')),
	array('label'=>'Manage Driver','url'=>array('admin')),
);
?>

<h1>Drivers</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>