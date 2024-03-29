<?php
/* @var $this DriverController */
/* @var $model Driver */
?>

<?php
$this->breadcrumbs=array(
	'Drivers'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Driver', 'url'=>array('index')),
	array('label'=>'Create Driver', 'url'=>array('create')),
	array('label'=>'Update Driver', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Driver', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Driver', 'url'=>array('admin')),
);
?>

<h1>View Driver #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id',
		'name',
		'email',
		'password',
	),
)); ?>