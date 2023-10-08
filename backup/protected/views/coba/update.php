<?php
/* @var $this CobaController */
/* @var $model Coba */

$this->breadcrumbs=array(
	'Cobas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Coba', 'url'=>array('index')),
	array('label'=>'Create Coba', 'url'=>array('create')),
	array('label'=>'View Coba', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Coba', 'url'=>array('admin')),
);
?>

<h1>Update Coba <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>