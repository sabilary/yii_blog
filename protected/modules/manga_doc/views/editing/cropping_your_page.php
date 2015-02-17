<?php
$this->pageTitle="Cropping Your Page | ".Yii::app()->name;

$this->breadcrumbs=array(
	'Editing'=>array('editing/index'),
	"Cropping Your Page",
);
?>
<h1>Cropping Your Page</h1>


<p>A lot of the scans you will encounter will need the edges cropped. That could be from a number of reasons. Below is an example of edges that need cropped.</p>

<p align="center"><?php echo CHtml::image(Yii::app()->controller->module->registerImage_tutorial('Cropping_01.jpg'), "image");?></p>

<p>First you'll want to select your Rectangle Marquee tool. You can do it by clicking on it as the picture below shows or by pressing Shift+M.</p>

<p align="center"><?php echo CHtml::image(Yii::app()->controller->module->registerImage_tutorial('Cropping_02.jpg'), "image1");?></p>

<p>The goal here is to select as large of an area as possible(to keep) while still removing the edges that are not a part of the page. That way you're keeping as much of the page as you possible can. It might take you a few tries to get it just right. Here's an example of the type of selection you should be looking for.</p>

<p align="center"><?php echo CHtml::image(Yii::app()->controller->module->registerImage_tutorial('Cropping_03.jpg'), "image2");?></p>

<p>After you're satisfied with the area you have selected you'll want to click "Edit" at the top and scroll down to "Crop". Click it and you'll see the edges of what you selected removed! Now you're working with a pretty good scan!</p>

<p align="center"><?php echo CHtml::image(Yii::app()->controller->module->registerImage_tutorial('Cropping_04.jpg'), "image3");?></p>


<p>
<b>Source:</b><br>
<a href="http://kawaiitests.pbworks.com/w/page/34409024/Cropping%20Your%20Page">http://kawaiitests.pbworks.com/w/page/34409024/Cropping%20Your%20Page</a><br>
</p>