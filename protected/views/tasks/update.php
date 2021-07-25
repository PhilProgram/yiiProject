<?php
/* @var $this TasksController */
/* @var $model Tasks */

$this->breadcrumbs=array(
	'Tasks'=>array('index'),
	$model->task_id=>array('view','id'=>$model->task_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Tasks', 'url'=>array('index')),
	array('label'=>'Create Tasks', 'url'=>array('create')),
	array('label'=>'View Tasks', 'url'=>array('view', 'id'=>$model->task_id)),
	array('label'=>'Manage Tasks', 'url'=>array('admin')),
);
?>

<h1>Update Tasks <?php echo $model->task_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>