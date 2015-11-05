<?php
/* @var $this GuitarController */
/* @var $data Guitar */
?>

<div class="view">

    	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('artist')); ?>:</b>
	<?php echo CHtml::encode($data->artist); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('album')); ?>:</b>
	<?php echo CHtml::encode($data->album); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('album_year')); ?>:</b>
	<?php echo CHtml::encode($data->album_year); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('chords')); ?>:</b>
	<?php echo CHtml::encode($data->chords); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('youtube')); ?>:</b>
	<?php echo CHtml::encode($data->youtube); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_on')); ?>:</b>
	<?php echo CHtml::encode($data->created_on); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_by')); ?>:</b>
	<?php echo CHtml::encode($data->created_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modified_on')); ?>:</b>
	<?php echo CHtml::encode($data->modified_on); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modified_by')); ?>:</b>
	<?php echo CHtml::encode($data->modified_by); ?>
	<br />

	*/ ?>

</div>