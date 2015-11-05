<?php
/* @var $this GuitarController */
/* @var $model Guitar */

$this->breadcrumbs=array(
	'Guitars'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Guitar', 'url'=>array('index')),
	array('label'=>'Manage Guitar', 'url'=>array('admin')),
);
?>

<h1>Create Guitar</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>