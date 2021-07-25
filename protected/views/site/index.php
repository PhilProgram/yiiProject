<?php
/* @var $this SiteController */
$username = Yii::app()->user->getId();
$this->pageTitle=Yii::app()->name;
?>

<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>


<h1>To Do List</h1>
  <?php if(Yii::app()->user->getId()!=null)

  { echo "<h2>Welcome "; echo Yii::app()->user->getId(); echo "</h2>";}
  ?>




<p>A simple to do list, version 1.0</p>
