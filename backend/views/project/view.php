<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Project */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Projects'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div id="panel-4" class="panel w-75">
    <div class="panel-hdr color-warning-800">
        <h2>
            <?= Html::encode($this->title) ?> <span class="fw-300"><i>Panel</i></span>
        </h2>
        <div class="panel-toolbar">
            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip"
                    data-offset="0,10" data-original-title="Fullscreen"></button>
        </div>
    </div>
    <div class="panel-container show">
        <div class="panel-content">
            <div class="panel-body">
                <?= DetailView::widget([
                    'model' => $model,
                    'attributes' => [
                        'id',
                        'name',
                        'code',
                        'description:ntext',
                        'start_date',
                        'estimated_period',
//                        'status',
                        [
                            'attribute' => 'status',
                            'label' => Yii::t('app', 'Status'),
                            'value' => function ($model) {
                                return $model->getStatus();
                            },
                        ],
                        'created_at',
//                        'updated_at',
//                        'created_by',
                        [
                            'attribute' => 'created_by',
                            'label' => Yii::t('app', 'Created By'),
                            'value' => function ($model) {
                                return $model->getUser()->username;
                            },
                        ],
//                        'updated_by',
                    ],
                ]) ?>
            </div>
            <div class="panel-footer">
                <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
                    'class' => 'btn btn-danger',
                    'data' => [
                        'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                        'method' => 'post',
                    ],
                ]) ?>
            </div>
        </div>
    </div>
</div>
