<?php
/* @var $this TransaksiController */
/* @var $model Transaksi */

$this->breadcrumbs=array(
	'Transaksis'=>array('index'),
	$model->id_transaksi,
);

$this->menu=array(
	array('label'=>'List Transaksi', 'url'=>array('index')),
	array('label'=>'Create Transaksi', 'url'=>array('create'), 'visible' => Yii::app()->user->getLevel() == 1),
	array('label'=>'Update Transaksi', 'url'=>array('update', 'id'=>$model->id_transaksi), 'visible' => Yii::app()->user->getLevel() == 1),
	array('label'=>'Periksa Pasien', 'url'=>array('periksa', 'id'=>$model->id_transaksi), 'visible' => $model->status != 1),
	array('label'=>'Delete Transaksi', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_transaksi),'confirm'=>'Are you sure you want to delete this item?'), 'visible' => Yii::app()->user->getLevel() == 1),
	array('label'=>'Manage Transaksi', 'url'=>array('admin')),
);
?>

<h1>Lihat Transaksi Pasien <?php echo $model->setNamaPasien($model->id_pasien); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_transaksi',
		'keluhan',
		'diagnosa',
		// tindakan, obat, resep, total, bayar
		array(
			'label' => 'Tindakan',
			'type' => 'raw',
			'value' => $model->setTindakan($model->id_tindakan),
			'visible' => $model->diagnosa != ''
		),
		array(
			'label' => 'Obat',
			'type' => 'raw',
			'value' => $model->setObat($model->id_obat),
			'visible' => $model->diagnosa != ''
		),
		array(
			'label' => 'Qty',
			'type' => 'raw',
			'value' => "$model->qty ". $model->setSatuan($model->id_obat),
			'visible' => $model->diagnosa != ''
		),
		array(
			'label' => 'Resep',
			'type' => 'raw',
			'value' => $model->resep,
			'visible' => $model->diagnosa != ''
		),
		array(
			'label' => 'Total',
			'type' => 'raw',
			'value' => $model->total,
			'visible' => $model->diagnosa != ''
		),
		array(
			'label' => 'Bayar',
			'type' => 'raw',
			'value' => $model->bayar,
			'visible' => $model->diagnosa != ''
		),
		// 
		array(
			'label' => 'Status',
			'type' => 'raw',
			'value' => $model->setStatus($model->status),
		),
	),
)); ?>
