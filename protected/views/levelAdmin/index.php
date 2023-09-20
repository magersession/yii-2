<?php
/* @var $this LevelAdminController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Level Admins',
);

$this->menu=array(
	array('label'=>'Create LevelAdmin', 'url'=>array('create')),
	array('label'=>'Manage LevelAdmin', 'url'=>array('admin')),
);
?>

<h1>Level Admins</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
