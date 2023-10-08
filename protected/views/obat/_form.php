<?php
/* @var $this ObatController */
/* @var $model Obat */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'obat-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_obat'); ?>
		<?php echo $form->textField($model,'nama_obat',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nama_obat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model, 'satuan'); ?>
		<?php
		$satuanArr = array(0 => 'Tablet', 1 => 'Botol', 2 => 'Kaplet');
		echo $form->dropDownList($model, 'satuan', $satuanArr);
		?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'harga'); ?>
		<?php echo $form->textField($model,'harga'); ?>
		<?php echo $form->error($model,'harga'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jumlah'); ?>
		<?php echo $form->textField($model,'jumlah'); ?>
		<?php echo $form->error($model,'jumlah'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'exp_date'); ?>
		<?php echo $form->dateField($model,'exp_date'); ?>
		<?php echo $form->error($model,'exp_date'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->