<?php

class Dynasty_scansController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}
    
    // Introduction
	public function actionA_word_about_editing()
	{
		$this->render('a_word_about_editing');
	}
	public function actionWhats_good_enough()
	{
		$this->render('whats_good_enough');
	}
    
    // Cleaning
	public function actionStraightening()
	{
		$this->render('straightening');
	}
	public function actionLeveling_and_curves()
	{
		$this->render('leveling_and_curves');
	}
	public function actionRedrawing()
	{
		$this->render('redrawing');
	}
	public function actionTransformation()
	{
		$this->render('transformation');
	}
	public function actionGutter()
	{
		$this->render('gutter');
	}
	public function actionTwo_page_spreads()
	{
		$this->render('two_page_spreads');
	}
	public function actionColor_images()
	{
		$this->render('color_images');
	}
}
