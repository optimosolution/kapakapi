<?php
/* @var $this GuitarController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Guitars',
);

$this->menu=array(
	array('label'=>'Create Guitar','url'=>array('create')),
	array('label'=>'Manage Guitar','url'=>array('admin')),
);
?>

<h1>Guitars</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>