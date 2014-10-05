<?php
/* @var $this TripLogController */
/* @var $model TripLog */
/* @var $form TbActiveForm */
?>

<div class="form">

    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'trip-log-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

    <p class="help-block">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

            <?php echo $form->textFieldControlGroup($model,'driver',array('span'=>5)); ?>

            <?php //echo $form->textFieldControlGroup($model,'vehicle',array('span'=>5)); ?>
            
            <?php echo $form->dropDownListControlGroup($model, 'vehicle',  CHtml::listData(Vehicle::model()->findAll(), 'id', 'tag')); ?>

            <?php echo $form->textFieldControlGroup($model,'location',array('span'=>5)); ?>

            <?php echo $form->textFieldControlGroup($model,'tripday',array('span'=>5)); ?>

            <?php echo $form->textFieldControlGroup($model,'start_mileage',array('span'=>5)); ?>

            <?php echo $form->textFieldControlGroup($model,'end_mileage',array('span'=>5)); ?>

            <?php echo $form->textFieldControlGroup($model,'user',array('span'=>5,'maxlength'=>45)); ?>

        <div class="form-actions">
        <?php echo TbHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array(
		    'color'=>TbHtml::BUTTON_COLOR_PRIMARY,
		    'size'=>TbHtml::BUTTON_SIZE_LARGE,
		)); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->