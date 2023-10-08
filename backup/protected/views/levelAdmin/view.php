<?php
/* @var $this LevelAdminController */
/* @var $model LevelAdmin */

$this->breadcrumbs=array(
	'Level Admins'=>array('index'),
	$model->id_level,
);

$this->menu=array(
	array('label'=>'List LevelAdmin', 'url'=>array('index')),
	array('label'=>'Create LevelAdmin', 'url'=>array('create')),
	array('label'=>'Update LevelAdmin', 'url'=>array('update', 'id'=>$model->id_level)),
	array('label'=>'Delete LevelAdmin', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_level),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage LevelAdmin', 'url'=>array('admin')),
);
?>

<h1>View LevelAdmin #<?php echo $model->id_level; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_level',
		'level',
	),
)); ?>
