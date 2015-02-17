<?php
$this->pageTitle="Leveling | ".Yii::app()->name;

$this->breadcrumbs=array(
	'Editing'=>array('editing/index'),
	"Leveling",
);
?>
<h1>Leveling</h1>


<p>Now we're moving onto something that you'll have to do with each and every page you edit. It's very important to producing quality looking scans. Most original scans look terribly dull and unimpressive. They lack the clarity that they should. So in order to fix that we use a process called Leveling! It's really quite simple actually.</p>

<p><b>Example of a page that needs leveling. (Notice how the black areas are gray?)</b></p>
<p align="center"><?php echo CHtml::image(Yii::app()->controller->module->registerImage_tutorial('Level_01.jpg'), "image");?></p>

<p>The first thing you'll want to do is make a duplicate copy of your layer. You can do it two ways. I find the most simple is to press CTRL+A then CTRL+C and finally CTRL+V. That select the image, copy the image and finally paste the image. The second and probably more correct way is to go to your Layer Window(Picture 1), Right click and select "Duplicate Layer"(Picture 2). This will accomplish the exact same thing. :)</p>

<p align="center">
    <?php echo CHtml::image(Yii::app()->controller->module->registerImage_tutorial('Level_02.jpg'), "image1");?>
    <?php echo CHtml::image(Yii::app()->controller->module->registerImage_tutorial('Level_03.jpg'), "image2");?>
</p>

<p>Now let's create what's called an Adjustment Layer. In your Layers Window, you should now see two Layers. Left click the bottom one so it's highlighted like the image below. Then you'll want to click the Half Moon that the red arrow in the image below points to. When the menu appears click. "Levels...". If you don't have the Adjustments Window open already, this should automatically open it.</p>

<p align="center"><?php echo CHtml::image(Yii::app()->controller->module->registerImage_tutorial('Level_04.jpg'), "image3");?></p>

<p>Now you'll see a third layer appear between the two duplicate layers. This is what you'll use to level the page. First though you'll want to click the small black eye to the left of the top level. It has a red arrow pointed at it in the image below. This is called the Layer Visibility. It should remove the black eye and make the layer invisible. Nothing changes obviously because you have a duplicate layer below it! So you won't see a difference in the actual image (YET!).</p>

<p align="center"><?php echo CHtml::image(Yii::app()->controller->module->registerImage_tutorial('Level_05.jpg'), "image4");?></p>

<p>Now use your Adjustments Window to start adjusting. :) The goal here is to move the left arrow (circled in red) to the right so it darkens the blacks on the page to where they're a solid black and move the right arrow(circled in yellow) to the left so it lightens the whites and the areas that are supposed to be white are a solid white and have no speckles of gray mixed in.  Be careful not to go too far past that point though or else you'll notice the page begin to look "burnt" or "over-leveled" and it produces bad results. Finding the right balance is trial and error. Every page could be different. But you want to get to that point where 5 more in either direction is too much or too little in the shadow and highlight boxes(circled in blue and green respectively). <b><i>Note: Remember the eye you click in the last step to make the top layer invisible? Click it off and on to see the difference in the original and your new and improved leveling job. :)</i></b></p>

<p align="center"><?php echo CHtml::image(Yii::app()->controller->module->registerImage_tutorial('Level_07.jpg'), "image5");?></p>

<p>Below you'll see the difference in the leveled version on the left and the original version on the right. See how much better it looks!!!</p>

<p align="center"><?php echo CHtml::image(Yii::app()->controller->module->registerImage_tutorial('Level_08.jpg'), "image6");?></p>


<p>
<b>Source:</b><br>
<a href="http://kawaiitests.pbworks.com/w/page/34409488/Leveling">http://kawaiitests.pbworks.com/w/page/34409488/Leveling</a><br>
</p>