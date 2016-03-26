<!-- Marketing Icons Section -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            <!--Guitar/Chords-->
            Recommended
        </h1>
    </div>
    <div class="col-md-12">
        <?php
        $this->widget('zii.widgets.CListView', array(
            'dataProvider' => $dataProvider,
            'template' => '{items}{pager}',
            'itemView' => '_view',
            'pager' => array(
                'header' => '',
                'prevPageLabel' => '<i class="fa fa-backward"></i>',
                'nextPageLabel' => '<i class="fa fa-forward"></i>',
                'firstPageLabel' => '<i class="fa fa-fast-backward"></i>',
                'lastPageLabel' => '<i class="fa fa-fast-forward"></i>',
                'selectedPageCssClass' => 'active', //default "selected"
                'maxButtonCount' => 10, // defalut 10  
                'htmlOptions' => array(
                    'class' => 'pagination',
                    'style' => '',
                    'id' => '',
                ),
            ),
        ));
        ?>
    </div>
</div>
<!-- /.row -->                       