<?php
/* @var $this TripLogController */
/* @var $data TripLog */
?>

<div class="view">

    	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('driver')); ?>:</b>
	<?php echo CHtml::encode($data->driver0->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vehicle')); ?>:</b>
	<?php echo CHtml::encode($data->vehicle); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('office')); ?>:</b>
	<?php echo CHtml::encode($data->office); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tripday')); ?>:</b>
	<?php echo CHtml::encode($data->tripday); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('start_mileage')); ?>:</b>
	<?php echo CHtml::encode($data->start_mileage); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('end_mileage')); ?>:</b>
	<?php echo CHtml::encode($data->end_mileage); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('start_location')); ?>:</b>
    <?php echo CHtml::encode($data->start_location); ?>
    <br />

<b><?php echo CHtml::encode($data->getAttributeLabel('destination')); ?>:</b>
    <?php echo CHtml::encode($data->destination); ?>
    <br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('user')); ?>:</b>
	<?php echo CHtml::encode($data->user); ?>
	<br />

	*/ ?>

</div>