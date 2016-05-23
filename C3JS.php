<?php
namespace kongoon\c3js;
use yii\base\Widget;
use yii\helpers\Html;

class C3JS extends Widget
{
    public $htmlOptions = [];
    public function run()
    {
        if(isset($this->htmlOptions['id'])){
            $this->id = $this->htmlOptions['id'];
        }else{
            $this->id = $this->htmlOptions['id'] = $this->getId();
        }
        echo Html::tag('div', '', $this->htmlOptions);
        $this->registerAsset();
        parent::run();
    }

    protected function registerAsset()
    {
        C3JSAsset::register($this->view);
    }
}
