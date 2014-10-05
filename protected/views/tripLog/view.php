<?php
/* @var $this TripLogController */
/* @var $model TripLog */
?>

<?php
$this->breadcrumbs=array(
	'Trip Logs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TripLog', 'url'=>array('index')),
	array('label'=>'Create TripLog', 'url'=>array('create')),
	array('label'=>'Update TripLog', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TripLog', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TripLog', 'url'=>array('admin')),
);
?>

<h1>View TripLog #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id',
		'driver',
		'vehicle',
		'location',
		'tripday',
		'start_mileage',
		'end_mileage',
		'user',
	),
)); ?>