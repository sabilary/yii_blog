<?php
/* @var $this About_jqueryController */
$this->pageTitle='How jQuery Works | '.Yii::app()->name;

$this->breadcrumbs=array(
	'About Jquery'=>array('index'),
    'How jQuery Works',
);
?>
<h1>How jQuery Works</h1>



<hr/>
<h2>jQuery: The Basics</h2>

<p>This is a basic tutorial, designed to help you get started using jQuery. If you don't have a test page setup yet, start by creating the following HTML page:</p>

<?php $this->beginWidget('system.web.widgets.CTextHighlighter',array(
	'language'=>'PHP',
	'showLineNumbers'=>true,
    'containerOptions'=>array('class'=>'ctext-highlighter'),
)); ?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Demo</title>
</head>
<body>
    <a href="http://jquery.com/">jQuery</a>
    <script src="jquery.js"></script>
    <script>
 
    // Your code goes here.
 
    </script>
</body>
</html>
<?php $this->endWidget(); ?>

<p>The <code>src</code> attribute in the <code><?php echo CHtml::encode('<script>'); ?></code> element must point to a copy of jQuery. Download a copy of jQuery from the <a href="http://jquery.com/download/">Downloading jQuery</a> page and store the <code>jquery.js</code> file in the same directory as your HTML file.</p>

<p class="hint-text"><b>Note:</b> <i>When you download jQuery, the file name may contain a version number, e.g., <code>jquery-x.y.z.js</code>. Make sure to either rename this file to <code>jquery.js</code> or update the <code>src</code> attribute of the <code><?php echo CHtml::encode('<script>'); ?></code> element to match the file name.</i></p>



<hr/>
<h2>Launching Code on Document Ready</h2>

<p>To ensure that their code runs after the browser finishes loading the document, many JavaScript programmers wrap their code in an <code>onload</code> function:</p>

<?php $this->beginWidget('system.web.widgets.CTextHighlighter',array(
	'language'=>'PHP',
	'showLineNumbers'=>true,
    'containerOptions'=>array('class'=>'ctext-highlighter'),
)); ?>
window.onload = function() {
    alert( "welcome" );
};
<?php $this->endWidget(); ?>

<p>Unfortunately, the code doesn't run until all images are finished downloading, including banner ads. To run code as soon as the document is ready to be manipulated, jQuery has a statement known as the <a href="http://api.jquery.com/ready/">ready event</a>:</p>

<?php $this->beginWidget('system.web.widgets.CTextHighlighter',array(
	'language'=>'PHP',
	'showLineNumbers'=>true,
    'containerOptions'=>array('class'=>'ctext-highlighter'),
)); ?>
$( document ).ready(function() {
    // Your code here.
});
<?php $this->endWidget(); ?>

<p>For example, inside the <code>ready</code> event, you can add a click handler to the link:</p>

<?php $this->beginWidget('system.web.widgets.CTextHighlighter',array(
	'language'=>'PHP',
	'showLineNumbers'=>true,
    'containerOptions'=>array('class'=>'ctext-highlighter'),
)); ?>
$( document ).ready(function() {
    $( "a" ).click(function( event ) {
        alert( "Thanks for visiting!" );
    });
});
<?php $this->endWidget(); ?>

<p>Copy the above jQuery code into your HTML file where it says <code>// Your code goes here</code>. Then, save your HTML file and reload the test page in your browser. Clicking the link should now first display an alert pop-up, then continue with the default behavior of navigating to <a href="http://jquery.com/">http://jquery.com</a>.

For <code>click</code> and most other <a href="http://api.jquery.com/category/events/">events</a>, you can prevent the default behavior by calling <code>event.preventDefault()</code> in the event handler:</p>

<?php $this->beginWidget('system.web.widgets.CTextHighlighter',array(
	'language'=>'PHP',
	'showLineNumbers'=>true,
    'containerOptions'=>array('class'=>'ctext-highlighter'),
)); ?>
$( document ).ready(function() {
    $( "a" ).click(function( event ) {
        alert( "As you can see, the link no longer took you to jquery.com" );
        event.preventDefault();
    });
});
<?php $this->endWidget(); ?>

<p>Try replacing your first snippet of jQuery code, which you previously copied in to your HTML file, with the one above. Save the HTML file again and reload to try it out.</p>



<hr/>
<h2>Complete Example</h2>

<p>The following example illustrates the click handling code discussed above, embedded directly in the HTML <code><?php echo CHtml::encode('<body>'); ?></code>. Note that in practice, it is usually better to place your code in a separate JS file and load it on the page with a <code><?php echo CHtml::encode('<script>'); ?></code> element's <code>src</code> attribute.</p>

<?php $this->beginWidget('system.web.widgets.CTextHighlighter',array(
	'language'=>'PHP',
	'showLineNumbers'=>true,
    'containerOptions'=>array('class'=>'ctext-highlighter'),
)); ?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Demo</title>
</head>
<body>
    <a href="http://jquery.com/">jQuery</a>
    <script src="jquery.js"></script>
    <script>
    $( document ).ready(function() {
        $( "a" ).click(function( event ) {
            alert( "The link will no longer take you to jquery.com" );
            event.preventDefault();
        });
    });
    </script>
</body>
</html>
<?php $this->endWidget(); ?>



<hr/>
<h2>Adding and Removing an HTML Class</h2>

