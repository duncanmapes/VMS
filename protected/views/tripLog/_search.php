<?php
/* @var $this TripLogController */
/* @var $model TripLog */
/* @var $form CActiveForm */
?>

<div class="wide form">

    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

                    <?php echo $form->textFieldControlGroup($model,'id',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'driver',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'vehicle',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'location',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'tripday',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'start_mileage',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'end_mileage',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'user',array('span'=>5,'maxlength'=>45)); ?>

        <div class="form-actions">
        <?php echo TbHtml::submitButton('Search',  array('color' => TbHtml::BUTTON_COLOR_PRIMARY,));?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->