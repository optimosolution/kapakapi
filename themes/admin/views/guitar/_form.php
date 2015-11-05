<?php
/* @var $this GuitarController */
/* @var $model Guitar */
/* @var $form TbActiveForm */
?>
<?php
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id' => 'guitar-form',
    // Please note: When you enable ajax validation, make sure the corresponding
    // controller action is handling ajax validation correctly.
    // There is a call to performAjaxValidation() commented in generated controller code.
    // See class documentation of CActiveForm for details on this.
    'enableAjaxValidation' => false,
    'htmlOptions' => array('enctype' => 'multipart/form-data')
        ));
?>
<p class="help-block">Fields with <span class="required">*</span> are required.</p>
<?php echo $form->errorSummary($model); ?>
<?php echo $form->textFieldControlGroup($model, 'title', array('span' => 5, 'maxlength' => 250)); ?>
<?php echo $form->textAreaControlGroup($model, 'description', array('rows' => 2, 'span' => 5)); ?>
<?php echo $form->textFieldControlGroup($model, 'artist', array('span' => 5, 'maxlength' => 250)); ?>
<?php echo $form->textFieldControlGroup($model, 'album', array('span' => 5, 'maxlength' => 150)); ?>
<?php echo $form->textFieldControlGroup($model, 'album_year', array('span' => 5, 'maxlength' => 4)); ?>
<div class="row-fluid">
    <div class="span5">
        <?php echo $form->fileFieldControlGroup($model, 'chords', array('maxlength' => 255, 'class' => 'span12')); ?>
    </div>
</div>
<?php echo $form->textFieldControlGroup($model, 'youtube', array('span' => 5, 'maxlength' => 50)); ?>
<?php echo $form->dropDownListControlGroup($model, 'status', array('1' => 'Active', '0' => 'Inactive'), array('class' => 'span5')); ?>

<div class="form-actions">
    <?php
    echo TbHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array(
        'color' => TbHtml::BUTTON_COLOR_PRIMARY,
        'size' => TbHtml::BUTTON_SIZE_LARGE,
    ));
    ?>
</div>

<?php $this->endWidget(); ?>