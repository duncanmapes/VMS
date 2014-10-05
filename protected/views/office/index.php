<?php
/* @var $this OfficeController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Offices',
);

$this->menu=array(
	array('label'=>'Create Office','url'=>array('create')),
	array('label'=>'Manage Office','url'=>array('admin')),
);
?>

<h1>Offices</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>