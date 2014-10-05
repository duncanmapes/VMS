<?php
/* @var $this TripLogController */
/* @var $model TripLog */
?>

<?php
$this->breadcrumbs=array(
	'Trip Logs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TripLog', 'url'=>array('index')),
	array('label'=>'Manage TripLog', 'url'=>array('admin')),
);
?>

<h1>Submit TripLog</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>