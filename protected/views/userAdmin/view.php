<?php
/* @var $this UserAdminController */
/* @var $model UserAdmin */

$this->breadcrumbs=array(
	'User Admins'=>array('index'),
	$model->id_user,
);

$this->menu=array(
	array('label'=>'List UserAdmin', 'url'=>array('index')),
	array('label'=>'Create UserAdmin', 'url'=>array('create')),
	array('label'=>'Update UserAdmin', 'url'=>array('update', 'id'=>$model->id_user)),
	array('label'=>'Delete UserAdmin', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_user),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UserAdmin', 'url'=>array('admin')),
);
?>

<h1>View UserAdmin #<?php echo $model->id_user; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_user',
		'username',
		'password',
		'enkrip',
		'email',
		'inisial',
		'deskripsi',
		'id_level',
	),
)); ?>
