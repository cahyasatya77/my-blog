<?php

/** @var yii\web\View $this */
/** @var string $content */

use backend\assets\AppAsset;
use backend\assets\AppLoginAsset;
use common\widgets\Alert;
use yii\helpers\Html;
use yii\web\View;

// AppAsset::register($this);
AppLoginAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<main role="main">
    <div class="container">
        <canvas class="background"></canvas>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>

<?php $this->endBody() ?>
<?php
$script = <<<JS
    window.onload = function() {
        Particles.init({
            selector: '.background',
            color: '#007bff',
            sizeVariations: 3,
            maxParticles : 125,
            speed: 0.5,
            minDistance: 120,
            connectParticles: true,
        });
    };
JS;
$this->registerJs($script);
// $this->registerJsFile('@web/js/particles.js');
$this->registerCss("
.background {
  position: absolute;
  display: block;
  top: 0;
  left: 0;
  z-index: 0;
}");
?>
</body>
</html>
<?php $this->endPage();?>



