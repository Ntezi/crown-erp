<?php

use yii\helpers\Html;
use \yii\helpers\Url;
use yii\bootstrap\ActiveForm;

/* @var $model backend\models\Project */
?>
<article class="item" data-key="<?php echo $model->id; ?>">
    <tr role="row">
        <td class="text-left strong fw-700"><?php echo $model->name; ?></td>
        <td class="text-right"><?php echo $model->description; ?></td>
        <td class="text-right"><?php echo $model->start_date; ?></td>
        <td class="text-right"><?php echo $model->estimated_period; ?></td>
        <td class="text-right">
            <a href="#" class="btn btn-secondary btn-m-s" data-toggle="modal" data-target=".example-modal-centered-transparent-<?php echo $model->id; ?>">
                <i class="fal fa-edit"></i>
            </a>
            <a href="<?php echo Url::to(['project/view', 'id' => $model->id]); ?>" class="btn btn-primary btn-m-s">
                <i class="fal fa-eye"></i>
            </a>
        </td>
    </tr>
    <div class="modal fade example-modal-centered-transparent-<?php echo $model->id; ?>" tabindex="-1" role="dialog"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-transparent" role="document">
            <div class="modal-content">
                <?php $form = ActiveForm::begin(['action' => Url::to(['project/update', 'id' => $model->id])]); ?>
                <div class="modal-header">
                    <h4 class="modal-title text-white">
                        <?php echo $model->name; ?>
                        <small class="m-0 text-white opacity-70"> <b class="fw-900 color-secondary-900"><?php echo $model->code; ?></b></small>
                    </h4>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fal fa-times"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <?= $form->field($model, 'name')
                        ->textInput(['maxlength' => true, 'placeholder' => 'Name', 'value' => $model->name])
                        ->label('Name', ['style' => ['color' => 'white'],]) ?>
                    <?= $form->field($model, 'description')
                        ->textInput(['maxlength' => true, 'placeholder' => 'Description', 'value' => $model->description])
                        ->label('Description', ['style' => ['color' => 'white'],]) ?>
                    <?php echo $form->field($model, 'start_date')
                        ->textInput(['maxlength' => true, 'placeholder' => 'Start Date', 'value' => $model->start_date, 'id' => 'datepicker-1', 'data-date-format'=>'yyyy-mm-dd'])
                        ->label(false)
                        ->hint('e.g: 2019-12-31', ['style' => ['color' => 'white']]) ?>
                    <?= $form->field($model, 'estimated_period')
                        ->textInput(['placeholder' => 'Estimated Period', 'value' => $model->estimated_period])
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
</article>