<?php
/* @var $this TasksController */
/* @var $model Tasks */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tasks-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>



	<div class="row">
		<?php echo $form->labelEx($model,'task_name'); ?>
		<?php echo $form->textField($model,'task_name',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'task_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'task_description'); ?>
		<?php echo $form->textField($model,'task_description',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'task_description'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->