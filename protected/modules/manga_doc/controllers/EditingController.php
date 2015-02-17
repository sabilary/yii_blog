<?php

class EditingController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}

	public function actionConvert_your_image_to_grayscale()
	{
		$this->render('convert_your_image_to_grayscale');
	}

	public function actionCrooked_page()
	{
		$this->render('crooked_page');
	}

	public function actionCropping_your_page()
	{
		$this->render('cropping_your_page');
	}

	public function actionLeveling()
	{
		$this->render('leveling');
	}

	public function actionUpside_down_scan()
	{
		$this->render('upside_down_scan');
	}
}