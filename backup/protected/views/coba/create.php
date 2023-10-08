<?php
/* @var $this CobaController */
/* @var $model Coba */

$this->breadcrumbs=array(
	'Cobas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Coba', 'url'=>array('index')),
	array('label'=>'Manage Coba', 'url'=>array('admin')),
);
?>

<h1>Create Coba</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>