<?php
/* @var $this CobaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cobas',
);

$this->menu=array(
	array('label'=>'Create Coba', 'url'=>array('create')),
	array('label'=>'Manage Coba', 'url'=>array('admin')),
);
?>

<h1>Cobas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
