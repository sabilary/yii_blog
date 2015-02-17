<?php
$this->pageTitle="Stroking | ".Yii::app()->name;

$this->breadcrumbs=array(
	'Typesetting'=>array('typesetting/index'),
	"Stroking",
);
?>
<h1>Stroking</h1>


<p><b>Stroke it baby!</b></p>

<p>So occasionally I get a question about how to put a stroke around a SFX or text. Below I'll explain how to do it.</p>

<table align="center">
    <tr>
        <td><?php echo CHtml::image(Yii::app()->controller->module->registerImage_tutorial('05-001.png'), "image1");?></td>
        <td><?php echo CHtml::image(Yii::app()->controller->module->registerImage_tutorial('05-002.png'), "image2");?></td>
    </tr>
</table>

<p>There's the example. So first thing you're going to want to do is typeset the word. In this situation you're not going to be able to see the word just yet because it's white on white, but don't worry it's there! :p</p>

<p>After you typeset the word you'll be looking for that little tiny icon that's outlined in red in the bottom right corner of this next image. Once you click that a menu will popup and you'll want to click "Stroke".</p>

<p align="center"><?php echo CHtml::image(Yii::app()->controller->module->registerImage_tutorial('05-003.png'), "image3");?></p>

<p>Now I'll explain the box that appears to adjust the settings of the stroke you're going to use. </p>

<p>
#1. This actually controls the thickness of your stroke. The higher the number the fatter the outline of the text will be. In the example we have above it's 4 pixels. Most scanlations groups use 2-4 pixels as their standard size.<br>
#2. There's three options here. For scanlation purposes you're typically going to be using "Outside". This means that the stroke you'll be placing will be on the outside the the text.<br>
#3. This is how solid your stroke will be. If you want the background behind it to fade through you can adjust this.<br>
#4. This controls what type of stroke you'll have. For a simple stroke like this we'll stick with Color. You also have the choice of gradient (not used often in scanlation) and Pattern(which you'll occasionally use and I'll explain later.<br>
#5. This is obviously the color of the stroke you want to use.
</p>

<p align="center"><?php echo CHtml::image(Yii::app()->controller->module->registerImage_tutorial('05-004.png'), "image4");?></p>

<p>After you get your settings the way you want them select OK and you should have achieved the desired effect. </p>


<p>
<b>Source:</b><br>
<a href="http://kawaiitests.pbworks.com/w/page/74413874/Stroking">http://kawaiitests.pbworks.com/w/page/74413874/Stroking</a><br>
</p>