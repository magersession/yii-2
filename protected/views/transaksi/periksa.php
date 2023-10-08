<?php
/* @var $this TransaksiController */
/* @var $model Transaksi */

$this->breadcrumbs=array(
	'Transaksis'=>array('index'),
	$model->id_transaksi=>array('view','id'=>$model->id_transaksi),
	'Update',
);

$this->menu=array(
	array('label'=>'List Transaksi', 'url'=>array('index')),
	array('label'=>'View Transaksi', 'url'=>array('view', 'id'=>$model->id_transaksi)),
);
?>

<h1>Periksa Pasien <?php echo $model->setNamaPasien($model->id_pasien); ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model,'tindakan'=>$tindakan,'obat'=>$obat)); ?>