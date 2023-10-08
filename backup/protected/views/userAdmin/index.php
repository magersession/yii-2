<?php
/* @var $this UserAdminController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'User Admins',
);

$this->menu=array(
	array('label'=>'Create UserAdmin', 'url'=>array('create')),
	array('label'=>'Manage UserAdmin', 'url'=>array('admin')),
);
?>

<h1>User Admins</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
