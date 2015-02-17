<?php
$this->pageTitle="Redrawing 1 | ".Yii::app()->name;

$this->breadcrumbs=array(
	'Cleaning'=>array('cleaning/index'),
	"Redrawing 1",
);
?>
<h1>Redrawing 1</h1>


<p>Okay, the first thing we're going to work on is basic line redrawing. The idea here is to learn how to use the pen tool to create curved and straight lines to rebuild areas that have been erased. Let's focus on only the top bubble with this lesson.</p>

<p align="center"><?php echo CHtml::image(Yii::app()->controller->module->registerImage_tutorial('ReEx1_01.jpg'), "image");?></p>

<p>Step one, obviously you're going to want to erase the Japanese text. Notice how much of a mess it looks now? Ugh, how are we going to fix that?</p>

<p align="center"><?php echo CHtml::image(Yii::app()->controller->module->registerImage_tutorial('ReEx1_02.jpg'), "image1");?></p>

<p>Since the lines are such a wreck we're just going to completely remove them. "But that's going to mean I have to do more work!" Not really, it will actually make things much more simple for you. Only erase the lines that are broken. In the image below I have circled two lines in red. The reason why I left those partial lines is because they're mixed into a background pattern and when you extend them with your pen tool the mixing of the two lines will be easily hidden. Erasing them would likely create more work.</p>

<p align="center"><?php echo CHtml::image(Yii::app()->controller->module->registerImage_tutorial('ReEx1_03.jpg'), "image2");?></p>

<p>Let's break out our pen tool now!</p>


<p>
<b>Source:</b><br>
<a href="http://kawaiitests.pbworks.com/w/page/34410742/Redrawing%201">http://kawaiitests.pbworks.com/w/page/34410742/Redrawing%201</a><br>
</p>