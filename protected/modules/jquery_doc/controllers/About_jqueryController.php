<?php

class About_jqueryController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}
	public function actionHow_jquery_works()
	{
		$this->render('how_jquery_works');
	}
	public function actionAdditional_support()
	{
		$this->render('additional_support');
	}
}