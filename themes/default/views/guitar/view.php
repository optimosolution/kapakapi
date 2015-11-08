<?php
/* @var $this GuitarController */
/* @var $model Guitar */
$this->pageTitle = $model->title;
$this->breadcrumbs = array(
    'Guitar/Chords' => array('index'),
    $model->title,
);
?>
<!-- Intro Content -->    
<div class="row">
    <div class="col-lg-12">
        <h2 class="page-header"><?php echo $model->title; ?></h2>
    </div>
    <div class="col-md-6">
        <div class="thumbnail">
            <?php echo Guitar::get_picture_grid($model->id); ?>
        </div>
    </div>
    <div class="col-md-6">
        <div class="thumbnail">
            <?php
            if (isset($model->youtube))
                $this->widget('ext.Yiitube', array('v' => $model->youtube, 'size' => 'small'));
            ?><!-- youtoube -->
        </div>
    </div>
    <div class="col-md-12 text-center">
        <div class="thumbnail">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="caption">
                        <h3><?php echo $model->artist; ?><br>
                            <small><?php echo $model->album; ?> on <?php echo $model->album_year; ?></small>
                        </h3>
                        <p><?php echo $model->description; ?></p>
                        <?php
                        $file = Yii::app()->basePath . '/../uploads/chords/' . $model->chords;
                        if ((is_file($file)) && (file_exists($file))) {
                            echo CHtml::link('<i class="fa fa-download"></i> Download Cord', array('guitar/download', 'id' => $model->id), array('class' => 'btn btn-default', 'target' => '_blank'));
                        }
                        ?>
                    </div>
                </div>
            </div>            
        </div>
    </div>
</div>
<!-- /.row -->