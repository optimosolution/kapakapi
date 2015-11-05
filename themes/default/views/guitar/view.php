<?php
/* @var $this GuitarController */
/* @var $model Guitar */
$this->pageTitle = $model->title;
$this->breadcrumbs = array(
    'Guitar/Chords' => array('index'),
    $model->title,
);
?>
<div class="row">
    <div class="col-lg-12">
        <h2 class="page-header"><?php echo $model->title; ?></h2>
    </div>
    <div class="col-md-12 text-center">
        <div class="thumbnail">
            <?php echo Guitar::get_picture_grid($model->id); ?>
            <div class="row">
                <div class="col-md-4 text-left">
                    <?php
                    if (isset($model->youtube))
                        $this->widget('ext.Yiitube', array('v' => $model->youtube));
                    ?><!-- youtoube -->
                </div>
                <div class="col-md-8 text-center">
                    <div class="caption">
                        <h3><?php echo $model->artist; ?><br>
                            <small><?php echo $model->album; ?> on <?php echo $model->album_year; ?></small>
                        </h3>
                        <p><?php echo $model->description; ?></p>
                        <?php echo CHtml::link('<i class="fa fa-download"></i> Download Cord', array('guitar/download', 'id' => $model->id), array('class' => 'btn btn-default', 'target' => '_blank')); ?>
                    </div>
                </div>
            </div>            
        </div>
    </div>
</div>