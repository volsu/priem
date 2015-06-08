<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UserSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'object1') ?>

    <?= $form->field($model, 'object2') ?>

    <?= $form->field($model, 'object3') ?>

    <?= $form->field($model, 'ind_achivement') ?>

    <?php // echo $form->field($model, 'type_document') ?>

    <?php // echo $form->field($model, 'is_benefit') ?>

    <?php // echo $form->field($model, 'is_olymp') ?>

    <?php // echo $form->field($model, 'is_target') ?>

    <?php // echo $form->field($model, 'is_enrolled') ?>

    <?php // echo $form->field($model, 'priority') ?>

    <?php // echo $form->field($model, 'order') ?>

    <?php // echo $form->field($model, 'oop_base') ?>

    <?php // echo $form->field($model, 'is_expelled') ?>

    <?php // echo $form->field($model, 'enrollee_code') ?>

    <?php // echo $form->field($model, 'enrollee_name') ?>

    <?php // echo $form->field($model, 'total_balls') ?>

    <?php // echo $form->field($model, 'is_concurs_out') ?>

    <?php // echo $form->field($model, 'is_rec_by_priority') ?>

    <?php // echo $form->field($model, 'is_rec_by_other') ?>

    <?php // echo $form->field($model, 'cg_code') ?>

    <?php // echo $form->field($model, 'cg_view') ?>

    <?php // echo $form->field($model, 'cg_form') ?>

    <?php // echo $form->field($model, 'cg_oop_code') ?>

    <?php // echo $form->field($model, 'cg_oop_name') ?>

    <?php // echo $form->field($model, 'cg_level') ?>

    <?php // echo $form->field($model, 'cg_base') ?>

    <?php // echo $form->field($model, 'cg_unique_right') ?>

    <?php // echo $form->field($model, 'stat_plan') ?>

    <?php // echo $form->field($model, 'stat_quota') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
