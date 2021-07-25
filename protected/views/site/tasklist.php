<?php
/* @var $this SiteController */
/* @var $model Todolist */

$this->pageTitle=Yii::app()->name . ' - Tasks';
$this->breadcrumbs=array(
    'Tasks',
);
?>
<h1>About</h1>
<form method="post">
    <input type="submit" name="button1"
           class="button" value="Button1" />

    <input type="submit" name="button2"
           class="button" value="Button2" />
</form>
<?php
$this->widget('zii.widgets.jui.CJuiButton',array(
    'buttonType'=>'button',
    'name'=>'btnSave',
    'caption'=>'Save',
    'onclick'=>new CJavaScriptExpression('function(){alert("Save button clicked"); this.blur(); return false;}'),
));
?>
<?php $this->widget('zii.widgets.grid.CGridView', array(
        'id'=>'all-my-tasks-grid',
        'dataProvider'=>Todolist::model()->allUncompleted(),
        'summaryText' => '<button id="mark-complete">Mark Completed</button>&nbsp;<button id="delete-tasks">Delete Tasks</button>&nbsp;',
        'selectableRows'=>0,
        'columns'=>array(
            array(
                'id'=>'id',
                'class'=>'CCheckBoxColumn',
                'selectableRows' => '50',
            ),
            array(
                'name' => 'title',
                'htmlOptions'=> array('align'=>'center'),
            ),
            array(
                'name' => 'description',

            ),
            array(
                'name' => 'Due Date',
                'value' => '$data->dueOn'

            ),


        ),
    )); ?>




