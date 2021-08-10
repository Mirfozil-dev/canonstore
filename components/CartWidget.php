<?php


namespace app\components;
use Yii;
use yii\base\Widget;


class CartWidget extends Widget
{
    public $count = 0;
    function __construct($config = [])
    {
        $session = Yii::$app->session;
        $session->open();

        if ($session->has('cart')) {
            $this->count = count($session->get('cart.products'));
        }
    }

    public function run()
    {
        echo '<a href="/site/cart">
                    <div class="nav_items_cart">
                        <img src='.Yii::getAlias('@web').'/images/cart.png" alt="" width="30px">
                        <span class="number_offer">'.$this->count.'</span>
                    </div>
                </a>';
    }
}