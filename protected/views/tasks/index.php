<?php
/* @var $this TasksController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tasks',
);

$this->menu=array(
	array('label'=>'Create Tasks', 'url'=>array('create')),
	array('label'=>'Manage Tasks', 'url'=>array('admin')),
);
?>

<h1>Tasks</h1>

<?php
if(Yii::app()->user->getId()==null)
{
    echo "Please login or create a user";
}
else
$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
