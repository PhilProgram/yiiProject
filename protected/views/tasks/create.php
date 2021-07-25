<?php
/* @var $this TasksController */
/* @var $model Tasks */

$this->breadcrumbs=array(
	'Tasks'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Tasks', 'url'=>array('index')),
	array('label'=>'Manage Tasks', 'url'=>array('admin')),
);
?>

<h1>Create Tasks</h1>

<?php
if(Yii::app()->user->getId()==null)
{
    echo "Please login or create a user";
}
else
$this->renderPartial('_form', array('model'=>$model)); ?>