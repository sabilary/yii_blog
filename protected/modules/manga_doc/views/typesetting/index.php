<?php
$this->pageTitle='Typesetting | '.Yii::app()->name;

$this->breadcrumbs=array(
	'Typesetting',
);
?>
<h1>Typesetting</h1>

<?php $this->widget('zii.widgets.CMenu',array(
    'items'=>array(
        array('label'=>"Do's and Don'ts", 'url'=>array('do_and_dont')),
        array('label'=>'Font Lists', 'url'=>array('font_lists')),
        array('label'=>'How Do I Know Which Fonts Go Where', 'url'=>array('how_do_i_know_which_fonst_go_where')),
        array('label'=>'Shaping and Placing', 'url'=>array('shaping_and_placing')),
        array('label'=>'Stroking', 'url'=>array('stroking')),
        array('label'=>'Which Type of Fonts', 'url'=>array('which_type_of_fonts')),
    ),
)); ?>