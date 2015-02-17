<?php

class Manga_docModule extends CWebModule
{
    /*
     * How to embed the css and images in a module
     * source: http://www.yiiframework.com/forum/index.php/topic/11846-share-how-to-embed-the-css-and-images-in-a-module/
     */
    private $_assetsUrl;

    /**
    * @return string the base URL that contains all published asset files of this module.
    */
    public function getAssetsUrl()
    {
        if($this->_assetsUrl===null)
        $this->_assetsUrl=Yii::app()->getAssetManager()->publish(Yii::getPathOfAlias('manga_doc.assets'));
        return $this->_assetsUrl;
    }

    /**
    * @param string the base URL that contains all published asset files of this module.
    */
    public function setAssetsUrl($value)
    {
        $this->_assetsUrl=$value;
    }

    public function registerCss($file, $media='all')
    {
        $href = $this->getAssetsUrl().'/css/'.$file;
        return '<link rel="stylesheet" type="text/css" href="'.$href.'" media="'.$media.'" />';
    }

    public function registerImage($file)
    {
        return $this->getAssetsUrl().'/images/'.$file;
    }

    public function registerImage_tutorial($file)
    {
        return $this->getAssetsUrl().'/images/tutorials/'.$file;
    }
    
    /*
     * Example of calling the css and images in modules/admin/layouts/main.php
     * 
     * //calling the css
     * <?php echo Yii::app()->controller->module->registerCss('main.css');?>
     * 
     *  //calling the images
     * <?php echo CHtml::image(Yii::app()->controller->module->registerImage('logo.png'), "logo");?>
     */
    
	public function init()
	{
		// this method is called when the module is being created
		// you may place code here to customize the module or the application

		// import the module-level models and components
		$this->setImport(array(
			'manga_doc.models.*',
			'manga_doc.components.*',
		));
	}

	public function beforeControllerAction($controller, $action)
	{
		if(parent::beforeControllerAction($controller, $action))
		{
			// this method is called before any module controller action is performed
			// you may place customized code here
			return true;
		}
		else
			return false;
	}
}
