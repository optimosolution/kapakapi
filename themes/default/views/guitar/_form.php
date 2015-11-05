<?php
/* @var $this GuitarController */
/* @var $model Guitar */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'guitar-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'artist'); ?>
		<?php echo $form->textField($model,'artist',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'artist'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'album'); ?>
		<?php echo $form->textField($model,'album',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'album'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'album_year'); ?>
		<?php echo $form->textField($model,'album_year',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'album_year'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'chords'); ?>
		<?php echo $form->textField($model,'chords',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'chords'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'youtube'); ?>
		<?php echo $form->textField($model,'youtube',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'youtube'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'created_on'); ?>
		<?php echo $form->textField($model,'created_on'); ?>
		<?php echo $form->error($model,'created_on'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'created_by'); ?>
		<?php echo $form->textField($model,'created_by'); ?>
		<?php echo $form->error($model,'created_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'modified_on'); ?>
		<?php echo $form->textField($model,'modified_on'); ?>
		<?php echo $form->error($model,'modified_on'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'modified_by'); ?>
		<?php echo $form->textField($model,'modified_by'); ?>
		<?php echo $form->error($model,'modified_by'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->