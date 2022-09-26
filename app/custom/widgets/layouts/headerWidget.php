<?php 

namespace app\custom\widgets\layouts;

use yii\base\Widget;

class HeaderWidget extends Widget
{
    public $params;

    public function init()
    {
        parent::init();
        if($this->params === null)
            $this->params = 'Hello World';
    }

    public function run()
    {
      return $this->render('header', ['params' => $this->params]);
    }
}