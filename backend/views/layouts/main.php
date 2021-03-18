<?php

/* @var $this \yii\web\View */

/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<!-- BEGIN Page Wrapper -->
<div class="page-wrapper">
    <div class="page-inner">
        <!-- BEGIN Left Aside -->
        <?php echo $this->render('_menu') ?>
        <!-- END Left Aside -->
        <div class="page-content-wrapper">
            <!-- BEGIN Page Header -->
            <?php echo $this->render('_header') ?>
            <!-- END Page Header -->
            <!-- BEGIN Page Content -->
            <!-- the #js-page-content id is needed for some plugins to initialize -->
            <main id="js-page-content" role="main" class="page-content">

                <?php echo Breadcrumbs::widget([
                    'tag' => 'ol',
                    'options' => ['class' => 'breadcrumb page-breadcrumb'],
                    'itemTemplate' => "<li class=\"breadcrumb-item\">{link}</li>\n",
                    'activeItemTemplate' => "<li class=\"breadcrumb-item active\">{link}</li>\n",
//                    'homeLink'=> false,
                    'homeLink' => [
                        'label' => Yii::t('app', 'Home'),
                        'url' => Yii::$app->homeUrl,
                    ],
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ]);
                ?>
                <?= $content ?>
            </main>
            <!-- BEGIN Page Footer -->
            <?php echo $this->render('_footer') ?>

            <!-- BEGIN Quick Menu -->
            <?php echo $this->render('_shortcut') ?>
            <!-- END Quick Menu -->
        </div>
    </div>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
