<?php
/* @var $this UserAdminController */
/* @var $model UserAdmin */
/* @var $form CActiveForm */
?>

<div class="form">

	<?php $form = $this->beginWidget('CActiveForm', array(
		'id' => 'user-admin-form',
		// Please note: When you enable ajax validation, make sure the corresponding
		// controller action is handling ajax validation correctly.
		// There is a call to performAjaxValidation() commented in generated controller code.
		// See class documentation of CActiveForm for details on this.
		'enableAjaxValidation' => false,
	)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model, 'username'); ?>
		<?php echo $form->textField($model, 'username', array('size' => 30, 'maxlength' => 30)); ?>
		<?php echo $form->error($model, 'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model, 'password'); ?>
		<?php echo $form->passwordField($model, 'password', array('size' => 50, 'maxlength' => 50)); ?>
		<?php echo $form->error($model, 'password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model, 'password2'); ?>
		<?php echo $form->passwordField($model, 'password2', array('size' => 50, 'maxlength' => 50)); ?>
		<?php echo $form->error($model, 'password2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model, 'email'); ?>
		<?php echo $form->textField($model, 'email', array('size' => 30, 'maxlength' => 30)); ?>
		<?php echo $form->error($model, 'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model, 'inisial'); ?>
		<?php echo $form->textField($model, 'inisial', array('size' => 10, 'maxlength' => 10)); ?>
		<?php echo $form->error($model, 'inisial'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model, 'deskripsi'); ?>
		<?php echo $form->textArea($model, 'deskripsi', array('rows' => 6, 'cols' => 50)); ?>
		<?php echo $form->error($model, 'deskripsi'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

	<?php $this->endWidget(); ?>

</div><!-- form -->