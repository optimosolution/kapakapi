<?php
/* @var $this GuitarController */
/* @var $dataProvider CActiveDataProvider */
$this->pageTitle = 'Guitar/Chords';
$this->breadcrumbs = array(
    'Guitar/Chords',
);
?>
<!-- Intro Content -->
<div class="row">
    <div class="col-md-12">
        <?php
        $this->widget('zii.widgets.grid.CGridView', array(
            'id' => 'guitar-grid',
            'dataProvider' => $model->search_fronend(),
            'filter' => $model,
            'htmlOptions' => array('class' => ''),
            'itemsCssClass' => 'table table-bordered table-condensed table-hover table-responsive table-striped',
            'template' => '{items}{summary}{pager}',
            'pager' => array(
                'htmlOptions' => array(
                    'class' => 'pagination',
                ),
                'header' => '',
                'selectedPageCssClass' => 'active',
            ),
            'pagerCssClass' => 'widget-footer',
            'columns' => array(
                array(
                    'name' => 'title',
                    'type' => 'raw',
                    'value' => 'CHtml::link($data->title,array("view","id"=>$data->id))',
                    'filter' => CHtml::activeTextField($model, 'title', array('class' => 'form-control')),
                    'htmlOptions' => array('style' => "text-align:left;", 'title' => 'Title'),
                ),
                array(
                    'name' => 'artist',
                    'type' => 'raw',
                    'value' => '$data->artist',
                    'filter' => CHtml::activeTextField($model, 'artist', array('class' => 'form-control')),
                    'htmlOptions' => array('style' => "text-align:left;width:200px;", 'title' => 'Artist'),
                ),
                array(
                    'name' => 'album',
                    'type' => 'raw',
                    'value' => '$data->album',
                    'filter' => CHtml::activeTextField($model, 'album', array('class' => 'form-control')),
                    'htmlOptions' => array('style' => "text-align:left;width:200px;", 'title' => 'Album'),
                ),
                array(
                    'name' => 'album_year',
                    'type' => 'raw',
                    'value' => '$data->album_year',
                    'filter' => CHtml::activeTextField($model, 'album_year', array('class' => 'form-control')),
                    'htmlOptions' => array('style' => "text-align:center;width:100px;", 'title' => 'Year'),
                ),
            ),
        ));
        ?>
    </div>
</div>
<!-- /.row -->