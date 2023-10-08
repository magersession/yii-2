<?php
/* @var $this TransaksiController */
/* @var $model Transaksi */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'transaksi-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	
	<div class="row">
		<?php echo $form->labelEx($model,'keluhan'); ?>
		<?php echo $form->textField($model,'keluhan'); ?>
		<?php echo $form->error($model,'keluhan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'diagnosa'); ?>
		<?php echo $form->textField($model,'diagnosa',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'diagnosa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_tindakan'); ?>
		<?php
		$list = CHtml::listData($tindakan, 'id_tindakan', 'keterangan');
		echo $form->dropDownList($model, 'id_tindakan', $list);
		?>
		<?php echo $form->error($model,'id_tindakan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_obat'); ?>
		<?php
		$list = CHtml::listData($obat, 'id_obat', 'nama_obat');
		echo $form->dropDownList($model, 'id_obat', $list);
		?>
		<?php echo $form->error($model,'id_obat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'qty'); ?>
		<?php echo $form->textField($model,'qty'); ?>
		<?php echo $form->error($model,'qty'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'resep'); ?>
		<?php
			$levelArr = array('1x1' => '1x1', '2x1' => '2x1', '3x1' => '3x1');
			echo $form->dropDownList($model, 'resep', $levelArr);
		?>
		<?php echo $form->error($model,'resep'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->