<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'object1')->textInput() ?>

    <?= $form->field($model, 'object2')->textInput() ?>

    <?= $form->field($model, 'object3')->textInput() ?>

    <?= $form->field($model, 'ind_achivement')->textInput() ?>

    <?= $form->field($model, 'type_document')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'is_benefit')->textInput() ?>

    <?= $form->field($model, 'is_olymp')->textInput() ?>

    <?= $form->field($model, 'is_target')->textInput() ?>

    <?= $form->field($model, 'is_enrolled')->textInput() ?>

    <?= $form->field($model, 'priority')->textInput() ?>

    <?= $form->field($model, 'order')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'oop_base')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'is_expelled')->textInput() ?>

    <?= $form->field($model, 'enrollee_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'enrollee_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'total_balls')->textInput() ?>

    <?= $form->field($model, 'is_concurs_out')->textInput() ?>

    <?= $form->field($model, 'is_rec_by_priority')->textInput() ?>

    <?= $form->field($model, 'is_rec_by_other')->textInput() ?>

    <?= $form->field($model, 'cg_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cg_view')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cg_form')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cg_oop_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cg_oop_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cg_level')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cg_base')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cg_unique_right')->textInput() ?>

    <?= $form->field($model, 'stat_plan')->textInput() ?>

    <?= $form->field($model, 'stat_quota')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
