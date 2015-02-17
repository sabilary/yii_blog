<?php
/* @var $this About_jqueryController */
$this->pageTitle='About Jquery | '.Yii::app()->name;

$this->breadcrumbs=array(
	'About Jquery',
);
?>
<h1>About jQuery</h1>

<p>Getting started with jQuery can be easy or challenging, depending on your experience with JavaScript, HTML, CSS, and programming concepts in general. In addition to these articles, you can read about the <a href="https://jquery.org/history/">history of jQuery</a> and the <a href="https://jquery.org/license/">licensing terms</a> that apply to jQuery projects. You can also <a href="https://jquery.org/donate/">make a donation</a> to help the <a href="https://jquery.org/team/">jQuery team</a> continue to improve jQuery.</p>

<p>One important thing to know is that jQuery is just a <b>JavaScript library</b>. All the power of jQuery is accessed via JavaScript, so having a strong grasp of JavaScript is essential for understanding, structuring, and debugging your code. While working with jQuery regularly can, over time, improve your proficiency with JavaScript, it can be hard to get started writing jQuery without a working knowledge of JavaScript's built-in constructs and syntax. Therefore, if you're new to JavaScript, we recommend checking out the <a href="https://developer.mozilla.org/en-US/Learn/Getting_started_with_the_web/JavaScript_basics">JavaScript basics tutorial</a> on the Mozilla Developer Network (MDN).</p>

<?php $this->widget('zii.widgets.CMenu',array(
    'items'=>array(
        array('label'=>'How jQuery Works', 'url'=>array('about_jquery/how_jquery_works')),
        array('label'=>'Additional jQuery Support', 'url'=>array('about_jquery/additional_support')),
    ),
)); ?>