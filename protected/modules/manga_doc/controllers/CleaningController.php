<?php

class CleaningController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}
    
	public function actionBasic_areas()
	{
		$this->render('basic_areas');
	}
    
	public function actionRedrawing()
	{
		$this->render('redrawing');
	}
    
	public function actionRedrawing_1()
	{
		$this->render('redrawing_1');
	}
}