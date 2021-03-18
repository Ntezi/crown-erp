<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 9/21/17
 * Time: 10:35 AM
 */

use yii\helpers\Html;
use yii\helpers\Url;

?>
<!-- BEGIN Page Header -->
<header class="page-header" role="banner">
    <!-- DOC: nav menu layout change shortcut -->
    <div class="hidden-md-down dropdown-icon-menu position-relative">
        <a href="#" class="header-btn btn js-waves-off" data-action="toggle" data-class="nav-function-hidden"
           title="Hide Navigation">
            <i class="ni ni-menu"></i>
        </a>
    </div>

    <div class="ml-auto d-flex">
        <!-- app user menu -->
        <div>
            <a href="#" data-toggle="dropdown" title="drlantern@gotbootstrap.com"
               class="header-icon d-flex align-items-center justify-content-center ml-2">
                <span class="rounded-circle profile-image"><i class="fal fa-user"></i></span>
            </a>
            <div class="dropdown-menu dropdown-menu-animated dropdown-lg">
                <div class="dropdown-header bg-trans-gradient d-flex flex-row py-4 rounded-top">
                    <div class="d-flex flex-row align-items-center mt-1 mb-1 color-white">
                        <div class="info-card-text">
                            <div class="fs-lg text-truncate text-truncate-lg"><?php echo Yii::$app->user->identity->username; ?></div>
                            <span class="text-truncate text-truncate-md opacity-80"><?php echo Yii::$app->user->identity->email; ?></span>
                        </div>
                    </div>
                </div>
                <div class="dropdown-divider m-0"></div>
                <a href="<?php echo Yii::$app->homeUrl; ?>" class="dropdown-item">
                    <span data-i18n="drpdwn.home">Back Home</span>
                </a>
                <div class="dropdown-divider m-0"></div>
                <a href="#" class="dropdown-item" data-toggle="modal" data-target=".js-modal-settings">
                    <span data-i18n="drpdwn.settings">Settings</span>
                </a>
                <div class="dropdown-divider m-0"></div>
                <a href="#" class="dropdown-item" data-action="app-fullscreen">
                    <span data-i18n="drpdwn.fullscreen">Fullscreen</span>
                    <i class="float-right text-muted fw-n">F11</i>
                </a>
                <a href="#" class="dropdown-item" data-action="app-print">
                    <span data-i18n="drpdwn.print">Print</span>
                    <i class="float-right text-muted fw-n">Ctrl + P</i>
                </a>
                <div class="dropdown-divider m-0"></div>
                <a class="dropdown-item fw-500 pt-3 pb-3"
                   href="<?= Url::to(['site/logout']) ?>">
                    <span data-i18n="drpdwn.page-logout">Logout</span>
                    <span class="float-right fw-n">&commat;<?php echo Yii::$app->user->identity->username; ?></span>
                </a>
            </div>
        </div>
    </div>
</header>
<!-- END Page Header -->





