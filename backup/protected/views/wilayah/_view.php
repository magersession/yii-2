<?php
/* @var $this WilayahController */
/* @var $data Wilayah */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_wilayah')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_wilayah), array('view', 'id'=>$data->id_wilayah)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_wilayah')); ?>:</b>
	<?php echo CHtml::encode($data->nama_wilayah); ?>
	<br />


</div>