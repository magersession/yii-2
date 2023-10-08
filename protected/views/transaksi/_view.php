<?php
/* @var $this TransaksiController */
/* @var $data Transaksi */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_transaksi')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_transaksi), array('view', 'id'=>$data->id_transaksi)); ?>
	<br />

	<b><?php echo CHtml::encode('Nama Pasien'); ?>:</b>
	<?php echo CHtml::encode($data->setNamaPasien($data->id_pasien)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('keluhan')); ?>:</b>
	<?php echo CHtml::encode($data->keluhan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('diagnosa')); ?>:</b>
	<?php echo CHtml::encode($data->diagnosa); ?>
	<br />

	<?php if($data->diagnosa != '') { ?>
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tindakan')); ?>:</b>
	<?php echo CHtml::encode($data->id_tindakan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_obat')); ?>:</b>
	<?php echo CHtml::encode($data->id_obat); ?> <?php echo CHtml::encode($data->setSatuan($data->id_obat)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('qty')); ?>:</b>
	<?php echo CHtml::encode($data->qty); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('resep')); ?>:</b>
	<?php echo CHtml::encode($data->resep); ?>
	<br />

	<?php } ?>
	
	<?php if(Yii::app()->user->getLevel() == 1) { ?>

	<b><?php echo CHtml::encode($data->getAttributeLabel('total')); ?>:</b>
	<?php echo CHtml::encode($data->total); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bayar')); ?>:</b>
	<?php echo CHtml::encode($data->bayar); ?> 
	<br />

	<?php } ?>

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->setStatus($data->status)); ?>
	<br />

</div>