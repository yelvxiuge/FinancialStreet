<?php
/**
 * Created by PhpStorm.
 * User: sukhoi
 * Date: 8/23/16
 * Time: 10:55 PM
 */
use yii\widgets\DetailView;;
$this->title = 'Get code';
?>

<div class="panel panel-default">
    <div class=" alert alert-danger ">感谢您参加此次活动,请截屏以保存抽奖信息</div>
    <div class="panel-body">
        抽奖信息为:
    </div>
</div>


<?= DetailView::widget([
    'model' => $model,
    'attributes' => [
        'name',
        'phone',
        [                      // the owner name of the model
            'label' => '抽奖码',
            'value' => 'T'.substr($model->phone,-4),
        ],
    ],
]) ?>


<div class="row">
    <div class="col-xs-6 col-md-3">
            <img src="http://qrcode.wboll.com/index.php?r=site/qr&content=http://h5.md5crack.cn" alt="...">
    </div>
</div>
