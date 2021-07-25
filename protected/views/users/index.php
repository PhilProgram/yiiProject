<?php
/* @var $this UsersController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Users',
);

$this->menu=array(
	array('label'=>'Create User', 'url'=>array('create')),
	//array('label'=>'Manage Users', 'url'=>array('admin')),
);
?>

<h1>User Information</h1>

<?php
if(Yii::app()->user->getId()==null)
{
    echo"Please login or create a user";
}
else
$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
