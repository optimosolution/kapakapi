<?php
/* @var $this GuitarController */
/* @var $data Guitar */
?>
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <?php
    if (isset($data->youtube))
        $this->widget('ext.Yiitube', array('v' => $data->youtube, 'size' => 'extrasmall'));
    ?><!-- youtoube -->
    <?php echo CHtml::link(CHtml::encode(mb_substr($data->title, 0, 25, 'UTF-8')), array('guitar/view', 'id' => $data->id)); ?><br/>
    <?php
    //if (isset($data->artist))
    echo 'by <span class="text-danger">' . $data->artist . '</span>';
    ?>
</div>