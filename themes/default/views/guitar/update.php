<?php
/* @var $this GuitarController */
/* @var $model Guitar */

$this->breadcrumbs=array(
	'Guitars'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Guitar', 'url'=>array('index')),
	array('label'=>'Create Guitar', 'url'=>array('create')),
	array('label'=>'View Guitar', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Guitar', 'url'=>array('admin')),
);
?>

<h1>Update Guitar <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>