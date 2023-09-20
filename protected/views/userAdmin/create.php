<?php
/* @var $this UserAdminController */
/* @var $model UserAdmin */

$this->breadcrumbs=array(
	'User Admins'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List UserAdmin', 'url'=>array('index')),
	array('label'=>'Manage UserAdmin', 'url'=>array('admin')),
);
?>

<h1>Create UserAdmin</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>