<p class="hint-text"><b>Important:</b> <i>You must place the remaining jQuery examples inside the ready event so that your code executes when the document is <code>ready</code> to be worked on.</i></p>

<p>Another common task is adding or removing a class.</p>

<p>First, add some style information into the <code><?php echo CHtml::encode('<head>'); ?></code> of the document, like this:</p>

<?php $this->beginWidget('system.web.widgets.CTextHighlighter',array(
	'language'=>'PHP',
	'showLineNumbers'=>true,
    'containerOptions'=>array('class'=>'ctext-highlighter'),
)); ?>
<style>
a.test {
    font-weight: bold;
}
</style>
<?php $this->endWidget(); ?>

<p>Next, add the <a href="http://api.jquery.com/addClass/">.addClass()</a> call to the script:</p>

<?php $this->beginWidget('system.web.widgets.CTextHighlighter',array(
	'language'=>'PHP',
	'showLineNumbers'=>true,
    'containerOptions'=>array('class'=>'ctext-highlighter'),
)); ?>
$( "a" ).addClass( "test" );
<?php $this->endWidget(); ?>

<p>All <code><?php echo CHtml::encode('<a>'); ?></code> elements are now bold.</p>

<p>To remove an existing class, use <a href="http://api.jquery.com/removeClass/">.removeClass()</a>:</p>

<?php $this->beginWidget('system.web.widgets.CTextHighlighter',array(
	'language'=>'PHP',
	'showLineNumbers'=>true,
    'containerOptions'=>array('class'=>'ctext-highlighter'),
)); ?>
$( "a" ).removeClass( "test" );
<?php $this->endWidget(); ?>



<hr/>
<h2>Special Effects</h2>

<p>jQuery also provides some handy <a href="http://api.jquery.com/category/effects/">effects</a> to help you make your web sites stand out. For example, if you create a click handler of:</p>

<?php $this->beginWidget('system.web.widgets.CTextHighlighter',array(
	'language'=>'PHP',
	'showLineNumbers'=>true,
    'containerOptions'=>array('class'=>'ctext-highlighter'),
)); ?>
$( "a" ).click(function( event ) {
    event.preventDefault();
    $( this ).hide( "slow" );
});
<?php $this->endWidget(); ?>

<p>Then the link slowly disappears when clicked.</p>



<hr/>
<h2>Callbacks and Functions</h2>

<p>Unlike many other programming languages, JavaScript enables you to freely pass functions around to be executed at a later time. A callback is a function that is passed as an argument to another function and is executed after its parent function has completed. Callbacks are special because they patiently wait to execute until their parent finishes. Meanwhile, the browser can be executing other functions or doing all sorts of other work.</p>

<p>To use callbacks, it is important to know how to pass them into their parent function.</p>


<h3>Callback <i>without</i> Arguments</h3>

<p>If a callback has no arguments, you can pass it in like this:</p>

<?php $this->beginWidget('system.web.widgets.CTextHighlighter',array(
	'language'=>'PHP',
	'showLineNumbers'=>true,
    'containerOptions'=>array('class'=>'ctext-highlighter'),
)); ?>
$.get( "myhtmlpage.html", myCallBack );
<?php $this->endWidget(); ?>

<p>When <a href="http://api.jquery.com/jQuery.get/">$.get()</a> finishes getting the page <code>myhtmlpage.html</code>, it executes the <code>myCallBack()</code> function.</p>

<ul>
    <li><b>Note:</b> The second parameter here is simply the function name (but <i>not</i> as a string, and without parentheses).</li>
</ul>


<h3>Callback <i>with</i> Arguments</h3>

<p>Executing callbacks with arguments can be tricky.</p>

<h4>Wrong</h4>

<p>This code example will not work:</p>

<?php $this->beginWidget('system.web.widgets.CTextHighlighter',array(
	'language'=>'PHP',
	'showLineNumbers'=>true,
    'containerOptions'=>array('class'=>'ctext-highlighter'),
)); ?>
$.get( "myhtmlpage.html", myCallBack( param1, param2 ) );
<?php $this->endWidget(); ?>

<p>The reason this fails is that the code executes <code>myCallBack( param1, param2 )</code> immediately and then passes <code>myCallBack()</code>'s return value as the second parameter to <code>$.get()</code>. We actually want to pass the function <code>myCallBack()</code>, not <code>myCallBack( param1, param2 )</code>'s return value (which might or might not be a function). So, how to pass in <code>myCallBack()</code> and include its arguments?</p>


<h4>Right</h4>

<p>To defer executing <code>myCallBack()</code> with its parameters, you can use an anonymous function as a wrapper. Note the use of <code>function() {</code>. The anonymous function does exactly one thing: calls <code>myCallBack()</code>, with the values of <code>param1</code> and <code>param2</code>.</p>

<?php $this->beginWidget('system.web.widgets.CTextHighlighter',array(
	'language'=>'PHP',
	'showLineNumbers'=>true,
    'containerOptions'=>array('class'=>'ctext-highlighter'),
)); ?>
$.get( "myhtmlpage.html", function() {
    myCallBack( param1, param2 );
});
<?php $this->endWidget(); ?>

<p>When <code>$.get()</code> finishes getting the page <code>myhtmlpage.html</code>, it executes the anonymous function, which executes <code>myCallBack( param1, param2 )</code>.</p>