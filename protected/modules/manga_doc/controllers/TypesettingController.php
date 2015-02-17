<?php

class TypesettingController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}
    
	public function actionDo_and_dont()
	{
		$this->render('do_and_dont');
	}
    
	public function actionFont_lists()
	{
		$this->render('font_lists');
	}
    
	public function actionHow_do_i_know_which_fonst_go_where()
	{
		$this->render('how_do_i_know_which_fonst_go_where');
	}
    
	public function actionShaping_and_placing()
	{
		$this->render('shaping_and_placing');
	}
    
	public function actionStroking()
	{
		$this->render('stroking');
	}
    
	public function actionWhich_type_of_fonts()
	{
		$this->render('which_type_of_fonts');
	}
}