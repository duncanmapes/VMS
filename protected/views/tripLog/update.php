<?php
/* @var $this TripLogController */
/* @var $model TripLog */
?>

<?php
$this->breadcrumbs=array(
	'Trip Logs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TripLog', 'url'=>array('index')),
	array('label'=>'Create TripLog', 'url'=>array('create')),
	array('label'=>'View TripLog', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TripLog', 'url'=>array('admin')),
);
?>

    <h1>Update TripLog <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>