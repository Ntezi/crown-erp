<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;
use yii\bootstrap\Modal;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $model backend\models\Project*/
/* @var $form yii\widgets\ActiveForm */

$this->title = Yii::t('app', 'Projects');
$this->params['breadcrumbs'][] = $this->title;
?>
<div id="panel-1" class="panel">
    <div class="panel-hdr">
        <h2><?= Html::encode($this->title) ?> <span class="fw-300"><i>List</i></span></h2>
        <div class="panel-toolbar">
            <button type="button" class="btn btn btn-dark" data-toggle="modal" data-target=".example-modal-centered-transparent">Create Project</button>
        </div>
    </div>
    <div class="panel-container show">
        <div class="panel-content">
            <!-- datatable start -->
            <div id="dt-basic-example_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <div class="row">
                    <div class="col-sm-12">
                        <table id="dt-basic-example"
                               class="table table-bordered table-hover table-striped w-100 dataTable dtr-inline"
                               role="grid" aria-describedby="dt-basic-example_info" style="width: 1062px;">
                            <thead>
                            <tr role="row">
                                <th class="sorting_asc text-left" tabindex="0" aria-controls="dt-basic-example" rowspan="1"
                                    colspan="1" style="width: 166px;" aria-sort="ascending"
                                    aria-label="Name: activate to sort column descending">Name
                                </th>
                                <th class="sorting text-right" tabindex="0" aria-controls="dt-basic-example" rowspan="1"
                                    colspan="1" style="width: 251px;"
                                    aria-label="Position: activate to sort column ascending">Start Date
                                </th>
                                <th class="sorting text-center" tabindex="0" aria-controls="dt-basic-example" rowspan="1"
                                    colspan="1" style="width: 251px;"
                                    aria-label="Position: activate to sort column ascending">Estimated Period
                                </th>
                                <th class="sorting text-center" tabindex="0" aria-controls="dt-basic-example" rowspan="1"
                                    colspan="1" style="width: 251px;"
                                    aria-label="Position: activate to sort column ascending">Created At
                                </th>
                                <th class="sorting text-center" tabindex="0" aria-controls="dt-basic-example" rowspan="1"
                                    colspan="1" style="width: 251px;"
                                    aria-label="Position: activate to sort column ascending">Created By
                                </th>
                                <th class="sorting text-center" tabindex="0" aria-controls="dt-basic-example" rowspan="1"
                                    colspan="1" style="width: 251px;"
                                    aria-label="Position: activate to sort column ascending">Status
                                </th>
                                <th class="sorting text-center" tabindex="0" aria-controls="dt-basic-example" rowspan="1"
                                    colspan="1" style="width: 251px;"
                                    aria-label="Position: activate to sort column ascending">
                                </th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php echo ListView::widget([
                                'dataProvider' => $dataProvider,
                                'options' => [],
                                'layout' => "{pager}\n{items}\n{summary}",
                                'itemView' => function ($model, $key, $index, $widget) {
                                    return $this->render('_item', ['model' => $model]);
                                },
                            ]);
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- datatable end -->
        </div>
    </div>
</div>
<div class="modal fade example-modal-centered-transparent" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-transparent" role="document">
        <div class="modal-content">
            <?php $form = ActiveForm::begin(['action' => Url::to(['project/create'])]); ?>
            <div class="modal-header">
                <h4 class="modal-title text-white">
                    New Project
                    <small class="m-0 text-white opacity-70"></small>
                </h4>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fal fa-times"></i></span>
                </button>
            </div>
            <div class="modal-body">
                <?= $form->field($model, 'name')->textInput(['maxlength' => true, 'placeholder' => 'Name'])->label(false) ?>
                <?= $form->field($model, 'description')->textarea(['maxlength' => true, 'placeholder' => 'Description'])->label(false) ?>
                <?php echo $form->field($model, 'start_date')
                    ->textInput(['maxlength' => true, 'placeholder' => 'Start Date', 'id' => 'datepicker-2', 'data-date-format'=>'yyyy-mm-dd'])
                    ->label(false)
                    ->hint('e.g: 2019-12-31', ['style' => ['color' => 'white']]) ?>
                <?= $form->field($model, 'estimated_period')
                    ->textInput(['placeholder' => 'Estimated Period'])
                    ->label(false)
                    ->hint('e.g: 90 days', ['style' => ['color' => 'white']]) ?>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-primary']) ?>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
