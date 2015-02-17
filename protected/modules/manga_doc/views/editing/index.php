<?php
$this->pageTitle='Editing | '.Yii::app()->name;

$this->breadcrumbs=array(
	'Editing',
);
?>
<h1>Editing</h1>

<?php $this->widget('zii.widgets.CMenu',array(
    'items'=>array(
        array('label'=>"Convert Your Image to Grayscale", 'url'=>array('convert_your_image_to_grayscale')),
        array('label'=>'Crooked Page', 'url'=>array('crooked_page')),
        array('label'=>'Cropping Your Page', 'url'=>array('cropping_your_page')),
        array('label'=>'Leveling', 'url'=>array('leveling')),
        array('label'=>'Upside Down Scan', 'url'=>array('upside_down_scan')),
    ),
)); ?>
