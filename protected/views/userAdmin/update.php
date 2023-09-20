<?php
/* @var $this UserAdminController */
/* @var $model UserAdmin */

$this->breadcrumbs=array(
	'User Admins'=>array('index'),
	$model->id_user=>array('view','id'=>$model->id_user),
	'Update',
);

$this->menu=array(
	array('label'=>'List UserAdmin', 'url'=>array('index')),
	array('label'=>'Create UserAdmin', 'url'=>array('create')),
	array('label'=>'View UserAdmin', 'url'=>array('view', 'id'=>$model->id_user)),
	array('label'=>'Manage UserAdmin', 'url'=>array('admin')),
);
?>

<h1>Update UserAdmin <?php echo $model->id_user; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>