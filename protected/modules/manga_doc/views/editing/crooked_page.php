<?php
$this->pageTitle="Crooked Page | ".Yii::app()->name;

$this->breadcrumbs=array(
	'Editing'=>array('editing/index'),
	"Crooked Page",
);
?>
<h1>Crooked Page</h1>


<p>Does your scan look crooked like the image below? If so we're going to have to straighten it up. If you have your hands on a pretty good looking set of scans, then that means your boss (me) loves you! :)</p>

<p align="center"><b>Example of a Crooked Page</b></p>
<p align="center"><?php echo CHtml::image(Yii::app()->controller->module->registerImage_tutorial('Leveling_03.jpg'), "image");?></p>

<p>First you'll want to select your "Ruler" tool. You can find it with the help of the pictures below.</p>
<p align="center"><?php echo CHtml::image(Yii::app()->controller->module->registerImage_tutorial('Leveling_05.jpg'), "image1");?></p>

<p>Next look for something on the page you think <b>should be</b> perfectly horizontal or perfectly vertical. I almost always use a panel edge. Below you'll see it circled in green. Obviously this line should run perfectly vertical but because the page was scanned crooked it does not. <b><i>Note: The longer of a line you choose to use, the better. It will provide better accuracy.</i></b></p>
<p align="center"><?php echo CHtml::image(Yii::app()->controller->module->registerImage_tutorial('Leveling_08.jpg'), "image2");?></p>

<p>After you've located something to use as your straight line, use your ruler tool to click at one end of your straight line and then while holding your mouse button down drag the ruler tool to the other end of the line. You should get something like this.</p>
<p align="center"><?php echo CHtml::image(Yii::app()->controller->module->registerImage_tutorial('Leveling_06.jpg'), "image3");?></p>

<p>You should see a + mark at each end of the Ruler line. You're going to want to zoom WAY in on the + symbol and drag the + symbol to the very edge of the panel by left clicking and holding down the mouse button as you drag it. You should be able to accomplish something like the below picture. Repeat this process to the other + symbol as well. <u>If you change tools to zoom in the Ruler line will disappear</u>, <b>DO NOT PANIC</b>. It return as soon as you reselect the ruler tool.</p>
<p align="center"><?php echo CHtml::image(Yii::app()->controller->module->registerImage_tutorial('Leveling_07.jpg'), "image4");?></p>

<p>Now you should have the ruler tools line running perfectly across the box edge. It will probably be hard to see the Ruler line now, but you should still be able to see the + symbols at each end. Select "Image" at the top of Photoshop (Alt+I), move down to "Image Rotation", slide over to "Arbitrary..." and click it. A small box will pop up titled "Rotate Canvas", simply click OK and do not touch any of the settings. Watch as your page magically become straight! :)</p>
<p align="center"><?php echo CHtml::image(Yii::app()->controller->module->registerImage_tutorial('Leveling_09.jpg'), "image5");?></p>


<p>
<b>Source:</b><br>
<a href="http://kawaiitests.pbworks.com/w/page/34408889/Crooked%20Page">http://kawaiitests.pbworks.com/w/page/34408889/Crooked%20Page</a><br>
</p>