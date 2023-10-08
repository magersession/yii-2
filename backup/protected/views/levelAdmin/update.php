<?php
/* @var $this LevelAdminController */
/* @var $model LevelAdmin */

$this->breadcrumbs=array(
	'Level Admins'=>array('index'),
	$model->id_level=>array('view','id'=>$model->id_level),
	'Update',
);

$this->menu=array(
	array('label'=>'List LevelAdmin', 'url'=>array('index')),
	array('label'=>'Create LevelAdmin', 'url'=>array('create')),
	array('label'=>'View LevelAdmin', 'url'=>array('view', 'id'=>$model->id_level)),
	array('label'=>'Manage LevelAdmin', 'url'=>array('admin')),
);
?>

<h1>Update LevelAdmin <?php echo $model->id_level; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>