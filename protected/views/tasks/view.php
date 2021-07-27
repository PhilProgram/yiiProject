<?php
/* @var $this TasksController */
/* @var $model Tasks */

$this->breadcrumbs=array(
	'Tasks'=>array('index'),
	$model->task_id,
);

$this->menu=array(
	array('label'=>'List Tasks', 'url'=>array('index')),
	array('label'=>'Create Tasks', 'url'=>array('create')),
	array('label'=>'Update Tasks', 'url'=>array('update', 'id'=>$model->task_id)),
	array('label'=>'Delete Tasks', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->task_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tasks', 'url'=>array('admin')),
);
?>

<h1>View Tasks #<?php echo $model->task_id; ?></h1>

<?php

// Check if user is logged in and task model login is same is app login 
if (Yii::app()->user->getId()!=null && $model->user_login==Yii::app()->user->getId())
{
$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'task_id',
		'user_login',
		'task_name',
		'task_description',
	),
));} ?>
