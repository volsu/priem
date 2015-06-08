<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Form;
use app\models\Base;
use app\models\Program;
use app\models\Level;
/* @var $this yii\web\View */
/* @var $model app\models\UserSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        //'enableClientValidation'   => false
    ]); ?>

    <?php echo $form->field($model, 'cg_level' )->dropDownList(Level::items(), [
        'prompt'    => 'Выберите уровень образования'
    ]); ?>

    <?php echo $form->field($model, 'cg_oop_name')->dropDownList(Program::items(), [
        'prompt'    => 'Выберите тип направления подготовки'
    ]) ?>

    <?php echo $form->field($model, 'cg_form' )->dropDownList(Form::items(), [
        'prompt'    => 'Выберите форму обучения'
    ]); ?>

    <?php echo $form->field($model, 'cg_base' )->dropDownList(Base::items(), [
        'prompt'    => 'Выберите тип приема'
    ]); ?>

    <?php // $form->field($model, 'id') ?>

    <?php // $form->field($model, 'object1') ?>

    <?php // $form->field($model, 'object2') ?>

    <?php // $form->field($model, 'object3') ?>

    <?php // $form->field($model, 'ind_achivement') ?>

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



    <?php // echo $form->field($model, 'cg_oop_code') ?>

    <?php // echo $form->field($model, 'cg_oop_name') ?>

    <?php // echo $form->field($model, 'cg_level') ?>

    <?php // echo $form->field($model, 'cg_base') ?>

    <?php // echo $form->field($model, 'cg_unique_right') ?>

    <?php // echo $form->field($model, 'stat_plan') ?>

    <?php // echo $form->field($model, 'stat_quota') ?>

    <div class="form-group pull-right">
        <?= Html::submitButton(Yii::t('app', 'Поиск'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Сбросить'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
