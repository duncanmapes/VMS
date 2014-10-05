<?php
/* @var $this OfficeController */
/* @var $model Office */
?>

<?php
$this->breadcrumbs=array(
	'Offices'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Office', 'url'=>array('index')),
	array('label'=>'Create Office', 'url'=>array('create')),
	array('label'=>'View Office', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Office', 'url'=>array('admin')),
);
?>

    <h1>Update Office <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>