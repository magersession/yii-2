<?php
/* @var $this LevelAdminController */
/* @var $model LevelAdmin */

$this->breadcrumbs=array(
	'Level Admins'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List LevelAdmin', 'url'=>array('index')),
	array('label'=>'Manage LevelAdmin', 'url'=>array('admin')),
);
?>

<h1>Create LevelAdmin</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>