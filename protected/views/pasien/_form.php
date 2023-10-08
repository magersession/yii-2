<?php
/* @var $this PasienController */
/* @var $model Pasien */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pasien-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_pasien'); ?>
		<?php echo $form->textField($model,'nama_pasien',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nama_pasien'); ?>
	</div>

	<div class="row">
	<?php echo $form->labelEx($model, 'jenis_kelamin'); ?>
		<?php
		$levelArr = array(0 => 'Laki-laki', 1 => 'Perempuan');
		echo $form->dropDownList($model, 'jenis_kelamin', $levelArr);
		?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tgl_lahir'); ?>
		<?php echo $form->dateField($model,'tgl_lahir'); ?>
		<?php echo $form->error($model,'tgl_lahir'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alamat'); ?>
		<?php echo $form->textField($model,'alamat',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'alamat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'no_telepon'); ?>
		<?php echo $form->textField($model,'no_telepon',array('size'=>14,'maxlength'=>14)); ?>
		<?php echo $form->error($model,'no_telepon'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->