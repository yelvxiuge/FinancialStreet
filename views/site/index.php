<?php

/* @var $this yii\web\View */
use  yii\helpers\Url;
use   yii\helpers\Html;
$this->title = '金融街';

?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Welcome!!</h1>

        <p class="lead">Here is 金融街</p>

        <p>
		<?= yii\helpers\Html::a("This is my team",Url::to(['site/team']),['class' => 'btn btn-lg btn-success'])?>
	</p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>page 1</h2>

                <p>  a part contant of page 1 </p>

                <p><a class="btn btn-default" href="http://www.baidu.com">test 1 baidu &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>page 2</h2>

                <p>a part contant of page 2 </p>

                <p><a class="btn btn-default" href="http://www.sina.com">test 2 sina  &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2> page 3</h2>

                <p>a part contant of page 3</p>

                <p><a class="btn btn-default" href="http://www.yandex.com">test 3 yandex  &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
