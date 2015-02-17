<?php
$this->pageTitle='Cleaning | '.Yii::app()->name;

$this->breadcrumbs=array(
	'Cleaning',
);
?>
<h1>Cleaning</h1>

<?php $this->widget('zii.widgets.CMenu',array(
    'items'=>array(
        array('label'=>"Basic Areas", 'url'=>array('basic_areas')),
        array('label'=>'Cloning 1', 'url'=>array('#')),
        array('label'=>'Cloning 2', 'url'=>array('#')),
        array('label'=>'Redrawing', 'url'=>array('redrawing')),
        array('label'=>'Redrawing 1', 'url'=>array('redrawing_1')),
        array('label'=>'Redrawing 2', 'url'=>array('#')),
    ),
)); ?>