<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 9/21/17
 * Time: 10:36 AM
 */

use yii\web\View;
use \yii\helpers\Url;

?>
<aside class="page-sidebar">
    <div class="page-logo">
        <a href="#" class="page-logo-link press-scale-down d-flex align-items-center position-relative"
           data-toggle="modal" data-target="#modal-shortcut">
            <span class="page-logo-text mr-1"><?php echo Yii::$app->name; ?></span>
            <span class="position-absolute text-white opacity-50 small pos-top pos-right mr-2 mt-n2"></span>
            <i class="fal fa-angle-down d-inline-block ml-1 fs-lg color-primary-300"></i>
        </a>
    </div>

    <nav id="js-primary-nav" class="primary-nav" role="navigation">
        <div class="info-card" style="height: 60px">
            <div class="info-card-text">
                <a href="#" class="d-flex align-items-center text-white">
                    <span class="d-inline-block"><?php echo Yii::$app->user->identity->username; ?></span>
                </a>
                <span class="d-inline-block"><?php echo Yii::$app->user->identity->email; ?></span>
            </div>
        </div>
        <ul id="js-nav-menu" class="nav-menu">
            <li>
                <a href="<?php echo Url::to(['site/']) ?>" title="Analytics Dashboard" data-filter-tags="application intel analytics dashboard">
                    <i class="fal fa-home"></i>
                    <span class="nav-link-text" data-i18n="nav.application_intel_analytics_dashboard"><?php echo Yii::t('app', 'Home') ?></span>
                </a>
            </li>
            <li class="nav-title"><?php echo Yii::t('app', 'Sales') ?></li>
            <li>
                <a href="#" title="UI Components" data-filter-tags="ui sales">
                    <i class="fal fa-money-bill"></i>
                    <span class="nav-link-text"><?php echo Yii::t('app', 'Sales Report') ?></span>
                </a>
                <ul>
                    <li>
                        <a href="<?php echo Url::to(['invoice/']) ?>" title="Invoices" data-filter-tags="ui sales invoice">
                            <span class="nav-link-text" data-i18n="nav.ui_components_alerts"><?php echo Yii::t('app', 'Invoices') ?></span>
                        </a>
                    </li>
                    <!--<li>
                        <a href="<?php /*echo Url::to(['refund/']) */?>" title="Refunds" data-filter-tags="ui sales refund">
                            <span class="nav-link-text" data-i18n="nav.ui_components_accordions"><?php /*echo Yii::t('app', 'Refunds') */?></span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php /*echo Url::to(['proforma/']) */?>" title="Proforma" data-filter-tags="ui sales proforma">
                            <span class="nav-link-text" data-i18n="nav.ui_components_badges"><?php /*echo Yii::t('app', 'Proforma') */?></span>
                        </a>
                    </li>-->
                </ul>
            </li>
            <li class="nav-title"><?php echo Yii::t('app', 'Stock & Purchase Reports') ?></li>
            <li>
                <a href="#" title="UI Components" data-filter-tags="ui purchase-status">
                    <i class="fal fa-shopping-cart"></i>
                    <span class="nav-link-text"><?php echo Yii::t('app', 'Purchases') ?></span>
                </a>
                <ul>
                    <li>
                        <a href="<?php echo Url::to(['order/']) ?>" title="Items" data-filter-tags="ui purchase-status order">
                            <span class="nav-link-text" data-i18n="nav.ui_components_alerts"><?php echo Yii::t('app', 'Order') ?></span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo Url::to(['purchase/']) ?>" title="Manufactures" data-filter-tags="ui purchase-status purchase">
                            <span class="nav-link-text" data-i18n="nav.ui_components_accordions"><?php echo Yii::t('app', 'Purchase') ?></span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#" title="UI Components" data-filter-tags="ui stock-status">
                    <i class="fal fa-inventory"></i>
                    <span class="nav-link-text"><?php echo Yii::t('app', 'Stock') ?></span>
                </a>
                <ul>
                    <li>
                        <a href="<?php echo Url::to(['stock/']) ?>" title="Supplier" data-filter-tags="ui stock-status stock">
                            <span class="nav-link-text" data-i18n="nav.ui_components_badges"><?php echo Yii::t('app', 'Stock') ?></span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo Url::to(['inventory/']) ?>" title="Proforma" data-filter-tags="ui stock-status inventory">
                            <span class="nav-link-text" data-i18n="nav.ui_components_badges"><?php echo Yii::t('app', 'Inventory') ?></span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-title"><?php echo Yii::t('app', 'Items') ?></li>
            <li>
                <a href="#" title="UI Components" data-filter-tags="ui setting">
                    <i class="fal fa-cogs"></i>
                    <span class="nav-link-text"><?php echo Yii::t('app', 'Settings') ?></span>
                </a>
                <ul>
                    <li>
                        <a href="<?php echo Url::to(['item/']) ?>" title="Items" data-filter-tags="ui setting item">
                            <span class="nav-link-text" data-i18n="nav.ui_components_alerts"><?php echo Yii::t('app', 'Items') ?></span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo Url::to(['client/']) ?>" title="Client" data-filter-tags="ui setting client">
                            <span class="nav-link-text" data-i18n="nav.ui_components_badges"><?php echo Yii::t('app', 'Clients') ?></span>
                        </a>
                    </li>
                    <!--<li>
                        <a href="<?php /*echo Url::to(['manufacture/']) */?>" title="Manufactures" data-filter-tags="ui setting manufacture">
                            <span class="nav-link-text" data-i18n="nav.ui_components_accordions"><?php /*echo Yii::t('app', 'Manufactures') */?></span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php /*echo Url::to(['supplier/']) */?>" title="Supplier" data-filter-tags="ui supplier proforma">
                            <span class="nav-link-text" data-i18n="nav.ui_components_badges"><?php /*echo Yii::t('app', 'Suppliers') */?></span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php /*echo Url::to(['category/']) */?>" title="Proforma" data-filter-tags="ui setting category">
                            <span class="nav-link-text" data-i18n="nav.ui_components_badges"><?php /*echo Yii::t('app', 'Categories') */?></span>
                        </a>
                    </li>-->
                </ul>
            </li>
        </ul>
    </nav>
</aside>

