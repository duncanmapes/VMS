<?php
/* @var $this DriverController */
/* @var $model Driver */
?>

<?php
$this->breadcrumbs=array(
	'Drivers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Driver', 'url'=>array('index')),
	array('label'=>'Manage Driver', 'url'=>array('admin')),
);
?>

<h1>Create Driver</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>