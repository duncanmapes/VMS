<?php
/* @var $this OfficeController */
/* @var $model Office */
?>

<?php
$this->breadcrumbs=array(
	'Offices'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Office', 'url'=>array('index')),
	array('label'=>'Create Office', 'url'=>array('create')),
	array('label'=>'Update Office', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Office', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Office', 'url'=>array('admin')),
);
?>

<h1>View Office #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id',
		'office_name',
	),
)); ?>