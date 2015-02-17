<?php
/* @var $this DefaultController */

$this->breadcrumbs=array(
	$this->module->id,
);
?>
<h1><?php echo $this->uniqueId . '/' . $this->action->id; ?></h1>

<p>
This is the view content for action "<?php echo $this->action->id; ?>".
The action belongs to the controller "<?php echo get_class($this); ?>"
in the "<?php echo $this->module->id; ?>" module.
</p>
<p>
You may customize this page by editing <tt><?php echo __FILE__; ?></tt>
</p>

<h2>Index:</h2>
<?php $this->widget('zii.widgets.CMenu',array(
    'items'=>array(
        array('label'=>'FrontPage', 'url'=>array('front_page/index')),
        array('label'=>'Cleaning', 'url'=>array('cleaning/index')),
        array('label'=>'Editing', 'url'=>array('editing/index')),
        array('label'=>'Typesetting', 'url'=>array('typesetting/index')),
    ),
)); ?>