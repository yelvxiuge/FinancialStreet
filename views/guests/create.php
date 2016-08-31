<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Guests */

//$this->title = 'Create Guests';
/*
$this->params['breadcrumbs'][] = ['label' => 'Guests', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
*/
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
    <meta name="location" content="">
    <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/ccode.css">
    <?= Html::csrfMetaTags() ?>
    <?php $this->head() ?>

</head>
<body>
<?php $this->beginBody() ?>

<article class="reg-info">

<div class="guests-create">

    <h1 class="animated bounceIn">巅峰之战，由我见证！</h1>
    <dl class="r">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
    </dl>

</div>
</article>
<img src="images/slogo.png" class="l animated fadeInLeft" width="130" height="36" />
<img src="images/r.png" class="r animated flip" width="140" height="150" />

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
