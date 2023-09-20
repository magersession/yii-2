<?php
/* @var $this CobaController */
/* @var $model Coba */

$this->breadcrumbs=array(
	'Cobas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Coba', 'url'=>array('index')),
	array('label'=>'Create Coba', 'url'=>array('create')),
	array('label'=>'Update Coba', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Coba', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Coba', 'url'=>array('admin')),
);
?>

<h1>View Coba #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nama',
		'nama_pacar',
	),
)); ?>
