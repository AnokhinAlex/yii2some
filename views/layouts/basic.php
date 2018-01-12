<?php
use app\assets\AppAsset;
use yii\helpers\Html;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<h1> Hello, Basic! </h1>

<div class="wrap">
    <div class="container">
        <ul class="nav nav-pills">
            <li class="active"><?php echo Html::a('Главная', '/web/') ?></li>
            <li><?php echo Html::a('Статьи', ['post/test']) ?></li>
            <li><?php echo Html::a('Статья', ['post/show']) ?></li>

        </ul>
    </div>
    <?php echo $content ?>
</div>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>