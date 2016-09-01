<?php
/**
 * Created by PhpStorm.
 * User: sukhoi
 * Date: 8/23/16
 * Time: 10:55 PM
 */
use yii\widgets\DetailView;
use app\assets\AppAsset;
AppAsset::register($this);
$this->context->layout = false;

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>

    <meta charset="utf-8" />
    <title></title>
    <?php $this->head() ?>
    <meta name="location" content="">
    <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/ccode.css">
<!--    --><?//= Html::csrfMetaTags() ?>

</head>
<?php $this->beginBody() ?>
<body>
<article class="reg-info">
    <h1 class="animated bounceIn">
        <ul>
            <li>登记成功！</li>
            <li>请截图保存</li>
        </ul>
    </h1>
    <dl class="i">
        <?= DetailView::widget([
            'model' => $model,
            'attributes' => [
                'name',
                'phone',
//                [                      // the owner name of the model
//                    'attribute' => 'phone',
//                    'value' => $model->phone,
//
//                ],
                [                      // the owner name of the model
                    'label' => '抽奖码',
                    'value' => 'T'.substr($model->phone,-4),
                ],

            ],

            'options' => ['class' => 'table table-striped table-bordered '],

        ]) ?>

    </dl>
    <img src="images/e.png" width="231" height="80" class="e animated bounce" />
</article>
<img src="images/g.png" class="l animated fadeInLeft" width="139" height="18" />
<img src="images/r.png" class="r animated flip" width="140" height="150" />
<?php $this->endBody() ?>
</body>


</html>
<?php $this->endPage() ?>


<!--<div class="row">-->
<!--    <div class="col-xs-6 col-md-3">-->
<!--            <img src="http://qrcode.wboll.com/index.php?r=site/qr&content=http://h5.md5crack.cn" alt="...">-->
<!--    </div>-->
<!--</div>-->
