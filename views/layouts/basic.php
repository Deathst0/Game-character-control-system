<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= Html::encode($this->title) ?></title>
  <?php $this->head() ?>
</head>
<body class="test20">
  <?php $this->beginBody() ?>

  <div class="wrap">
    <div class="container">

      <ul class="nav nav-pills">
        <li role="presentation"><?= Html::a('Таблица игроков', ['stalker/index']) ?></li>
        <li role="presentation"><?= Html::a('Таблица вещей', ['stalker/inventories']) ?></li>
        <li role="presentation"><?= Html::a('Таблица передвижений', ['stalker/moves']) ?></li>
      </ul>

      <?php if( isset($this->blocks['block1']) ): ?>
        <?php echo $this->blocks['block1'] ?>
      <?php endif;  ?>
      
      <?= $content ?>

    </div>
  </div>
  

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
