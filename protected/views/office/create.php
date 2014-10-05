<?php
/* @var $this OfficeController */
/* @var $model Office */
?>

<?php
$this->breadcrumbs=array(
	'Offices'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Office', 'url'=>array('index')),
	array('label'=>'Manage Office', 'url'=>array('admin')),
);
?>

<h1>Create Office</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>